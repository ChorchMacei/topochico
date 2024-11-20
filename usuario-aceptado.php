<?
include "admin/php/config.php";
$mail = $_GET['mail'];
$query = "
SELECT * FROM tokens WHERE EMAIL = '$mail' 
ORDER BY ID DESC
LIMIT 1
";
$data = mysqli_query($con, $query) or die (mysqli_error($con));
$row = mysqli_fetch_array($data);
$token = $row['TOKEN'];
$time = $row['TIMESTAMP'];
$time = strtotime($time);
$limite = $time + 3600;
$limite = date("d-m-Y H:i", $limite);
?>



<p>Esta página debería ser maquetada por el diseñador. Otra opción sería mostrar un popup en la página del login con esta información
y deshabilitar los campos de login para que no vuelvan a loguearse.
</p>
<hr>
<h2>Se ha enviado un e-mail de acceso a tu correo <span style='color:blue'><?=$_GET['mail']?></span> el mismo es válido por 1 hora.</H2>



<p>Ejemplo del email</p>
<div>Asunto: Solicitud de ingreso </div>
<div>Cuerpo del mensaje:</div>
<p>Has solicitado ingreso a Topo Chico Academy, ingresa en el siguiente link: </p>
<?
$get = "?e=" . $_GET['mail'] . "&t=" . $token;
?>
<a href="home.php<?=$get?>">https://topochico/home.php<?=$get?></a>
<p>Se recuerda que este link tiene una validez de una hora, pasado ese tiempo deberás solicitar un nuevo ingreso</p>
<p>Este link es válido hasta <b><?=$limite?></b></p>


<?


?>







