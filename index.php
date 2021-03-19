<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Directorio</title>
    <style>
        p{
            font-weight:18px;
            color: green;

        }
        *{
            background-color:orange;
        }
        h1{
            font-weight:28px;
            color: grey;
        }
    </style>
</head>
<body>
<h1>Carpetas de alumnos</h1>
<?php
function listarArchivos( $path ){
    // Abrimos la carpeta que nos pasan como parámetro
    $dir = opendir($path);
    $excluir = array('.', '..', 'index.php.save', 'directorio.php','applications.html','favicon.ico','base de datos.php','index_old.php','datos.php','acciones.php','img','visual.exe','webalizer','dashboard');
    // Leo todos los ficheros de la carpeta
    while ($elemento = readdir($dir)){
        // Tratamos los elementos . y .. que tienen todas las carpetas
        if( $elemento != "." && $elemento != ".."){
            // Si es una carpeta y que archivos queremos excluir
            if( is_dir("$path/$elemento") && !in_array($elemento, $excluir)){
                // Muestro la carpeta
                echo "<p><strong>CARPETA: <a href='http://10.2.1.254:69/$elemento'>". $elemento ."</a></strong></p>";
            // Si es un fichero
            } 
        }
    }
}
// Llamamos a la función para que nos muestre el contenido de la carpeta y cogemos la direccion donde esta el archivo
//$direccion=getcwd("../");
listarArchivos("../");
?>
</body>
</html>


