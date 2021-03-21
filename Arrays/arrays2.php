<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
	//Asi se hacen los for de los arrays indexados
	$semana[]="Lunes";
	$semana[]="Martes";
	$semana[]="Miercoles";
	$semana[]="Jueves";
	//Asi se ordena el array de manera alfabetica
	sort($semana);
	//Tambien se puede hacer asi
	//$semana=array("Lunes","Martes","Miercoles");
	for ($i=0;$i<count($semana);$i++){
		echo $semana[$i] . "<br>";
	}
	//Asi se agregan elementos a los arrays
	$semana[]="Viernes";
	
	?>
</body>
</html>