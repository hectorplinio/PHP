<html>

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="estilo.css" id="theme" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet" />
    <style>
    
    </style>
</head>

<body>
<h2>Formulario de incio</h2>
    <div class="caja1">
        <form action="chat.php" method="POST" name="formulario">
        <div class="caja2">
            <fieldset text-align="center">
            
                <legend align="center" class="nombre">¿Quien eres?</legend>
                <p>Usuario:<br><input size="30" required type="text" name="usuario" placeholder="Usuario"> </p>
                <p>Contraseña:<br> <input size="30" required type="password" name="password" placeholder="Contraseña"> </p>
                <input type="submit" value="Acceder a cuenta" id="boton-acceder">

            </fieldset>
        </div>
        </form>
    </div>
    
    
    <?php
    if($_POST){
    include "datos.php";
    $x = 0;
    $sql="SELECT * FROM `users`";
    if ($resultado = $mysqli->query($sql)){
        while ($fila = $resultado->fetch_assoc()){
            if ($fila["username"] == $_POST["usuario"] && $fila["password"] == $_POST["password"]){
                $x = 1;
                //Esto sirve para mandarlo a otro php
                echo "<script>formulario.action='chat.php'</script>";
                $usuario2=$_POST["usuario"];
                $sql2="UPDATE users SET conectado = 1 WHERE username = '$usuario2'"; 
                $mysqli->query($sql2);
                header('Location: chat.php');
                break;
            } else {
                $x = 0;
            }

        }
        if ($x == 0) {
            echo 'Datos incorrectos';
        }
    }
}
    ?>
</body>

</html>