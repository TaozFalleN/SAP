<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Usuario;
use App\Models\Sistema;
use App\Models\UsuarioRol;
use App\Models\ClaveUnicaAuth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;


class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $sistema = Sistema::credencialesSistema();

        return view('auth.login')->with(['sistema' => $sistema]);
    }

    public function login(Request $request)
    {
        $credenciales = $request->only('usu_usuario', 'usu_clave');

        $usuario = Usuario::where('usu_usuario', $credenciales['usu_usuario'])->first();
        $sistema = Sistema::credencialesSistema();
        if($usuario){
            $rol = UsuarioRol::obtenerRolUsuarioSistema($usuario->usu_id, $sistema->sis_id);
            if($sistema->sis_mant == 0){
                if (Hash::check($credenciales['usu_clave'], $usuario->usu_clave)) {
                    if($rol){
                        ClaveUnicaAuth::generarAuth(csrf_token(), $usuario->usu_id, $sistema->sis_id, $usuario->pna_rut);
                        Auth::loginUsingId($usuario->usu_id);
                        return redirect()->intended($rol->rol_usu_nombre.'/inicio');
                    }
                    else{
                        Alert::error('Acceso no autorizado', 'Usted no posee los permisos necesarios para ingresar a este sistema');
                        return redirect('login');
                    }          
                }
                else{
                    Alert::error('Datos Incorrectos', 'La contraseña no coincide con nuestros registros');
                }
                
            }
            else{
                Alert::error('Sistema en mantencion', 'El sistema se encuentra en mantenimiento, por lo que no se puede ingresar temporalmente');
            }
        }
        else{
            Alert::error('Datos Incorrectos', 'El usuario no existe');
        }

        return redirect('login');
    }

    public function logout()
    {    
        Auth::logout();
        ClaveUnicaAuth::borrarAuth(csrf_token());

        return redirect('login');
    }

   /* public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function handleProviderCallback()
    {
        $usuario = Socialite::driver('google')->user();

        dd($usuario);

        // $user->token;
    }*/
}
