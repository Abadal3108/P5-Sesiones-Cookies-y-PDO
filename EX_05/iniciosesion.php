<form action="iniciosesion.php" method="POST" name="formulario">
    <input type="text" name="mail">
    <input type="password" name="contrasena">
    <input type="submit" value="Enviar">
</form>
<?php

if (!isset($_POST['mail'])){

}else{


$mail = $_POST['mail'];
if ($mail == null) {

} else {
    $contrasena = $_POST['contrasena'];
    $conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');
    $result = $conexion->query("SELECT correo, contrasena FROM aabadalg_V1_Personas WHERE correo='$mail'")->fetch();
}
if (isset($mail)) {
    if ($mail == null) {
        echo "incorrecto";
    } else {
        if ($mail == $result['correo'] && $contrasena == $result['contrasena']) {
            header("Location: confirmar.php");

        } else {
            echo "incorrecto";
        }
    }
}
}

?>

