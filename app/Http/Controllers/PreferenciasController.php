<?php

namespace App\Http\Controllers;

use App\Models\Usuario;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PreferenciasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function actualizarPreferencias(Request $request)
    {   
        if($request->consulta == 'actualizarColor'){
            return Usuario::actualizarColor($request->parametro);
        }
        else if($request->consulta == 'actualizarTema'){
            return Usuario::actualizarTema($request->parametro);
        }
        else if($request->consulta == 'actualizarMenu'){
            return Usuario::actualizarMenu($request->parametro);
        }
  
    }
}
