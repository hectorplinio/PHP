<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
	//Asi se hacen los arrays de arrays
	$alimentos=array("Fruta"=>array("Tropical"=>"Kiwi",
									"Citrico"=>"Mandarina",
									"Otros"=>"Manzana"),
					 
					 "Leche"=>array("Animal"=>"Vaca",
									"Vegetal"=>"Coco"),
					 
					 "Carne"=>array("Vacuno"=>"Lomo",
								   "Porcino"=>"Pata"));
	//Asi se imprimen los valores de los arrays
	//echo $alimentos["Carne"]["Vacuno"];
	//$clave_alim corresponte a Fruta,Leche y Carne; $alim corresponde al otro array
	
	foreach($alimentos as $clave_alim=>$alim){
		echo "<li>$clave_alim:<br>";
		
		//Estamos desdoblando para que por cada $alim imprima $clave y $valor
		foreach ($alim as $clave=> $valor) {
      			echo "$clave: $valor <br>"; 
           }
	
		echo "<br>";
	}
	//Esto lo hace parecido pero no esta bien de manera visual
	//echo var_dump($alimentos). "<br>";
	
	?>
</body>
</html>