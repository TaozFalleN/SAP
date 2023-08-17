
<div id="registrarUsuarioModal" class="modal long {{ $perfil->usu_modo_oscuro == 1 ?  'modal-black' : ''}} fade" tabindex="-1" role="dialog" >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form class="msform" method="POST" action="{{ route('registrarUsuario') }}" enctype="multipart/form-data" autocomplete="off">
      @csrf
        <div class="modal-header bg-primary pb-3">
          <h4 class="modal-title">Registro de nuevo usuario</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            <i class="tim-icons icon-simple-remove text-white"></i>
          </button>
        </div>
        <div class="modal-body">    
          @include('modals.registrar_usuario.formulario')
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary ml-auto mr-1" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">INGRESAR<div class="loader" style="display: none"></div></button>
        </div>
      </form>
    </div>
  </div>
</div>

@include('modals.registrar_usuario.script')
