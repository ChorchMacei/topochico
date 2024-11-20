<?
session_start();
if ( isset($_SESSION['email'])) {
	/* Sesión iniciada */
	//echo "<h2>SESION YA INICIADA<h2>";
	//session_destroy();

	
} else if ( isset($_GET['t'])) {
	/* Se está enviando el token, intenta loguearse */
	include "admin/php/config.php";
	$mail = $_GET['e'];	
	$token = $_GET['t'];
	$query = "SELECT * FROM tokens WHERE upper(EMAIL) = upper('$mail') AND TOKEN = '$token'";
	$data = mysqli_query($con, $query) or die (mysqli_error($con));		
	$row = mysqli_fetch_array($data);
	
	if ( mysqli_num_rows($data) == 0 ) { /* Acceso inválido e-mail o token */					
		header("location:index.php");
		exit();
	} else {		/* TOKEN ENCONTRADO*/
			
		$timestamp_creacion_token = strtotime($row['TIMESTAMP']); /* Time creacion token */		
		$actual_time = time();		
		if ( time() - $timestamp_creacion_token < 3600 ) {			
			/* Token aceptado dentro de la duración dada */			
			//echo "<h2>TOKEN VALIDADO, INICIANDO SESION<h2>";
			$ip = getIP();
			$ua = $_SERVER['HTTP_USER_AGENT'];				
			$query = "INSERT INTO logins
			(EMAIL, IP, UA, ESTADO, PAGINA ) 
			VALUES 
			( '$row[EMAIL]', '$ip', '$ua', 'OK', 'FRONT' )";
			mysqli_query($con, $query) or die (mysqli_error($con));			
			$_SESSION['email'] = $row['EMAIL'];						
		} else { 
			/* Token expirado */			
			header("location:index.php");
			exit();	
		}	
	}	
} else {
	header("location:index.php");
	exit();		
}
?>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8WELB08V5F"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8WELB08V5F');
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-B8S9R7P6QD"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-B8S9R7P6QD');
</script>






<head>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
<meta charset="UTF-8">
  <meta name="keywords" content=""/>
  <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- FAV ICO -->
	<link rel="apple-touch-icon" sizes="57x57" href="ico/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="ico/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="ico/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="ico/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="ico/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="ico/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="ico/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="ico/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="ico/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="ico/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="ico/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="ico/favicon-16x16.png">
	<link rel="manifest" href="ico/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="ico/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<!-- FIN FAV ICO -->
    <title><?php echo $titulomostrar; ?> | TOPO CHICO UNIVERSITY</title>
	<!-- CSS -->
    <link rel="stylesheet" href="assets/css/css.css?99977732198779999858585435867">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- FONT Adobe -->
	<!-- CDFONTS -->
	<link href="https://fonts.cdnfonts.com/css/faustina" rel="stylesheet">
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sora:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
	<!-- Material Icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- font awsome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />	

    <!-- Generic -->
    <meta name="robots" content="NOINDEX, NOFOLLOW"/>
<title>HOLA</title>
	<!-- Menu responsive -->
	<script>
	function myCelu(x) {
		x.classList.toggle("change");

		var b = document.getElementById("menucelu");
		if (b.className === "menu") {
		b.className += " responsive";
		} else {
		b.className = "menu";
		}
	}
	</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8WELB08V5F"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8WELB08V5F');
</script>	
</head>