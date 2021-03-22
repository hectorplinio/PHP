<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <style>

    </style>
</head>

<body>
<h2>Formulario de registro</h2>
<?php
    echo("Hola, ".$POST["usuario"]);
    $usuario=$_POST["usuario"];
    $pass=$_POST["pass"];
    $pass2=$_POST["pass2"];
    include "datos.php";

    //Sentencia
    $sql = "select * from usuario";
    if ($pass == $pass2)
	
?>
</body>

</html>