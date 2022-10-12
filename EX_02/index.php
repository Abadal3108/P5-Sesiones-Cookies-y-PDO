<?php
$nombre = isset($_COOKIE['nombre']) ? $_COOKIE['nombre'] : "sinNombre";
$nombre_lenguajes = isset($_COOKIE['lenguajes']) ? $_COOKIE['lenguajes'] : "";
echo $nombre_lenguajes;
?>
<html>

<body>

<form action="cookies.php" method="POST" name="formulario">
    <input type="text" value="<?php echo $nombre; ?>" name="nombre">
    <select name="lenguajes" id="lang">
        <option name="opcion" value="<?php echo ($nombre_lenguajes == "") ? 'JavaScript' : $nombre_lenguajes; ?>">JavaScript</option>
        <option name="opcion" value="<?php echo ($nombre_lenguajes == "") ? 'PHP' : $nombre_lenguajes; ?>">PHP</option>
        <option name="opcion" value="<?php echo ($nombre_lenguajes == "") ? 'Java' : $nombre_lenguajes; ?>">Java</option>
        <option name="opcion" value="<?php echo ($nombre_lenguajes == "") ? 'Golang' : $nombre_lenguajes; ?>">Golang</option>
        <option name="opcion" value="<?php echo ($nombre_lenguajes == "") ? 'Python' : $nombre_lenguajes; ?>">Python</option>
    </select>
    <input type="submit" value="Enviar">
</form>
</body>
</html>