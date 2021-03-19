<html>
    <head>
        <meta charset="utf-8">
        <title>Repaso formularios</title>
        <style>

        </style>
    </head>
    <body>
    <?php
        $nombre=$_GET["nombre"];
        $password=$_GET["password"];
        $user="hector";
        $pass="hector";

        if ($nombre == $user && $password == $pass){
            $resultado=true;
        }
        else{
            $resultado=false;

        }
    ?>
    <script lang = 'javascript' > 
    var resultado = "<?php echo $resultado;?>";
    
        if (resultado == true){
            alert("Hola <?php echo $nombre;?> contraseña correcta");
        }
        else{
            alert("Hola <?php echo $nombre;?> contraseña o usuario incorrecta");
        }
    </script>
    </body>
</html>