<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ErrorLog extends Model
{
    use HasFactory;

    protected $table = 'educacion_logs_sistemas';

    protected $primaryKey = 'log_id';

    public $timestamps = false;

    public function sistema()
    {
        return $this->hasOne(Sistema::class, 'sis_id', 'sis_id');
    }
    public function usuario()
    {
        return $this->hasOne(Usuario::class, 'usu_id', 'usu_id');
    }
}
