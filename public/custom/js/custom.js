//CONFIGURACION INICIAL NO REMOVER !!!!!!
var host = "";
var url = window.location.href;

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

function actualizarPreferencias(consulta, parametro) {
    var datos = {}; 
    datos.consulta = consulta;
    datos.parametro = parametro;
    
    $.ajax({
        url: host + "/actualizarPreferencias", 
        type: "PUT",
        data: datos, 
        success: function(res) { 
          console.log(res);
          blackDashboard.showSidebarMessage('Preferencias aplicadas');
        }, 
        error: function(error) { 
          console.log(error); 
          Swal.fire( 'Error', 'Hubo un error registrando las preferencias', 'error' ) 
        } 
    })
}

$(document).on('click', '.pagination a', function (e) {
 cargarBusqueda($(this).attr('href').split('page=')[1], $(this).closest('div').attr('id'));
  e.preventDefault();
});

function cargarBusqueda(pagina, contenedor) { 
 
  var datos = $("#searchData").find("select, textarea, input, checkbox");
  var pag = pagina != 0 ? "?page=" + pagina : ''; 

  $.ajax({ 
      url: location.pathname + pag, 
      type: "GET", 
      data: datos, 
      success: function(res) { 
        console.log(contenedor); 
        $('#'+contenedor).html(res); 
        $('[data-toggle="tooltip"]').tooltip();
      }, 
      error: function(error) { 
        console.log(error); 
      } 
  })
}

//CONFIGURACION INICIAL NO REMOVER !!!!!!


//OTRAS CONFIGURACIONES, REMOVER EN CASO DE EMPEZAR NUEVO PROYECTO

$('body').on('submit', '.msform', function (ev) {
  ev.preventDefault();
  var actionUrl = $(this).attr('action');

  $('#submit').attr('disabled', 'true');
  $(".arrow-validation").remove();
  $(".error").remove();
  $(".form-group").removeClass("has-danger");
  
  $.ajax({
      url: actionUrl,
      type:  $(this).attr('method'),
      data: new FormData(this),
      processData: false,
      contentType: false,
      success: function(res){
        console.log(res);
        if(res.code == 0){
          Swal.fire({
            title: res.titulo,
            text: res.mensaje,
            icon: res.tipo,
            showConfirmButton: true,
            showCancelmButton: false,
            confirmButtonText: 'Ok',
          }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
              location.reload();
            } 
          })
          $('#submit').removeAttr('disabled');
        }
        else{
          Swal.fire(res.titulo, res.mensaje, res.tipo);
          $('#submit').removeAttr('disabled');
        } 
      },
      error: function(error) {
        //console.log(error.responseJSON.);
        var errores = "";
        if(error.responseJSON.errors){
          $(".form-group").addClass("has-success");
          objeto = error.responseJSON.errors;
          for (const [key, value] of Object.entries(objeto)) {
            //errores = errores + `<p style="color:red; text-align: left;"><strong>- ${value}</strong><br></p>`;
            let elemento =  $(`[name="${key}"], [name="${key}[]"]`).parent();
            elemento.append(
              `<div id="arrow-${key}" class="arrow-validation ml-2"></div>
              <label id="${key}-error" class="error pt-1 pb-1 pl-2 pr-2 label-validation" for="${key}">
                <strong>${value}</strong>
              </label>`);
            if(!elemento.prop('className').includes("dropdown")){
              elemento.addClass('has-danger');
              elemento.removeClass('has-success');
            }
          }
        }
        else{
          errores = error.responseJSON.message;
          Swal.fire({
            title: 'No se logro realizar la operación',
            html: "Motivo: <br>"+errores,
            confirmButtonText: 'Ok',
            icon: 'error',
          })
        }
        $('#submit').removeAttr('disabled');
      }
  });
});

$(document).on('click', '.form-group', function (e) {
  $(this).removeClass('has-danger has-success');
  let name = $(this).children('input').attr("name");
  $('#'+name+'-error').remove();
  $('#arrow-'+name).remove();
});

$(document).on('change', '.selectpicker', function (e) {
  let name = $(this).attr("name");
  $('#'+name+'-error').remove();
  $('#arrow-'+name).remove();
});

//OTRAS CONFIGURACIONES, REMOVER EN CASO DE EMPEZAR NUEVO PROYECTO

