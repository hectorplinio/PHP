<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <style>

    </style>
</head>

<body>
<h2>Formulario de incio</h2>
    
    <?php
    include "datos.php";
    $sql="SELECT * FROM `login`";
    if ($resultado = $mysqli->query($sql)){
        while ($fila = $resultado->fetch_assoc()){
            if ($fila["usuario"] == $_POST["usuario"] && $fila["pass"] == $_POST["pass"]){
                echo "Usuario correcto";
                break;
            }else{
                echo "Usuario o contraseña incorrecta";
            }

        }
    }
    ?>
</body>

</html>