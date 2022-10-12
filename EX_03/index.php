<html>
<body>
<form action="cookies.php" method="POST" name="formulario">
    <input type="text" name="nombre">

    <input type="submit" value="Enviar">
    <?php
    if (isset($_COOKIE['nombre'])) {
        echo "hola qie lo q";
        $borrarname = "";
        setcookie('puntos', $_COOKIE['puntos'] = 0, time() + 3600
        );
        setcookie('nombre', $borrarname , time() + 3600
        );
    }
    ?>
</form>
</body>
</html>

