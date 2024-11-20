<?
error_reporting(0);
include "admin/php/config.php";
$query = "SELECT * FROM dominios";
$data = mysqli_query($con, $query) or die (mysqli_error($con));	
$dominios_permitidos = array();
while ($row = mysqli_fetch_array($data)) {
	array_push($dominios_permitidos, $row['NOMBRE']);
}



$email = mysqli_real_escape_string($con, $_POST['email']);
$email = trim($email);
$ip = getIP();	
$ua = $_SERVER['HTTP_USER_AGENT'];
$dominio = explode("@", $email);
$dominio = $dominio[1];


for ( $i = 0; $i < sizeof($dominios_permitidos); $i++) {
	$d = strtoupper($dominios_permitidos[$i]);
	if ( $d == strtoupper($dominio) ) {		
		usuario_aceptado("Por dominio");
		exit();		
	}	
}



/* Si no está en el array de permitidos..... */
$query = "SELECT * FROM logins WHERE IP ='$ip' AND ESTADO = 'ERROR' AND HORA > NOW() - INTERVAL 1 MINUTE";
$data = mysqli_query($con, $query) or die (mysqli_error($con));
$intentos = mysqli_num_rows($data);
if ( $intentos > 2 ) {
	echo "Por favor espera un minuto antes de volver a intentar.";
	exit();
}

$query = "SELECT * FROM users WHERE upper(EMAIL) = upper('$email')  ";
$row = mysqli_query($con, $query) or die (mysqli_error($con));
$row = mysqli_fetch_array($row);
if ($row == NULL ) { 	
	$resultado = "Invalid user. Please retry<br><br>";
	login_invalido();
} else {
	//echo "Validado por dominio";
	usuario_aceptado("Por base de datos");
}







function login_invalido(){
	global $con, $resultado, $email, $ip,	$ua;
	$query = "INSERT INTO logins 
	(EMAIL, IP, UA, ESTADO, PAGINA) 
	VALUES 
	('$email',  '$ip', '$ua', 'ERROR', 'FRONT') ";
	mysqli_query($con, $query) or die (mysqli_error($con));
	echo $resultado;
	exit();
}


function usuario_aceptado($tipo){
	global $con, $email, $ua, $ip;
	$rb = random_bytes(32);
	$rb = bin2hex($rb);	
	$token = $rb;		
	$query =  "INSERT INTO tokens 
	(EMAIL, TOKEN, UA, IP)
	VALUES 
	( '$email', '$token', '$ua', '$ip')";	
	mysqli_query($con, $query) or die (mysqli_error($con));			
	$tkn = $token;		
	include "admin/login/sendmail/index.php";	
	echo "OK";
	exit();
}
	
	
















?>