<?php
    $server = "localhost";
    $database = "app_chat";
    $user = "root";
    $password = "";
	$conexion=mysqli_connect($server,$user,$password,$database);
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
    
    //echo "Se ha realizado la conexión<br>";
?>