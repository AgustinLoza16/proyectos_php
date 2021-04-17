<?php
include 'conexion.php';
date_default_timezone_set('America/Mexico_City');
$numero_jugadores= mysqli_real_escape_string($conexion,$_POST['numero_jugadores']);
$numero_tiros= mysqli_real_escape_string($conexion,$_POST['numero_tiros']);
$numero_de_dados= mysqli_real_escape_string($conexion,$_POST['numero_de_dados']);
$fecha_inicio=date("Y-m-d H:i:s");
$jsondata=array();

$resultado = mysqli_query($conexion, "INSERT INTO partida(numero_jugadores,numero_tiros,numero_de_dados,fecha_inicio,estado_1,estado_2,turno_jugador_1,turno_jugador_2)
  VALUES($numero_jugadores,$numero_tiros,$numero_de_dados,'$fecha_inicio','PENDIENTE','PENDIENTE',$numero_tiros,$numero_tiros)");

if($resultado != true){
    $jsondata["resultado"]=mysqli_errno($conexion);
   }else{      
    echo "ok";
   }
   
echo json_encode($jsondata);
