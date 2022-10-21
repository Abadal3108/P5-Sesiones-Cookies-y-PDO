<?php
//registro
$conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');
$Usuario = $_POST['Usuario'];
$mail = $_POST['mail'];
$contrasena = $_POST['contrasena'];
$date = $_POST['date'];
$add = $conexion->query("insert into aabadalg_V1_Personas(Usuario,correo,contrasena,nacimiento,Admin,Imagen)
values ('$Usuario','$mail','$contrasena','$date',0,'no')");
?>