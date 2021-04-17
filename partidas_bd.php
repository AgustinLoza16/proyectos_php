<?php
include 'conexion.php';
date_default_timezone_set('America/Mexico_City');
$resultado = mysqli_query($conexion, "SELECT * from partida");
$c=0;
$num_rows = mysqli_num_rows($resultado);
    if ($num_rows > 0){
    		while($fila=$resultado->fetch_assoc()){	
			$data[$c]["mas"]= "<center>-</center>";
			$data[$c]["id"] = $fila["id"];
			$id_partida=$fila["id"];
			$estado_1=$fila["estado_1"];
			$estado_2=$fila["estado_2"];
			$turno_jugador_1=$fila["turno_jugador_1"];
			$turno_jugador_2=$fila["turno_jugador_2"];
			$data[$c]["turno_jugador_1"]=$turno_jugador_1;
			$data[$c]["turno_jugador_2"]=$turno_jugador_2;
			$jugador_1=$fila["jugador_1"];
			$jugador_2=$fila["jugador_2"];
			$data[$c]["jugador_1"] = $jugador_1;
			$data[$c]["jugador_2"] = $jugador_2;

			
			if ($estado_1 == 'PENDIENTE') {
				if ($turno_jugador_1==0) {
					$data[$c]["estado_1"] = "<center>OK</center>";
				}else{
					$data[$c]["estado_1"] = "<center><button type='button' class='btn btn-danger' onclick=\"jugador($id_partida,1);\" ><i class='far fa-user fa-lg'></i></button></center>";
				}
				$data[$c]["estado"] = "-";
			}


			if ($estado_2 == 'PENDIENTE') {
				if ($turno_jugador_2==0) {
					$data[$c]["estado_2"] = "<center>OK</center>";
				}else{
					$data[$c]["estado_2"] = "<center><button type='button' class='btn btn-info' onclick=\"jugador($id_partida,2);\" ><i class='far fa-user fa-lg'></i></button></center>";
				}
				$data[$c]["estado"] = "-";
			}


			if ($turno_jugador_1==0 and $turno_jugador_2==0) {

				if ($jugador_1 > $jugador_2) {
				    $data[$c]["estado"] = "GANÓ JUGADOR 1";
					} elseif ($jugador_1 < $jugador_2) {
					    $data[$c]["estado"] = "GANÓ JUGADOR  2";
					} else {
					    $data[$c]["estado"] = "EMPATE";
					}
			}

			$c++;
		}
    }else{
    		$data[$c]["mas"]= "-";
    		$data[$c]["id"] = "-";
			
			$data[$c]["turno_jugador_1"] = "-";
			$data[$c]["turno_jugador_2"] = "-";
			$data[$c]["jugador_1"] = "-";
			$data[$c]["jugador_2"] = "-";
			$data[$c]["estado"] = "-";
			$data[$c]["estado_1"] = "-";
			$data[$c]["estado_2"] = "-";
    }
    $results = ["sEcho" => 1,
			"iTotalRecords" => count($data),
			"iTotalDisplayRecords" => count($data),
			"aaData" => $data
		];
		echo json_encode($results);

?>