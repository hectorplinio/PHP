<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
	//Asi se hacen las listas en php, esto se llaman arrays indexados
	//$semana[]="Lunes";
	//$semana[]="Martes";
	//$semana[]="Miercoles";
	//Se puede hacer de las dos formas
	//$semana=array("Lunes","Martes","Miercoles");
	//echo $semana[2];
	//Asi se hacen los arrays asociativos
	//Primero el nombre asociativo que quieres darle al array y luego la definicion
	$datos=array("Nombre"=>"Hector","Apellido"=>"Navarro","Edad"=>28);
	echo $datos["Apellido"] . "<br>";
	//Asi se agregan los elementos
	$datos["Pais"]="España";
	//Esta funcion sirve para saber si una palabara es un array o una variable
	/*
	if(is_array($datos)){
		echo "Es un array";
	}else{
		echo "No es un array";
	}*/
	//Se usa el foreach para usar un for dentro de listas asociativas
	foreach($datos as $clave=>$valor){
		echo "A $clave le corresponde $valor <br>";
	}
	?>
</body>
</html>