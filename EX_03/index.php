<html>
<body>
<form action="session.php" method="POST" name="formulario">
    <input type="text" name="nombre">

    <input type="submit" value="Enviar">
    <?php
        session_start();
        session_destroy();
    ?>
</form>

</body>
</html>

