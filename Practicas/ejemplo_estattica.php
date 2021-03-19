<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
	<?php
	
		function incrementaVariable(){
			//Si ponemos static delante de la variable hace que el valor de la variable al acabar la funcion se guarde, si no lo ponemos el valor de borra.
			static $contador=0;
			$contador++;
			echo $contador . "<br>";
		}
	incrementaVariable();
	incrementaVariable();
	
	?>
	
</body>
</html>