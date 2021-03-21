<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php

	include("Concesionario.php");
	
	//Si es static podemos modificarlo para que en este caso la ayuda sea mayor
	//Compra_vehiculo::$ayuda=10000;
	$compra_Antonio=new Compra_vehiculo("compacto");
	//Al llamar a la funcion climatizador te sube el precio
	$compra_Antonio->climatizador();
	$compra_Antonio->tapiceria_cuero("blanco");
	//Asi se llama un metodo static
	Compra_vehiculo::descuento_gobierno();
	echo "El precio del coche de Antonio es " .  $compra_Antonio->precio_final() . "<br>";
	
	$compra_Ana=new Compra_vehiculo("compacto");
	$compra_Ana->climatizador();
	$compra_Ana->tapiceria_cuero("rojo");
	echo "El precio del coche de Ana es " .  $compra_Ana->precio_final() . "<br>";
	


?>
</body>
</html>