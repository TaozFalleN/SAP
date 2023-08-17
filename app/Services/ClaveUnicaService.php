<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Servicio
{

    public function index(Request $request){
        $client = new \GuzzleHttp\Client();  
        $link = 'https://sistemas.losangeles.cl/API_claveUnica/public/welcome/';
        $sistema = Sistema::credencialesSistema();

        header("Location: ".$link. $sistema->sis_id);
        exit();
    }

    public function inicio(Request $request){

        $sistema = Sistema::credencialesSistema();
        if($sistema->sis_mant == 0){
            $auth = ClaveUnicaAuth::obtenerAuth($request->token, $sistema->sis_id);
            $request->session()->regenerateToken();

            $usuario = Usuario::where('usu_id', $auth->usu_id)->first();
            $rol = UsuarioRol::obtenerRolUsuarioSistema($usuario->usu_id, $sistema->sis_id);

            if($auth){
                if($rol){
                    ClaveUnicaAuth::actualizarAuth($request->token, $sistema->sis_id, csrf_token());
                    Auth::loginUsingId($auth->usu_id);      
                    return redirect('inicio');
                } 
                else{
                    Alert::error('Usuario no valido', 'No se encuentra autorizado a ingresar a esta plataforma');
                } 
            }
            else{
                Alert::error('Datos Incorrectos', 'El usuario no existe');
            }
        }
        else{
            Alert::error('Sistema en mantencion', 'El sistema se encuentra en mantenimiento, por lo que no se puede ingresar temporalmente');
        }
        
        return redirect('login');
    }
}
