
<script>

    document.addEventListener("DOMContentLoaded", function(){
        // javascript for init 
         $('body').on('click', '.btn-usuarios-tipo', function () {
            var datos = {};
            datos.usuario = $(this).attr('data-id');
            datos.contenedor = $(this).attr('data-contenedor');
            //datos.palabra_clave = $('#recibidoCodigoInput').val(); 
            
            $.ajax({ 
                url: host + "/listaTiposRolUsuario", 
                type: "GET", 
                data: datos, 
                success: function(res) { 
                    console.log(res); 
                    $('#'+datos.contenedor+' .modal-body').html(res);
                    $('#'+datos.contenedor).modal('show');
                }, 
                error: function(error) { 
                    console.log(error); 
                    Swal.fire({
                        title: 'No se logro realizar la operación',
                        text: 'Motivo: '+error.responseJSON.message,
                        confirmButtonText: 'Ok',
                        icon: 'error',
                    })
                } 
            })
        })


        $('body').on('change', '.sw-estado-usuario', function (e) {

            if(!$(this).is(':checked')){
                    Swal.fire({
                    title: '¿Desea desactivar este usuario?',
                    text: 'El usuario no podra ingresar a las plataformas',
                    showCancelButton: true,
                    confirmButtonText: 'Desactivar',
                    cancelButtonText: 'Cancelar',
                    confirmButtonColor: '#f5365c',
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        var datos = {};
                        datos.usuario = $(this).attr('data-id');

                        $.ajax({ 
                            url: host + "/desactivarUsuario", 
                            type: "DELETE", 
                            data: datos, 
                            success: function(res) { 
                                console.log(res); 
                                Swal.fire({
                                title: res.titulo,
                                text: res.mensaje,
                                confirmButtonText: 'Ok',
                                allowOutsideClick: false,
                                icon: res.tipo,
                                }).then((result) => {
                                    
                                }) 
                            }, 
                            error: function(error) { 
                                console.log(error); 
                                Swal.fire({
                                    title: 'No se logro realizar la operación',
                                    text: 'Motivo: '+error.responseJSON.message,
                                    confirmButtonText: 'Ok',
                                    icon: 'error',
                                })
                                $(this).prop('checked', true);
                            } 
                        })
                    } 
                    else{
                        $(this).prop('checked', true);
                    }
                })
            }
            else{
                Swal.fire({
                    title: '¿Desea restaurar este usuario?',
                    text: 'El usuario podra ingresar nuevamente a las plataformas',
                    showCancelButton: true,
                    confirmButtonText: 'Activar',
                    cancelButtonText: 'Cancelar',
                    confirmButtonColor: '#00f2c3',
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        var datos = {};
                        datos.usuario = $(this).attr('data-id');

                        $.ajax({ 
                            url: host + "/restaurarUsuario", 
                            type: "PUT", 
                            data: datos, 
                            success: function(res) { 
                                console.log(res); 
                                console.log(res); 
                                Swal.fire({
                                title: res.titulo,
                                text: res.mensaje,
                                confirmButtonText: 'Ok',
                                allowOutsideClick: false,
                                icon: res.tipo,
                                }).then((result) => {
                                     
                                }) 
                            }, 
                            error: function(error) { 
                                console.log(error); 
                                Swal.fire({
                                    title: 'No se logro realizar la operación',
                                    text: 'Motivo: '+error.responseJSON.message,
                                    confirmButtonText: 'Ok',
                                    icon: 'error',
                                })
                                $(this).prop('checked', false);
                            } 
                        })
                    } 
                    else{
                        $(this).prop('checked', false);
                    }
                })
            }
        })

        $('body').on('click', '.btn-actualizar-usuario', function () {
            $('#idEditInput').val($(this).attr('data-id'));
            $('#rutEditInput').val($(this).attr('data-rut'));
            $('#nombreEditInput').val($(this).attr('data-nombre'));
            $('#apellidoPEditInput').val($(this).attr('data-apellidoP'));
            $('#apellidoMEditInput').val($(this).attr('data-apellidoM'));

            $('#usuarioEditInput').val($(this).attr('data-usuario'));
            $('#emailEditInput').val($(this).attr('data-correo'));
            $('#direccionEditSelect').val($(this).attr('data-direccion'));
            $('#direccionEditSelect').selectpicker('refresh');
            $('#dominioEditSelect').val($(this).attr('data-dominio'));
            $('#dominioEditSelect').selectpicker('refresh');
            
            $('#claveEditInput').val("*********");
            $('#repetirClaveEditInput').val("*********");

            $('#'+$(this).attr('data-contenedor')).modal('show');
        })


        $('body').on('click', '.btn-registrar-usuario-tipo-rol', function (e) {
            $('#'+$(this).attr('data-contenedor')).modal('show');
            $('#rutAsignarModal').val($(this).attr('data-rut'));
            $('#nombreAsignarModal').val($(this).attr('data-nombre'));
            $('#usuarioIdInput').val($(this).attr('data-id'));
        })

        $('body').on('switchChange.bootstrapSwitch', '#checkPass', function (e) {
            if($(this).bootstrapSwitch('state')){
                $('#claveEditInput').prop('disabled', false);
                $('#repetirClaveEditInput').prop('disabled', false);
            }
            else{
                $('#claveEditInput').next().remove();
                $('#claveEditInput').parent().removeClass('has-success has-danger');
                $('#repetirClaveEditInput').parent().removeClass('has-success has-danger');
                $('#claveEditInput').prop('disabled', true);
                $('#repetirClaveEditInput').prop('disabled', true);
            }
            
        })

    })

</script>
