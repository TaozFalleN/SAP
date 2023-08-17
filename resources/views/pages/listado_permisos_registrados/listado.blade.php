<div class="card p-0">
    <div class="card-body p-0">
        <div class="table-responsive-md">   
            
            <table class="table bordered mb-0" >
                <thead class="table-themed" data="{{ $perfil->usu_color_menu }}">
                    <tr>
                        <th class="pl-3 text-white">Usuario</th>
                        <th class="text-white">Nombre completo</th>
                        <th class="text-white">Email</th>
                        <th class="text-white">Direccion</th>
                        <th class="text-center text-white">Accion 1</th>
                        <th class="text-center text-white">Accion 2</th>
                        <th class="text-center text-white">Accion 3</th>
                        <th class="text-center text-white">Accion 4</th>
                    </tr>
                </thead>
                <tbody>
             
                        <tr>
                            <td class="pl-3">Permiso 1</td>
                            <td>Permiso 1</td>
                            <td>Permiso 1</td>
                            <td>Permiso 1</td>
                            <td class="text-center">
                                <button class="btn btn-warning btn-icon btn-simple btn-actualizar-usuario" data-id=""
                                data-contenedor="actualizarUsuarioModal" data-rut=""
                                data-nombre="" data-apellidoP=""
                                data-apellidoM="" data-usuario=""
                                data-correo="" data-direccion="" data-dominio="">
                                    <i class="fas fa-edit fa-lg"></i>
                                </button>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-success btn-icon btn-simple btn-registrar-usuario-tipo-rol" data-id=""
                                data-contenedor="registrarTipoRolUsuario" data-rut=""
                                data-nombre="">
                                    <i class="fas fa-link fa-lg"></i>
                                </button>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-info btn-icon btn-simple btn-usuarios-tipo" data-id="" data-contenedor="listadoTiposRolUsuario">
                                    <i class="fas fa-users fa-lg"></i>
                                </button>
                            </td>
                            <td class="text-center">
                                <label class="custom-toggle mb-0" data-toggle="tooltip" data-placement="top" title="Desactivar">
                                    <input type="checkbox" class="sw-estado-usuario" checked data-id="">
                                    <span class="custom-toggle-slider rounded-circle"></span>
                                </label> 
                            </td>
                        </tr>
           
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- $usuarios->links('paginators.paginator') --}}

