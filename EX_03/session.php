<?php
session_start();
if (isset($_POST['nombre'])){
    $name = $_POST['nombre'];
    $_SESSION['nombre'] = $name;
    $_SESSION['puntos']=0;

}

if ($_SESSION) {
    $_SESSION['puntos'] += 10;
    echo $_SESSION["puntos"];
}
?>
<html>
<body>
<form action="session.php">
    <input type="submit" value="f5" />
</form>
</body>
</html>
