@extends('app.app', ['class' => 'bg-default'])

@section('content')

@include('modals.perfil_usuario.perfil')

@include('pages.registrar_permiso.style')
 
@include('pages.registrar_permiso.formulario')

@include('pages.registrar_permiso.script')

@endsection