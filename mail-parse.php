<?
error_reporting(0);
$servername = "localhost"; //localhost
$username = "sinergiatest_login"; //chorchmarktdyn
$password = "Sour233sue514"; //z,cRo#Vd2WI1
$dbname = "sinergiatest_login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);	

$email = $mail=htmlentities(addslashes($_POST["mail"]));
/* armo un array con la lista de dominios permitidos*/

$sql = "SELECT * FROM dominios";
$result = mysqli_query($conn,$sql);
$dominios_permitidos = array();
while($row = mysqli_fetch_array($result)):
$dominios_permitidos[]=$row['DOMINIO'];
endwhile;
//print_r($dominios_permitidos);
//exit();


/* en la var $dominio se va a tomar en cuenta lo que esté a la derecha de lo que venga en la var $email */
$dominio = array_pop(explode("@", $email));

/* si no está en el array de permitidos */
if(!in_array($dominio, $dominios_permitidos)) {
	header("location:index.php?lo=0");
/* si lo está*/
} else {
	
	session_start();

	$_SESSION["usuario"]=$_POST["mail"];

	header("location:home.php");
}
?>