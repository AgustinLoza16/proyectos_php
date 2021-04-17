<?php
include 'conexion.php';
date_default_timezone_set('America/Mexico_City');
$id_partida=$_POST['id_partida'];
$id_jugador=$_POST['id_jugador'];
$jsondata=array();
//****************
$dado1_j1=0;
$dado2_j1=0;
$suma_jugador_1=0;
$dado1_j2=0;
$dado2_j2=0;
$suma_jugador_2=0;
$suma_turno_jugador_1=0;
$suma_turno_jugador_2=0;
//******************
$query=mysqli_query($conexion, "SELECT * from partida where id=$id_partida");
$data = mysqli_fetch_assoc($query);
$numero_tiros=$data["numero_tiros"];
$estado_1=$data["estado_1"];
$estado_2=$data["estado_2"];
$turno_jugador_1=$data["turno_jugador_1"];
$turno_jugador_2=$data["turno_jugador_2"];
$jugador_1=$data["jugador_1"];
$jugador_2=$data["jugador_2"];


	if ($id_jugador == 1) {
			$dado1_j1 = rand(1, 6);
			$dado2_j1 = rand(1, 6);
			$suma_jugador_1 = $jugador_1 + $dado1_j1 +  $dado2_j1;
			$suma_turno_jugador_1= $turno_jugador_1 - 1;
			$resultado = mysqli_query($conexion,"UPDATE partida SET turno_jugador_1=$suma_turno_jugador_1, jugador_1=$suma_jugador_1 where id=$id_partida");
	}


	if ($id_jugador == 2) {
			$dado1_j2 = rand(1, 6);
			$dado2_j2 = rand(1, 6);
			$suma_jugador_2 = $jugador_2 + $dado1_j2 +  $dado2_j2;
			$suma_turno_jugador_2= $turno_jugador_2 - 1;
			$resultado = mysqli_query($conexion,"UPDATE partida SET turno_jugador_2=$suma_turno_jugador_2, jugador_2=$suma_jugador_2 where id=$id_partida");
	}




















if ($id_jugador == 1) {
		if ($turno_jugador_1 <= $numero_tiros){
			$dado1_j1 = rand(1, 6);
			$dado2_j1 = rand(1, 6);
			$suma_jugador_1 = $jugador_1 + $dado1_j1 +  $dado2_j1;
			$suma_turno_jugador_1= $turno_jugador_1 - 1;
			$resultado = mysqli_query($conexion,"UPDATE partida SET turno_jugador_1=$suma_turno_jugador_1, jugador_1=$suma_jugador_1 where id=$id_partida");
		}else{
			$resultado = mysqli_query($conexion,"UPDATE partida SET estado='FALTA_JUGADOR_2' where id=$id_partida");
		}

		
	}



















if($resultado != true){
	 	$jsondata["resultado"]=mysqli_errno($conexion);
	 	echo $jsondata["resultado"];
	 }else{
	 	$jsondata["resultado"]=$resultado;
	 }
echo json_encode($jsondata);
?>