<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
	  //array asociativo
       $asoc = array('primera'  => array('segunda' => array("tercera"=>"dimension") ) );
       foreach ($asoc as $primera => $segunda) {
        echo "$primera <br>";//Imprimiendo la palabra asociativa "primera"
        foreach ($segunda as $seg => $tercera) {
         echo "$seg <br>";//Imprimiendo la palabra asociativa "segunda"
         foreach ($tercera as $ter => $valor) {
          echo "$ter: $valor <br>";//Imprimiendo la palabra asociativa "tercera" e imprimiendo el valor de la palabra asociativa
         }
        }
       }
	?>
</body>
</html>