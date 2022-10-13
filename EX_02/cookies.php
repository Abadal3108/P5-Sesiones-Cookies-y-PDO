<?php
$name = $_POST['nombre'];
setcookie("nombre",$name,time() + 3600,'/');
$valueLenguajes = $_POST['lenguajes'];
setcookie("lenguajes",$valueLenguajes,time() + 3600,'/');
