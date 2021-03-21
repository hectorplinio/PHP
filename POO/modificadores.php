<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
	include ("herencia.php");
	
	$mazda=new Coche();
	$pegaso=new Camion();
	//Si ponemos esto puedes cambiar las ruedas, vamos a ponerle que no sea posible. Ahora daria error poque hemos puesto private a la variable
	//$mazda->ruedas=7;
	
	//Para poder acceder a las ruedas tenemos que crear un metodo nuevo (getter o setter)
	//setter=modificar
	//getter=ver las propiedades
	echo "El mazda tiene " . $mazda->get_ruedas() . " ruedas<br>";
	echo "El pegaso tiene " . $pegaso->get_ruedas() . " ruedas<br>";
	$pegaso->frenar();
	$pegaso->establece_color("Azul", "Pegaso");
	$pegaso->arrancar();
	echo "El mazda tiene un motor de " . $mazda->get_motor() . " cc.<br>";
	echo "El pegaso tiene un motor de " . $pegaso->get_motor() . " cc.<br>";
	
	?>
</body>
</html>