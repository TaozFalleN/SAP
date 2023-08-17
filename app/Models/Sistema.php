<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sistema extends Model
{
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;

    protected $table = 'educacion_sistemas';

    protected $primaryKey = 'sis_id';

    protected $fillable = [
        'sis_id',
        'sis_nombre',
        'sis_descripcion',
        'sis_host',
        'sis_puerto',
        'sis_estado'
    ];

    public $timestamps = false;

    public static function credencialesSistema(){
        return Sistema::with('servicios')->where('sis_nombre', config('system.app_name'))->first();
    }

    public static function credencialesPortal(){
        return Sistema::where('sis_nombre', 'PORTAL')->first();
    }

    public function menus()
    {
        return $this->hasMany(Menu::class, 'sis_id', 'sis_id');
    }

    public function servicios()
    {
        return $this->hasMany(Servicio::class, 'sis_id', 'sis_id');
    }

    public static function insertar($nombre, $descripcion, $host, $puerto, $estado, $prioridad, $acceso)
    {
        $sistema = new Sistema;
        $sistema->sis_nombre = $nombre;
        $sistema->sis_descripcion = $descripcion;
        $sistema->sis_host = $host;
        $sistema->sis_puerto = $puerto;
        $sistema->sis_url = "";
        $sistema->sis_estado = $estado;
        $sistema->sis_prioridad = $prioridad;
        $sistema->sis_acceso = $acceso;
        $sistema->save();

        return $sistema;
    }
}
