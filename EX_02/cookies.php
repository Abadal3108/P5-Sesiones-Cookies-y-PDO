<?php
$name = $_POST['nombre'];
setcookie("nombre",$name,time() + 3600,'/');
$valueLenguajes = "";
if(isset($_POST['lenguajes'])) {
    $seleccion = $_POST['lenguajes'];
    switch($seleccion) {
        case 'Javascript':
            $valueLenguajes = 'JavaScript';
            break;
        case 'PHP':
            $valueLenguajes = 'PHP';
            break;
        case 'Java':
            $valueLenguajes = 'Java';
            break;
        case 'Golang':
            $valueLenguajes = 'Golang';
            break;
        case 'Python':
            $valueLenguajes = 'Python';
            break;
        default:
            $valueLenguajes = 'Golang';
    }
}

setcookie("lenguajes",$valueLenguajes,time() + 3600,'/');
