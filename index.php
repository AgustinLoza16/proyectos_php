<?php
include 'menu.html';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Inicio</title>
  <link rel="stylesheet" href="styles.css">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="icon" sizes="192x192" href="https://material.io/static/images/simple-lp/favicons/components-192x192.png">
    <link rel="shortcut icon" href="../images/icono_cofaem.png">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/plug-ins/1.10.20/api/sum().js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/plug-ins/1.10.20/api/processing().js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.9/js/select2.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="../images/ios-desktop.png">
    <meta name="msapplication-TileImage" content="../images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
</head>
<body>
	<!-- *******  -->
	<div class="alert alert-info" role="alert" id="iniciar_partida">
		<form id="form_index">
			<div class="form-group" style="display: none">
				<label>Número de jugadores: </label>
				<input type="number" class="form-control" id="numero_jugadores" value="2" required readonly>
			</div>
			<div class="form-group" style="display: none">
				<label>Número de tiros: </label>
				<input type="number" class="form-control" id="numero_tiros" value="8" required readonly>
			</div>
			<div class="form-group" style="display: none">
				<label>Número de dados: </label>
					<input type="number" class="form-control" id="numero_de_dados" value="2" required readonly>
			</div>
			<div class="form-group">
				<button  class="btn btn-success btn-block" align="center" data-dismiss="modal" id="boton_guardar" onclick="iniciar()"><strong>Iniciar Partida</strong></button>
				<center><div id="img_cargando"></div></center>
			</div>
		</form>
	</div>
	<!-- *******  -->
	<div class="alert alert-success" role="alert"> Seguimiento a partidas <br></div>
	<div class="tab-content container-fluid">
		<div id="home" class="tab-pane active container-fluid"><br>
			<table id="tabla_completa" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
				<thead>
					<tr>
						<th>Ver más</th>
						<th>ID</th>
						<th>Tiros pendientes Jugador 1</th>
						<th>Tiros pendientes Jugador 2</th>
						<th>Lanzar Jugador 1</th>
						<th>Lanzar Jugador 2</th>
						<th>Total Jugador 1</th>
						<th>Total Jugador 2</th>
						<th>Estado</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
		</div>
	</div>
	<!-- *******  -->
<script src="inicio_1.js"></script>
<div class="menuContainer"><?php include 'pie_pagina.html'?></div>
</body>
</html>


<script type="text/javascript">
	$("#form_index").on("submit", function(e){
    event.preventDefault();
});
</script>

<script type="text/javascript">
	$(document).ready(function() {
    		$('#tabla_completa').DataTable({
    			responsive: true,
    			dom: 'Bfrtip',
    			ajax: {
					url: 'partidas_bd.php',
		        	type: 'POST'
				},
			columns: [
			{ mData: "mas" },
			{ mData: "id" },
			{ mData: "turno_jugador_1" },
			{ mData: "turno_jugador_2" },
			{ mData: "estado_1" },
			{ mData: "estado_2" },
			{ mData: "jugador_1" },
			{ mData: "jugador_2" },
			{ mData: "estado" }
			
			
				],
    			language: {
				        "decimal": "",
				        "emptyTable": "No hay información",
				        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
				        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
				        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
				        "infoPostFix": "",
				        "thousands": ",",
				        "lengthMenu": "Mostrar _MENU_ Entradas",
				        "loadingRecords": "Cargando...",
				        "processing": "Procesando...",
				        "search": "Buscar:",
				        "zeroRecords": "Sin resultados encontrados",
				        "paginate": {
				            "first": "Primero",
				            "last": "Ultimo",
				            "next": "Siguiente",
				            "previous": "Anterior"
				        }
				    },
    			lengthMenu: [[10, 15, 25, 50, -1], [10, 15, 25, 50, "Mostrar Todo"]],
        		buttons: [
               		{ extend: 'excelHtml5',
               			footer: true
		    		},
               		'pageLength'
        		]
    		});
		});
</script>



<script>
		function jugador(id_partida,id_jugador){
			Swal.fire({
				title: '¿Está seguro(a) de lanzar los dados?',
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#d33',
				cancelButtonColor: '#899CAA',
				confirmButtonText: 'Lanzar'
			}).then((result) => {
				if (result.value) {
					$.ajax({
						url: 'jugador.php',
						type: 'POST',
						dataType: 'JSON',
						data: {
							id_partida: id_partida,
							id_jugador: id_jugador
						},
					})
					.done(function() {
						console.log("success");
						Swal.fire(
							'Listo!',
							'Se lanzaron los dados',
							'success'
						)
						.then((willDelete) => {
							if (willDelete) {
								 window.location.reload();
							}
						});
					})
					.fail(function() {
						console.log("Error");
						alert('Algo salió mal, vuelva a intentarlo');
					})
					.always(function() {
						console.log("complete");
					});
				}
			})
		}
			

</script>







