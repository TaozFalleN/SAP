<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $table = 'educacion_personas';

    protected $primaryKey = 'pna_rut';

    public $timestamps = false;

    public static function formatearRut($value) { 
        $rut_sin_guion = explode("-", $value);
        return str_replace(".", "", $rut_sin_guion[0]);
    }

    public static function insertar($rut, $nombres, $apellidoP, $apellidoM)
    {
        $persona = new Persona;
        $persona->pna_rut = $rut;
        $persona->pna_nombre = $nombres;
        $persona->pna_apellidoP = $apellidoP;
        $persona->pna_apellidoM = $apellidoM;
        $persona->save();

        return $persona;
    }

    public static function actualizar($rut, $nombres, $apellidoP, $apellidoM)
    {
        $persona = Persona::where('pna_rut', $rut)->first();
        $persona->pna_rut = $rut;
        $persona->pna_nombre = $nombres;
        $persona->pna_apellidoP = $apellidoP;
        $persona->pna_apellidoM = $apellidoM;
        $persona->save();

        return $persona;
    }
}
