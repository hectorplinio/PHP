<style>
		h1{
			text-align: center;
		}
		table{
			background-color: #FFC;
			padding: 5px;
			border: #666 5px solid;
		}
		.no_valido{
			font-size: 18px;
			color:#F00;
			font-weight: bold;
		}
		.valido{
			font-size: 18px;
			color:#0C3;
			font-weight: bold;
		}
	</style>
<?php
	if(isset($_POST["enviando"])){
		$usuario=$_POST["nombre_usuario"];
		$edad=$_POST["edad_usuario"];
		
		if ($usuario=="Hector" && $edad>=18){
			echo"<p class='valido'>Puedes entrar</p>";
		}else{
			echo"<p class='no_valido'>No puedes entrar</p>";
			}
		}
	
?>