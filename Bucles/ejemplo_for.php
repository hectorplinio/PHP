<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
	//for ($i=0;$i<=10;$i++){
	for ($i=10;$i>=-10;$i--){
		//Esto sirve para cuando hay algunas condiciones que fallan, importante el continue
		if  ($i==0){
			echo "Division por 0 no es posible <br>";
			continue;
		}
		/*echo "<p>Hemos entrado en el bucle</p>";
		
		if ($i==6){
			echo "<p>Bucle interrumpido</p>";
			break;
		}*/
		
		//Para hacer la tabla del 9 por ejemplo
		echo "9 / $i = " . 9/$i . "<br>";
	
	}
	echo "Hemos salido del bucle";
	
	?>
</body>
</html>