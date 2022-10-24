<?php
$conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');
/* creacion de tabla
 * $resultados = $conexion->query("CREATE TABLE aabadalg_V1_Personas (
    Usuario varchar(255),
    correo varchar(255) PRIMARY KEY ,
    contrasena varchar(255),
    nacimiento date,
    Admin BIT,
    Imagen TEXT
)");
añadir valores
$add = $conexion->query("insert into aabadalg_V1_Personas(Usuario,correo,contrasena,nacimiento,Admin,Imagen)
values ('Alex','aabadal@gmail.com','alex13579',2003-08-08,1,'no')");
 */


$resulta = $conexion->query("SELECT * FROM aabadalg_V1_Personas3 ");
foreach($resulta as $fila){
    echo $fila['Usuario'] . " - " .$fila['correo'] . '</br>';
    echo $fila['contrasena'] . " - " .$fila['correo'] . '</br>';
    echo $fila['nacimiento'] . " - " .$fila['correo'] . '</br>';
    echo $fila['Admin'] . " - " .$fila['correo'] . '</br>';
    echo $fila['Imagen'] . " - " .$fila['correo'] . '</br>';
}
?>


