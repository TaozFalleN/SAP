<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermisoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function cargarFormularioPermiso(Request $request)
    {
        return view('pages.registrar_permiso.index'); 
    }

    public function listaPermisos(Request $request)
    {
        return view('pages.listado_permisos_registrados.index'); 
    }
}
