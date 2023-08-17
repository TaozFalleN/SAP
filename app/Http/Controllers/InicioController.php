<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Usuario;
use App\Models\ClaveUnicaAuth;
use App\Models\Direccion;
use App\Models\Sistema;
use App\Models\VwUsuariosPorDireccion;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class InicioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        if(!Usuario::obtenerPerfil()){
            Auth::logout();
            return redirect('login');
        } 

        //$usuarios = VwUsuariosPorDireccion::pluck('total')->toArray();
        //$direcciones = VwUsuariosPorDireccion::pluck('nombre')->toArray();
        $total_usuarios = Usuario::count();
        $total_sistemas = Sistema::count();

        /*return view('pages.inicio.index')->with(['usuarios' => $usuarios, 'direcciones' => $direcciones, 'total_sistemas' => $total_sistemas,
        'total_usuarios' => $total_usuarios]); */

        return view('pages.inicio.index'); 
    }
}
