<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Servicio extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'educacion_servicios';

    protected $primaryKey = 'ser_id';

    public $timestamps = false;

    const DELETED_AT = 'ser_eliminado';

    /*public function listaServiciosSistema($sis_id)
    {
        return Servicio::where('sis_id', $sis_id)->get();
    }*/

    public function sistema()
    {
        return $this->belongsTo(Sistema::class, 'sis_id', 'sis_id');
    }

    public static function insertar($nombre, $codigo, $sis_id)
    {
        $servicio = new Servicio;
        $servicio->ser_nombre = $nombre;
        $servicio->ser_codigo = $codigo;
        $servicio->sis_id = $sis_id;
        $servicio->save();

        return $servicio;
    }

    public static function eliminar($ser_id)
    {
        $servicio = Servicio::find($ser_id);
        return $servicio->delete();
    }
}
