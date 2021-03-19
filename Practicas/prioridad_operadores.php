<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
	$var1=true;
	$var2=false;
	$resultado=$var1 and $var2; //Almacenar en resultado=false, si cambias el & por = es otro resultado ya que cambian las prioridades
	
	if ($resultado==true){
		echo "Correcto";
	}else{
		echo "Incorrecto";
	}
	
	
	?>
</body>
</html>