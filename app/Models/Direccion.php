<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    use HasFactory;

    protected $table = 'educacion_direcciones';

    protected $primaryKey = 'dir_id';

    public $timestamps = false;

    public static function listaDirecciones()
    {
        return Direccion::where('dir_direccion', 1)->orderBy('dir_id')->get();
    }
}
