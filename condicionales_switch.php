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
		$contra=$_POST["contra_usuario"];
		$nombre=$_POST["nombre_usuario"];
		//Para comparar, si solo queremos comprobar el nombre poner ($nombre) donde pone true, se pone true para comparar mas de una condicion
		//Si queremos hacer un switch de edad por ejemplo seria case $edad<=18: importante el break
		switch (true){
			case $nombre=="Hector" && $contra=="1234":
				echo "Usuario autorizado. Hola $nombre";
				break;
			case $nombre=="Maria" && $contra=="5678":
				echo "Usuario autorizado. Hola $nombre";
				break;
			case $nombre=="Pedro" && $contra=="5555":
				echo "Usuario autorizado. Hola $nombre";
				break;
			default:
				echo "Usuario no autorizado";
		}
		/*if ($edad<18){
			echo "Eres menor de edad. No tienes acceso";
		}else if ($edad<=40){//Else if para meter varios if dentro de otros if, si no se pone el else, el programa entra en todas las condiciones
			echo "Eres joven";
		}else if ($edad<=65){//Sirve para decirle que van todos dentro del mismo bloque
			echo "Eres maduro";
		}else{
			echo "Cuidate";
		}*/
		
		
	}
	
?>