<?php
$name = $_POST['nombre'];
setcookie("nombre", $name, time() + 3600);

if (isset($_COOKIE['nombre'])) {
    setcookie('puntos', $_COOKIE['puntos'] + 10, time() + 3600
    );
    $mensaje = 'Numero de puntos: ' . $_COOKIE['puntos'];
    echo $mensaje;
} else {
    echo "incia sesion";
}

?>