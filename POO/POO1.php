<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
    class Coche{
        var $ruedas;
        var $color;
        var $motor;

        function __construct (){
            $this->ruedas=4;
            $this->color="";
            $this->motor=1600;
        }

        function arrancar(){
            echo "Estoy arrancando <br>";         
        }
        function girar(){
            echo "Estoy girando <br>";
        }
        function frenar(){
            echo "Estoy frenando <br>";
        }
		function establece_color($color_coche,$nombre_coche){
			$this->color=$color_coche;
			echo "El color del " . $nombre_coche . " es: " . $this->color . "<br>";
		}
    }
    $renault = new Coche ();
    $mazda = new Coche ();
    $seat = new Coche ();

    $mazda->girar();
    echo $mazda->ruedas . "<br>";
	$renault->establece_color("Rojo","Renaul");
	$seat->establece_color("Azul","Seat");
?>


</body>
</html>