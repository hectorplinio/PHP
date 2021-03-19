<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
	<?php
	
	echo "Este es el primer mensaje <br>";
	//Asi se crean las funciones en PHP y se pueden crear los bloques de PHP que queramos.
	//Se puede poner la funcion en otro archivo php y llamarla de esta forma
	include ("proporcionado_datos.php");
	/*function dameDatos(){
		echo "Este es el mensaje de dentro de la funcion <br>";
	}*/
	
	
	
	echo "Este es el segundo programa <br>";
	dameDatos();
	
	?>
	
</body>
</html>