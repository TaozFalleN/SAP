
<div id="perfilModal" class="modal {{ $perfil->usu_modo_oscuro == 1 ?  'modal-black' : ''}} fade" tabindex="-1" role="dialog">
  <div class="modal-dialog  modal-long" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary pb-3">
        <h4 class="modal-title">Perfil</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          <i class="tim-icons icon-simple-remove"></i>
        </button>
      </div>
      <div class="modal-body">
        
        <table class="table">
            <tbody>
                <tr>
                    <td>
                        Rut: 
                    </td>
                    <td>
                        {{ $perfil->pna_rut }} - {{ $perfil->pna_dv }}
                    </td>
                </tr>  
                <tr>
                    <td>
                        Nombre: 
                    </td>
                    <td>
                        {{ $perfil->pna_nombre }} {{ $perfil->pna_apellidoP }} {{ $perfil->pna_apellidoM }}
                    </td>
                </tr> 
                <tr>
                    <td>
                        Tipo de perfil:  
                    </td>
                    <td>
                        {{ $perfil->rol_tip_nombre }}
                    </td>
                </tr> 
                <tr>
                    <td>
                        Telefono: 
                    </td>
                    <td>
                        {{ $perfil->pna_telefono }}
                    </td>
                </tr> 
                <tr>
                    <td>
                        Correo: 
                    </td>
                    <td>
                        {{ $perfil->pna_email }}
                    </td>
                </tr> 
                <tr>
                    <td>
                        Estado: 
                    </td>
                    <td>
                        {{ $perfil->usu_estado ? 'ACTIVO' : 'INACTIVO' }}
                    </td>
                </tr> 
            </tbody>
        </table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary ml-auto" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


{{--<div class="modal fade" id="perfilModal" tabindex="-1" role="dialog" aria-labelledby="perfilModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header modal-header-color">
                <h5 class="modal-title text-white" id="perfilModalLabel">PERFIL</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="table-responsive">
                        <table class="table align-items-center">
                            <thead class="thead">
                            </thead>
                            <tbody class="list">
                                <tr>
                                    <td>
                                        Rut: 
                                    </td>
                                    <td>
                                        {{ $perfil->pna_rut }} - {{ $perfil->pna_dv }}
                                    </td>
                                </tr>  
                                <tr>
                                    <td>
                                        Nombres: 
                                    </td>
                                    <td>
                                        {{ $perfil->pna_nombre }}
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        Apellidos:  
                                    </td>
                                    <td>
                                        {{ $perfil->pna_apellidoP }} {{ $perfil->pna_apellidoM }}
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        Telefono: 
                                    </td>
                                    <td>
                                        {{ $perfil->pna_telefono }}
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        Correo: 
                                    </td>
                                    <td>
                                        {{ $perfil->pna_email }}
                                    </td>
                                </tr> 
                                <tr>
                                    <td>
                                        Estado: 
                                    </td>
                                    <td>
                                        {{ $perfil->usu_estado ? 'ACTIVO' : 'INACTIVO' }}
                                    </td>
                                </tr> 
                            </tbody> 
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">
                    CERRAR
                </button>
            </div>
        </div>
    </div>
</div>--}}