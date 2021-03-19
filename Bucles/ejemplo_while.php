<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
	$var1=1;
	//Bucles normales
	while($var1<6){
		echo "Estamos ejecutando el codigo del bucle <br>";
		$var1++;
	}
	//Bucle do while, primero hace el do y luego ve que la condicion no se cumple y no realizare mas el codigo, sirve para ejecutar al menos una vez el bucle
	do{
		echo "Estamos ejecutando el codigo del bucle <br>";
		$var1++;
	}while($var1<6);
	
	echo "Hemos salido del bucle";
	
	?>
</body>
</html>