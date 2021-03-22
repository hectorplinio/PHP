<?php
    $server = "localhost";
    $database = "hector_plinio";
    $user = "root";
    $password = "";

    //Conectar a la BBDD
    if(!($mysqli = new mysqli($server, $user, $password, $database)))
        {
        die("Error: No se pudo conectar");   
        }
        
    //Comprobar la conexión
    if(mysqli_connect_errno())
    {
        printf("Falló la conexión %s\n". mysqli_connect_error());
        exit();
    }
    
    echo "Se ha realizado la conexión<br>";
?>