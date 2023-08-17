@extends('app.app', ['class' => 'bg-default'])

@section('content')

@include('modals.perfil_usuario.perfil')
@include('pages.listado_permisos_registrados.style')
 
<div id="filtrosContainer">
    @include('pages.listado_permisos_registrados.filtros')
</div>

<div id="opcionesContainer">
    <button class="btn btn-primary mt-3 mb-2 btn-nuevo-rol" data-toggle="modal" data-target="#registrarUsuarioModal" >
        <i class="fas fa-user-plus"></i> NUEVO USUARIO
    </button>
</div>

<div id="listadoContainer">
    @include('pages.listado_permisos_registrados.listado')
</div>

@include('pages.listado_permisos_registrados.script')

@endsection