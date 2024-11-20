<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

	<?php error_reporting (E_ALL ^ E_NOTICE); ?>
	
	<?php
	
	try{
		
		$base=new PDO("mysql:host=localhost; dbname=topo" , "root", "279555R00ter");
		
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sql="SELECT * FROM mailsblancos WHERE MAIL= :mail";
		
		$resultado=$base->prepare($sql);
		
		$mail=htmlentities(addslashes($_POST["mail"]));
		
		$resultado->bindValue(":mail", $mail);
		
		$resultado->execute();
		
		$numero_registro=$resultado->rowCount();
		
		if($numero_registro!=0){
			
			//echo "<h2>Adelante</h2>";
			
			session_start();
			
			$_SESSION["usuario"]=$_POST["mail"];
			
			header("location:home.php");
			
		}else{
			
			header("location:index.php?l=0");
			
		}
		
		
	}catch(exception $e){
		die("Error: ". $e->getMessage());
	}
	
	?>
	
</body>
</html>