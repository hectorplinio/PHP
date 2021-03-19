<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
	/*
	$palabra="HECTOR";
	//Esto son ejemplos de funciones predefinidas por el lenguaje
	echo(strtolower($palabra));

	//Asi se declaran funciones propias y como se llaman y como se devuelven los parametros
	function suma($num1, $num2){
		$resultado=$num1+$num2;
		
		return $resultado;
	}
	echo(suma(8,5));*/
	//Esto sirve para pasar un segundo parametro por defecto
	function frase_mayus($frase, $conversion=true){
		$frase=strtolower($frase);
		if($conversion==true){
			$resultado=ucwords($frase);
		}else{
			$resultado=strtoupper($frase);
		}
		return $resultado;
		
	}//Si no ponemos un segundo parametro toma por defecto el parametro true
	echo(frase_mayus("esto es una prueba",false));
	?>
</body>
</html>