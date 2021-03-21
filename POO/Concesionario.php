<?php

	class Compra_vehiculo{
		
		private $precio_base;
		//Creandolo asi no pertenece a cada objeto, si no a la clase. Viene bien para hacerle el descuento a todos los clientes y no crear las variables una por una. Para que no se pueda acceder desde fuera de la clase se pone private static
		 private static $ayuda=0;
		
				
		function __construct($gama){
			
			if($gama=="urbano"){
				
					$this->precio_base=10000;
				
			}else if($gama=="compacto"){
				
				
					$this->precio_base=20000;	
				
			}
			
			else if($gama=="berlina"){
				
					$this->precio_base=30000;	
				
			}		
			
			
		}// fin constructor
		 static function descuento_gobierno(){
			 //Asi se ponen las fechas en php
			 if (date("m-d-y") >"07-01-21"){
			 	self::$ayuda=4500;
			 }
		 }
		
		
		
		function climatizador(){		
			
			
				$this->precio_base+=2000;					
			
			
		}// fin climatizador
		
		
		function navegador_gps(){
			
			$this->precio_base+=2500;	
			
		}//fin navegador gps
		
		
		
		function tapiceria_cuero($color){
			
			if($color=="blanco"){
			
				$this->precio_base+=3000;
			}
			
			else if($color=="beige"){
				
				$this->precio_base+=3500;
				
			}
			
			else{
				
				$this->precio_base+=5000;
				
			}
			
		}// fin tapicería
		
		
		
		function precio_final(){
			//Al ser ayuda static no podemos usar el this para referirnos a la ayuda, se pone self:: y el nombre
			$valor_final=$this->precio_base-self::$ayuda;
		
			return $valor_final;	
			
		}// fin precio final
		
		
		
	}// fin clase


?>