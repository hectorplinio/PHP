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
    echo("Hola, ".$_GET["nombre"])
?>
    <div id="caja1">
        <form action="" method="GET">
            <fieldset>
                <legend>¿Quien eres?</legend>
                <p>Nombre:<br><input required type="text" name="nombre" value=""> </p>
                <p>Password:<br> <input required type="password" name="contraseña" value=""> </p>
                <p>Correo electronico:<br> <input required type="mail" name="mail" value=""> </p>
                <p>Fecha de nacimiento:<br>
                    <input type="date" name="fecha">
                </p>
                <input type="submit" value="Crear cuenta" id="boton-crear">
            </fieldset>

        </form>
    </div>
</body>

</html>