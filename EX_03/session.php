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