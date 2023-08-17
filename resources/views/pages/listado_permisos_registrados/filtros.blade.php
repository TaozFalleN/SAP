
<div class="card mb-0">
    <div class="card-body pb-0">
        <div id="searchData" class="row">
            <div class="col-12 col-md-3">
                <label for="nombreText">NOMBRE O CORREO</label>
                <input type="text" class="form-control" name="nombreText"  placeholder="listado...">
            </div>
            <div class="col-12 text-center">
                <button class="btn btn-info btn-sm" onclick="cargarBusqueda(0, 'listadoContainer') ">
                    <i class="fas fa-search"></i> BUSCAR
                </button>
                <button class="btn btn-secondary btn-sm" onclick="location.reload()">
                    <i class="fas fa-broom"></i> LIMPIAR
                </button>
            </div>
        </div>
    </div>
</div>