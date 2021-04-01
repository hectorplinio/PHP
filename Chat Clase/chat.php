<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="estilo2.css" id="theme" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet" />
    <style>
    </style>
	<script language="JavaScript">
	function mueveReloj(){
	momentoActual = new Date()
	hora = momentoActual.getHours()
	minuto = momentoActual.getMinutes()
	segundo = momentoActual.getSeconds()


	horaImprimible = hora + " : " + minuto + " : " + segundo

	document.form_reloj.reloj.value = horaImprimible

	setTimeout("mueveReloj()",1000,1)
	}
		
</script>
	<script language="javascript" type="text/javascript">
function Comentario(){  
	alert ("Comentario Vacio, prueba a escribir algo");
}
</script>
<?php
include("datos.php");
$sql="UPDATE users SET conectado='si'";
$vista=$mysqli->query($sql);
?>
</head>
<body onload="mueveReloj()">
    <div class="cajachat">
        <div class="cajatexto">
			<div class="usuarios">
			<form name="form_reloj">
				<p>La hora actual es: </p><input type="text" name="reloj" size="10">
				<?php
				$usuario=$_POST["usuario"];
				echo "<br>";
				echo "Tu usuario es: ";
				echo "<span style='color:green';>".$usuario."</span><br><br>";
				echo("Usuarios conectados <hr><br>");
				$sql="SELECT username as a FROM users WHERE conectado='si' and username != '$usuario'";
				$vista=$mysqli->query($sql);
				while ($registro = $vista->fetch_assoc()){
					echo ($registro["a"]."<br><br>");
				}
				?>
			</form>
			</div>
			<div class="comentarios" >
			<table>
            <?php
			//error_reporting(0);
			session_start();
			
            $sql="SELECT users.username as a, messages.message as b, messages.created_on as c   FROM messages INNER JOIN users ON messages.username = users.username ORDER BY messages.created_on DESC";
			$vista=$mysqli->query($sql);
				while ($registro = $vista->fetch_assoc()){
					
					echo "<tr>";
					
					echo("<td>".$registro["a"]." >>> ".$registro["c"]."</td>");
					echo "</tr><tr>";
					echo ("<td style='border:2px solid black';>".$registro["b"]."</td>");
					echo "</tr>";
				}
			
			?>
			</table>
			</div>
        </div>
        <div class="chatbox">
                <form action="chat.php" method="POST">
                    <textarea name="chatbox" value="chatbox" id="chatbox" cols="55" rows="7" maxlength="10000"></textarea></br>
                    <input type="submit" value="Enviar" id="Enviar" class="boton" readonly >
                    <input type="hidden" name="usuario" value="<?= $_POST["usuario"]; ?>">
                </form>
        <form action="" method="post" name="formcerrarsesion">
            <input type="submit" name="cerrar" class="boton" value="Cerrar sesión">
        </form>
            </div>
    </div>
    <?php
    if ($_POST){
    include "datos.php";
    $usuario=$_POST["usuario"];
    $comentario=$_POST["chatbox"];
	$date=date("H:i:s");
	if (($comentario != "")&&($comentario != $_SESSION["comentarioAnterior"])){
    $sql = "INSERT INTO messages (username, message, created_on) VALUES('$usuario', '$comentario', '$date')";
	//$sql = "INSERT INTO messages (username,message,created_on) VALUES('$usuario','$mensaje','$hora')";
    //Esto sirve para que te haga la sentencia
    $mysqli->query($sql);
	$_SESSION["comentarioAnterior"]=$comentario;
	echo("<script>location.reload()</script>");
	}
	 if(isset($_POST['cerrar']))
    {
        session_destroy();
        header("Location:index.html"); 
    }
	}
    ?>
</body>
</html>