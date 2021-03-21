<?php
    class Coche{
		//Si ponemos private solo podemos usar en estas clase las variables, con protected si que podemos acceder desde otras clases
        protected $ruedas;
        var $color;
        protected $motor;
		//Este es el metodo constructor, el this es como el self en python
        function __construct (){
            $this->ruedas=4;
            $this->color="";
            $this->motor=1600;
        }//Al poner private tenemos que crear una funcion para acceder a ese valor ya sea para modificarlo o para usarlo solamente
		function get_ruedas(){
			return $this->ruedas;
		}
		function get_motor(){
			return $this->motor;
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
    class Camion extends Coche{//si se hace la herencia
       
		//Este es el metodo constructor, el this es como el self en python
        function __construct (){
            $this->ruedas=8;
            $this->color="gris";
            $this->motor=2600;
        }//Si no quieres que el metodo sea igual, se puede sobreescribir copiandolo y cambiando lo que quieras
		//Habria que poner set_color 
		function establece_color($color_camion,$nombre_camion){
			$this->color=$color_camion;
			echo "El color del " . $nombre_camion . " es: " . $this->color . "<br>";
		}
		//Esto sirve por si queremos usar un metodo de la superclase y añadirle mas funciones que solo posean esta clase
		function arrancar(){
            parent::arrancar();
			echo "Camion arrancado <br>";
        }
		
    }
?>