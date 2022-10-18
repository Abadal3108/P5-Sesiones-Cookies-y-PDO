<?php
$conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');
$resultados = $conexion->query("DROP TABLE aabadalc_Personas ");
echo $resultados->errorInfo();
?>