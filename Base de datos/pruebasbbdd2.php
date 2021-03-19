<style>
    table{padding-left: 200px; padding-top: 100px}
    th{color: red}
</style>

<?php
		include "bbdd.php";
        $sql = "SELECT nombre from disco";
        $visor = $connect->query($sql);
        echo "<table><th colspan='2'>DISCOS Y CANCIONES</th>"; 

        while ($resultado = $visor->fetch_object())
        {   
            echo "<tr><td> $resultado->nombre </td><td><select>";
            $sql2 = "select cancion.titulo from cancion inner JOIN esta on cancion.cod = esta.can INNER JOIN disco on disco.cod = esta.cod where disco.nombre = \"$resultado->nombre\"";
            $visor2 = $connect->query($sql2);
            
            while ($resultado2 = $visor2->fetch_object())
            {
                echo "<option>$resultado2->titulo</option>";
            }
            echo "</select></td></tr>";
        }
        echo "</table>";
        $visor->close();
        $visor2->close();
        $connect->close(); 
?>