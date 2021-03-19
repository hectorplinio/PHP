<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
	<?php
	
	$nombre="Hector";
	
	function dameNombre(){;
		//Si ponemos global dentro de la funcion coge la variable que hemos llamado fuera y puedo trabajar con ella. Siempre tiene que ir dentro de la funcion para que funcione no puedes ponerle fuera el valor global.
		global $nombre;
						  
		$nombre="El nombre es " . $nombre;
						 }
	dameNombre();
	echo $nombre;
	
	?>
	
</body>
</html>