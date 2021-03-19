<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>

<?php

	if(isset($_POST["enviando"])){
		//Dentro de las comillas se pone el name que hemos puesto en la otra pagina
		$contra=$_POST["contra"];
		$nombre=$_POST["nombre_usuario"];
		
		/*if ($edad<18){
			echo "Eres menor de edad. No tienes acceso";
		}else if ($edad<=40){//Else if para meter varios if dentro de otros if, si no se pone el else, el programa entra en todas las condiciones
			echo "Eres joven";
		}else if ($edad<=65){//Sirve para decirle que van todos dentro del mismo bloque
			echo "Eres maduro";
		}else{
			echo "Cuidate";
		}
		*/
		//Esto es para el operador ternario, si se cumple imprime la primera expresion, si no la segunda. Tambien se puede poner que te guarde el resultado en una variable
		echo $nombre=="Hector" && $contra == "1234" ? " Puedes acceder" : "No puedes acceder";
	}
	
?>