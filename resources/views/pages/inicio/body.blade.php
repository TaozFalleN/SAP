
<div class="row">
    <div class="col-12">
        <div class="card card-chart">
            <div class="card-header">
            <div class="row">
            <div class="col-sm-6 text-left">
            <h2 class="card-title">Permisos registrados por establecimiento</h2>
            </div>
            </div>
            </div>
            <div class="card-body">
            <div class="chart-area">
            <canvas id="lineChartExample"></canvas>
            </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card card-stats card-estatus">
        <div class="card-body">
        <div class="row">
        <div class="col-5">
        <div class="info-icon text-center icon-warning">
        <i class="tim-icons icon-single-copy-04"></i>
        </div>
        </div>
        <div class="col-7">
        <div class="numbers">
        <p class="card-category">TOTAL DE PERMISOS REGISTRADOS</p>
        <h3 class="card-title"></h3>
        </div>
        </div>
        </div>
        </div>
            <div class="card-footer">
            <hr>
            <div class="stats">
            <i class="tim-icons icon-refresh-01"></i> Ultima actualizacion: {{ Carbon\Carbon::now()->format('d-m-Y') }}
            </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card card-stats card-estatus">
        <div class="card-body">
        <div class="row">
        <div class="col-5">
        <div class="info-icon text-center icon-warning">
        <i class="tim-icons icon-single-copy-04"></i>
        </div>
        </div>
        <div class="col-7">
        <div class="numbers">
        <p class="card-category">ESTABLECIMIENTO ASIGNADO</p>
        <h3 class="card-title"></h3>
        </div>
        </div>
        </div>
        </div>
            <div class="card-footer">
            <hr>
            <div class="stats">
            <i class="tim-icons icon-refresh-01"></i> Ultima actualizacion: {{ Carbon\Carbon::now()->format('d-m-Y') }}
            </div>
            </div>
        </div>
    </div>
</div>
