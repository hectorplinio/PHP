<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Atacando a SQL</title>
<style>
table,td,tr{
    border: 1px solid black;
}
tr{
    width:40px;
}
option{
    text-align:center;
}
</style>
</head>
<body>
<table >
		<tr>
			<td><b>Título</b></td>
			<td><b>Fecha</b></td>
			<td><b>Canción</b></td>

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
        $sql = "SELECT disco.nombre as A, disco.fecha as B from disco ORDER BY disco.nombre ASC";
		$vista = $mysqli -> query($sql);
		while($registro=$vista->fetch_object())
		{
			echo ("<tr><td>".$registro->A."</td><td>".$registro->B."</td><td><select><option selected>Canciones</option>");
			
			$sql2 = "SELECT cancion.titulo as X from cancion INNER JOIN esta ON esta.can = cancion.cod INNER JOIN disco ON esta.cod = disco.cod WHERE disco.nombre =\"".$registro->A."\"";
			//$sql = "SELECT cancion.titulo as X from cancion";
			$muestra = $mysqli -> query($sql2);
			while($registro=$muestra->fetch_object())
			{
				echo("<option>".$registro->X."</option>");
			}
				
			echo("</select></td></tr>");
			$muestra->close();
		}
		
		$vista->close();
		$mysqli->close();
	
?>
		</tr>
</table>
	
</body>
</html>