<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClaveUnicaAuth extends Model
{
    use HasFactory;

    protected $table = 'educacion_clave_unica_auth';

    protected $primaryKey = 'cla_uni_auth_id';

    public $timestamps = false;

    public static function generarAuth($token, $usu_id, $sis_id, $rut){  
        return ClaveUnicaAuth::insert([
            'cla_uni_auth_token' => $token,
            'usu_id' => $usu_id,
            'sis_id' => $sis_id,
            'pna_rut' => $rut
        ]);
      }

    public static function obtenerAuth($token, $sis_id){  
        return ClaveUnicaAuth::where([['cla_uni_auth_token', '=', $token], ['sis_id', '=', $sis_id]]) 
        ->first();
    }

    public static function borrarAuth($token){  
        return ClaveUnicaAuth::where('cla_uni_auth_token', $token)
        ->delete();
    }

    public static function actualizarAuth($old_token, $sis_id, $new_token){  
        return ClaveUnicaAuth::where([['cla_uni_auth_token', $old_token],['sis_id', $sis_id]])
        ->update(['cla_uni_auth_token' => $new_token]);
    }
}
