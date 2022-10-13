<?php
$nombre = isset($_COOKIE['nombre']) ? $_COOKIE['nombre'] : "sinNombre";
$nombre_lenguajes = isset($_COOKIE['lenguajes']) ? $_COOKIE['lenguajes'] : "";

?>
<html>

<body>

<form action="cookies.php" method="POST" name="formulario">
    <input type="text" value="<?php echo $nombre; ?>" name="nombre">
    <input type="text" value="<?php echo $nombre_lenguajes; ?>" name="lenguajes">
    <input type="submit" value="Enviar">
</form>
</body>
</html>