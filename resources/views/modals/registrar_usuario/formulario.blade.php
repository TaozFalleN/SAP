
<div class="form-card mb-3">  
    <div class="folder-tag">
        <a class="btn btn-sm text-white">
            <i class="fas fa-book"></i> DATOS PERSONALES
        </a>
        <hr>
    </div>
    <div class="row">    
        <div class="form-group col-12 col-md-4">
            <label for="rutInput">Rut</label>
            <input type="text" class="form-control" id="rutInput" name="rut">
        </div>
        <div class="form-group col-12 col-md-8">
            <label for="nombreInput">Nombres</label>
            <input type="text" class="form-control" id="nombreInput" name="nombre">
        </div>
        <div class="form-group col-12 col-md-6">
            <label for="apellidoPInput">Primer apellido</label>
            <input type="text" class="form-control" id="apellidoPInput" name="apellidoP">
        </div>
        <div class="form-group col-12 col-md-6">
            <label for="apellidoMInput">Segundo apellido</label>
            <input type="text" class="form-control" id="apellidoMInput" name="apellidoM">
        </div>
    </div>
    <div class="folder-tag mt-4">
        <a class="btn btn-sm text-white">
            <i class="fas fa-book"></i> DATOS DE USUARIO
        </a>
        <hr>
    </div>
    <div class="row">   
        <div class="form-group col-12 col-md-5">
            <label for="usuarioInput">Nombre de Usuario</label>
            <input type="text" class="form-control" id="usuarioInput" name="usuario">
        </div>
        <div class="form-group col-12 col-md-7">
            <label for="emailInput">Correo electronico</label>
            <input type="email" class="form-control" id="emailInput" name="email">
        </div>
        <div class="form-group col-12 col-md-6">
            <label for="claveInput">Contraseña del usuario</label>
            <input type="password" class="form-control" id="claveInput" name="clave">
        </div>
        <div class="form-group col-12 col-md-6">
            <label for="repetirClaveInput">Repita la contraseña</label>
            <input type="password" class="form-control" id="repetirClaveInput" name="clave_confirmation">
        </div>
        <div class="col-12 col-md-6">
            <label for="direccionSelect">Dirección Municipal</label>
            <select id="direccionSelect" name="direccion" class="selectpicker " data-style="select-with-transition" title="Seleccione..." data-size="7" data-live-search="true">
                @foreach($direcciones as $direccion)
                    <option value="{{ $direccion->dir_id }}">{{ $direccion->dir_nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-12 col-md-6">
            <label for="dominioSelect">Dominio</label>
            <select id="dominioSelect" name="dominio" class="selectpicker " data-style="select-with-transition" title="Seleccione...">
                <option value="MUNICIPALIDAD">MUNICIPALIDAD</option>
                <option value="EDUCACION">EDUCACION</option>
                <option value="SALUD">SALUD</option>
                <option value="CEMENTERIO">CEMENTERIO</option>
            </select>
        </div>

    </div>
</div>

