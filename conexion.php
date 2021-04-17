<?php
//$direccion="localhost:3306";
//$usuario="usuroot";
//$base_datos = "agzutecn_alq_dados";
$usuario="usuroot";
$direccion="localhost";
$base_datos = "alq_dados";
$contrasenia="Infbea57$";
$conexion = mysqli_connect($direccion, $usuario, $contrasenia,$base_datos);
header("Content-Type: text/html;charset=uft-8");
$acentos = $conexion->query("SET NAMES 'utf8'");
?>