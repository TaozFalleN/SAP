<form class="msform" method="POST" action="{{ route('registrarPermiso') }}" enctype="multipart/form-data" autocomplete="off">
  @csrf
  <div class="card col-12">
    <div class="card-body">
      <div class="form-card">  
          <div class="folder-tag">
            <a class="btn btn-sm text-white">
              <i class="fas fa-book"></i> IDENTIFICACIÓN DEL SOLICITANTE
            </a>
            <hr>
          </div>
          <div class="row">
            <div class="form-group col-12 col-md-3">
              <label for="nombreInput">Rut</label>
              <input type="text" class="form-control" id="nombreInput" name="nombre">
            </div>
            <div class="form-group col-12 col-md-3">
              <label for="nombreInput">Nombre</label>
              <input type="text" class="form-control" id="nombreInput" name="nombre">
            </div>
            <div class="form-group col-12 col-md-3">
              <label for="descripcionInput">Apellido Paterno</label>
              <input type="text" class="form-control" id="descripcionInput" name="descripcion">
            </div>
            <div class="form-group col-12 col-md-3">
              <label for="descripcionInput">Apellido Materno</label>
              <input type="text" class="form-control" id="descripcionInput" name="descripcion">
            </div>
            <div class="form-group col-12 col-md-4">
              <label for="puertoInput">Establecimiento</label>
              <input type="number" class="form-control" id="puertoInput" name="puerto">
            </div>
            <div class="form-group col-12 col-md-4">
              <label for="puertoInput">Cargo</label>
              <input type="number" class="form-control" id="puertoInput" name="puerto">
            </div>
            <!--<div class="col-12 col-md-4 col-xl-3">
                <label for="estadoSelect">Estado inicial</label>
                <select id="estadoSelect" name="estado" class="selectpicker" data-style="select-with-transition" title="Seleccione...">
                      <option value="1">ACTIVADO</option>
                      <option value="0">DESACTIVADO</option>
                </select>
            </div>
            <div class="col-12 col-md-9 col-xl-7">
                <label for="accesoSelect">Tipo de acceso</label>
                <select id="accesoSelect" name="acceso" class="selectpicker" data-style="select-with-transition" title="Seleccione...">
                      <option value="0">ACCESO 0: INGRESAN SOLO USUARIOS CON ROLES EN EL SISTEMA</option>
                      <option value="1">ACCESO 1: INGRESAN USUARIOS CON ROLES, SI NO TIENEN, SE LOS CREA Y LOS USUARIOS QUE NO EXISTEN ENTRAN COMO INVITADOS</option>
                      <option value="2">ACCESO 2: INGRESAN USUARIOS CON ROLES EN EL SISTEMA Y LOS QUE NO TENGAN, COMO INVITADOS</option>
                      <option value="3">ACCESO 3: INGRESAN USUARIOS QUE SEAN FUNCIONARIOS, DE NO TENER ROLES LOS CREA, SI NO EXISTE EL USUARIO O NO ES FUNCIONARIO, INGRESA COMO INVITADO</option>
                      <option value="4">ACCESO 4: TODOS INGRESAN COMO INVITADOS</option>
                </select>
            </div>
            <div class="form-group col-12 col-md-2 col-xl-1">
              <label for="prioridadInput">Prioridad</label>
              <input type="number" class="form-control" id="prioridadInput" name="prioridad">
            </div>-->
          </div>

          <div class="folder-tag mt-3">
            <a class="btn btn-sm text-white">
              <i class="fas fa-book"></i> ANTECEDENTES DEL PERMISO
            </a>
            <hr>
          </div>
          <div class="row">
            <div class="col-12 col-md-4 col-xl-3">
              <label for="estadoSelect">Tipo de permiso</label>
              <select id="estadoSelect" name="estado" class="selectpicker" data-style="select-with-transition" title="Seleccione...">
                    <option value="1">ADMINISTRATIVO</option>
                    <option value="0">FERIADO LEGAL</option>
                    <option value="1">SIN GOCE DE SUELDO</option>
              </select>
            </div>
            <div class="form-group col-12 col-md-2">
                <label for="label-control">Fecha desde</label>
                <input type="text" class="form-control datetimepicker" value="10/05/2018"/>
            </div>
            <div class="form-group col-12 col-md-2">
                <label for="label-control">Fecha hasta</label>
                <input type="text" class="form-control datetimepicker" value="10/05/2018"/>
            </div>
            <div class="form-group col-12 col-md-2">
              <label for="prioridadInput">Total de dias</label>
              <input type="number" class="form-control" id="prioridadInput" name="prioridad">
            </div>
            <div class="form-group col-12">
              <label for="prioridadInput">Motivo</label>
              <textarea class="form-control text-area-bordered" id="prioridadInput" name="prioridad"></textarea>
            </div>
          </div>
      </div>
    </div>
  </div>

  <!--<div class="card col-12">
    <div class="folder-tag mt-2">
      <a class="btn btn-sm text-white">
        <i class="fas fa-book"></i> DATOS DEL SISTEMA
      </a>
      <hr>
    </div>
    <div class="form-group col-12 col-md-4">
      <label for="itemInput">Subitem</label>
      <input type="text" class="form-control" id="itemInput" name="item">
    </div>
    <a class="btn btn-info btn-sm mb-3 pt-2 text-white" style="margin-top: 27px">Agregar otro subitem</a>

    <div id="cy" class="card-body" style="height: 400px;">
      asdasd
    </div>
  </div>-->



  <div class="text-center">
    <button id="submit" type="submit" class="btn btn-primary next action-button" value="Next">INGRESAR<div class="loader" style="display: none"></div></button>
  </div>

</form>

           