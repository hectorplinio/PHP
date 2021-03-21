<?php
    class Coche{
        var $ruedas;
        var $color;
        var $motor;
		//Este es el metodo constructor, el this es como el self en python
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
//-----------------------------------------
    class Camion{
        var $ruedas;
        var $color;
        var $motor;
		//Este es el metodo constructor, el this es como el self en python
        function __construct (){
            $this->ruedas=8;
            $this->color="gris";
            $this->motor=2600;
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
?>
