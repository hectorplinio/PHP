<html>

<head>
<title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="estilo.css" id="theme" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet" />
    <style>
    
    </style>
</head>

<body>
<h2>Formulario de registro</h2>
<div class="caja1">
        <form action="registro.php" method="POST">
        <div class="caja2">
            <fieldset text-align="center">
                <p>Usuario:<br><input size="30" required type="text" name="usuario" placeholder="Usuario"> </p>
                <p>Contraseña:<br> <input size="30" required type="password" name="pass" placeholder="Contraseña"> </p>
                <p>Contraseña de nuevo:<br> <input size="30" required type="password" name="pass2" placeholder="Contraseña"> </p>
                <input type="submit" value="Crear cuenta" id="boton-crear">
            </fieldset>

        </form>
        </div>
    </div>
    
        <?php
        if($_POST){
        include "datos.php";
        //Aqui declaro los valores
        $usuario=$_POST['usuario'];
        $pass=$_POST['pass'];
        $x=0;
        $sql2="SELECT `username` FROM `users`";
        if ($resultado = $mysqli->query($sql2)){
            while ($fila = $resultado->fetch_assoc()){
                if (($fila["username"] == $_POST["usuario"])){
                    $x=1;
                    break;
                }
            }
            if (($x==0) &&  ($_POST["pass"]==$_POST["pass2"])){
                //Esta es la sentencia sql
                $sql = "INSERT INTO users (username, password) VALUES ('$usuario', '$pass')";
                //Esto sirve para que te haga la sentencia
                $mysqli->query($sql);
                echo "Sus datos se han registrado correctamente<br>";
                header("Location: inicio.php");
            }else{
                echo "Datos erroneos";
            }
        }
        }
    ?>
    
</body>

</html>