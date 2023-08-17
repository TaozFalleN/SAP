<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolServicio extends Model
{
    use HasFactory;

    protected $table = 'educacion_roles_servicios';

    protected $primaryKey = 'ser_id';

    public $timestamps = false;

    public static function obtenerServicioSistemaRol($rol_tip_id, $nombre)
    {
        return RolServicio::leftJoin('educacion_servicios', 'educacion_roles_servicios.ser_id', '=', 'educacion_servicios.ser_id')
        ->leftJoin('educacion_sistemas', 'educacion_servicios.sis_id', '=', 'educacion_sistemas.sis_id')
        ->where([['rol_tip_id', $rol_tip_id], ['ser_codigo', $nombre]])->first();
    }

    public function rolTipo()
    {
        return $this->BelongsTo(RolTipo::class, 'rol_tip_id', 'rol_tip_id');
    }

    public function servicios()
    {
        return $this->hasOne(Servicio::class, 'ser_id', 'ser_id');
    }

    public static function obtenerServiciosSistemaRol($rol_tip_id){
        $query = RolServicio::leftJoin('educacion_servicios', 'educacion_roles_servicios.ser_id', '=', 'educacion_servicios.ser_id')
        ->where('rol_tip_id', $rol_tip_id)
        ->get();

        $ids = array();

        foreach($query as $row){
            array_push($ids, $row->ser_codigo);
        }

        return $ids;
    }

    public static function obtenerServiciosSistemaRolId($rol_tip_id){
        $query = RolServicio::leftJoin('educacion_servicios', 'educacion_roles_servicios.ser_id', '=', 'educacion_servicios.ser_id')
        ->where('rol_tip_id', $rol_tip_id)
        ->orderBy('educacion_servicios.ser_id')
        ->get();

        $ids = array();

        foreach($query as $row){
            array_push($ids, $row->ser_id);
        }

        return $ids;
    }

    public static function eliminar($rol_ser_id)
    {
        $rol_servicio = RolServicio::find($rol_ser_id);
        return $rol_servicio->delete();
    }

    public static function insertar($rol_id, $ser_id)
    {
        $rol_servicio = new RolServicio;
        $rol_servicio->rol_tip_id = $rol_id;
        $rol_servicio->ser_id = $ser_id;
        $rol_servicio->save();

        return $rol_servicio;
    }
}
