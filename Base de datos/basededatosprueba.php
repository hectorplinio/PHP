<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Atacando a SQL</title>
</head>
<body>
	
	<?php 
		$database = "hector_plinio";
		$user = "root";
		$password = "";
	
		//Conectar a la BBDD
		if(!($mysqli = new mysqli($server, $user, $password, $database)))
		   {
			die("Error: No se pudo conectar");   
		   }
			
		//Comprobar la conexión
		if(mysqli_connect_errno())
		{
			printf("Falló la conexión %s\n". mysqli_connect_error());
			exit();
		}
		
		echo "Se ha realizado la conexión<br>";
		

		$mysqli->set_charset("utf8");
	
		//Aquí a intentar hacer cosas con la base de datos
		$sql = "select * from artista";
		$vista = $mysqli -> query($sql);
		while($registro=$vista->fetch_object())
		{
			echo ($registro->dni . " ");
			echo ($registro->nombre . "<br><br>");
		}
		
		$vista->close();
		$mysqli->close();
	
	
	?>
	
</body>
</html>