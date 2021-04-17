
function iniciar(){
      var numero_jugadores=0;
      var numero_tiros=0;
      var numero_de_dados=0; 
      Swal.fire({
        title: '¿Está seguro(a)?',
        text: "¿Desea inicar la partida?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#899CAA',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Enviar'
      }).then((result) => {
        if (result.value) {
          $('#boton_guardar').hide();
          $('#img_cargando').html('<img src="img/loader.gif"/>');
          $.ajax({
            url: 'inicia_partida.php',
            type: 'POST',
            dataType: 'JSON',
            data: {
              numero_jugadores:document.getElementById('numero_jugadores').value,
              numero_tiros:document.getElementById('numero_tiros').value,
              numero_de_dados:document.getElementById('numero_de_dados').value
            },
            beforeSend: function(){
                 window.location.reload();
              }
          })
        }
      })
    }






          



