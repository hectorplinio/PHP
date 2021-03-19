<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
	<style>
		.resaltar{
			color:#F00;
			font-weight: bold;
		}
	</style>
</head>

<body>
	
	<?php
		//Si quieres poner comillas dentro de comillas, las de dentro tienen que ser simples o al reves. O poner \"y aqui dentro lo que quieres poner\"
		echo "<p class='resaltar'>Esto es un ejemplo de frase</p>";
		$nombre="Hector<br>";
		echo "Hola $nombre";
	$variable1="Casa";
	$variable2="CASA";
	//Devuelve 1 si no son iguales y 0 si son iguales. strcmp compara los valores distinguiendo entre mayusculas y minusculas y strcasecmp no distingue entre mayusculas y minusculas
	$resultado=strcmp($variable1,$variable2);
	echo "El resultado es " . $resultado . "<br>";
	if ($resultado){
		echo "No coinciden". "<br>";
	}else{
		echo "Si coinciden". "<br>";
	}
	$resultado=strcasecmp($variable1,$variable2);
	echo "El resultado es " . $resultado. "<br>";
	//Un if puesto asi quiere decir si $resultado es verdadero, no hace falta poner condicion
	if ($resultado){
		echo "No coinciden". "<br>";
	}else{
		echo "Si coinciden". "<br>";
	}
	?>
	
</body>
</html>