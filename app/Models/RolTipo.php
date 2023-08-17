<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RolTipo extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'educacion_roles_tipos';

    protected $primaryKey = 'rol_tip_id';

    public $timestamps = false;

    const DELETED_AT = 'rol_tip_desactivado';

    public function itemsMenu()
    {
        return $this->belongsToMany(ItemsMenu::class, 'educacion_roles_items_menu', 'rol_tip_id', 'ite_id');
    }

    public function sistema()
    {
        return $this->hasOne(Sistema::class, 'sis_id', 'sis_id');
    }

    public function usuarioRol()
    {
        return $this->hasMany(UsuarioRol::class, 'rol_tip_id', 'rol_tip_id');
    }

    public function rolesServicios()
    {
        return $this->hasMany(RolServicio::class, 'rol_tip_id', 'rol_tip_id');
    }

    public static function insertar($nombre, $sis_id)
    {
        $rol_tipo = new RolTipo;
        $rol_tipo->rol_tip_nombre = $nombre;
        $rol_tipo->sis_id = $sis_id;
        $rol_tipo->save();

        return $rol_tipo;
    }

    public static function desactivar($rol_tip_id)
    {
        $rol_tipo = RolTipo::find($rol_tip_id);
        return $rol_tipo->delete();
    }

    public static function restaurar($rol_tip_id)
    {
        $rol_tipo = RolTipo::where('rol_tip_id', $rol_tip_id)->withTrashed();
        return $rol_tipo->update(['rol_tip_desactivado' => null]);
    }
}
