<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <style>

    </style>
</head>

<body>

    <?php
        include "datos.php";
        //Aqui declaro los valores
        $usuario=$_POST['usuario'];
        $pass=$_POST['pass'];
        if ($_POST["pass"]==$_POST["pass2"]){
            //Esta es la sentencia sql
            $sql = "INSERT INTO `login` (usuario, pass) VALUES ('$usuario', '$pass')";
            //Esto sirve para que te haga la sentencia
            $mysqli->query($sql);
            echo "Sus datos se han registrado correctamente";
        }else {
            echo "Las contraseñas no coinciden";
        }
        
        
    ?>
</body>

</html>