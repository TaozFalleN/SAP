<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Models\Usuario;
use App\Models\Sistema;
use App\Models\RolItemMenu;
use App\Models\RolServicio;
use App\Models\UsuarioRol;


class Permissions
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            $sistema = Sistema::credencialesSistema();
            $usuario = Usuario::obtenerPerfil($sistema->sis_id);
            if($usuario){
                $usuarioRol = UsuarioRol::obtenerRolUsuarioSistema($usuario->usu_id, $sistema->sis_id);
                $url = explode("/", $request->path());

                if($usuarioRol && (count($sistema->servicios) > 0)){
                    $servicioRol = $url[0] == 'inicio' ? true : RolServicio::obtenerServicioSistemaRol($usuarioRol->rol_tip_id, $url[0]);
                    if($servicioRol){
                        return $next($request);
                    }
                }  
            }
            else{
                Auth::logout();
                return redirect('login');
            }
        }
        else{
            return redirect('login');
        }

        return abort(401, 'ACCESO NO AUTORIZADO');
    }
}
