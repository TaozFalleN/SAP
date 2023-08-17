<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use \Carbon\Carbon;

class UsuarioRol extends Model
{
    use HasFactory;

    protected $table = 'educacion_usuarios_roles';

    protected $primaryKey = 'usu_rol_id';

    protected $fillable = [
        'usu_id',
        'rol_tip_id',
    ];

    public $timestamps = false;

    public function usuario()
    {
        return $this->hasOne(Usuario::class, 'usu_id', 'usu_id');
    }

    public function rolTipo()
    {
        return $this->belongsTo(RolTipo::class, 'rol_tip_id', 'rol_tip_id');
    }

    public static function obtenerRolUsuarioSistema($usu_id, $sis_id){
        return UsuarioRol::leftJoin('educacion_roles_tipos', 'educacion_usuarios_roles.rol_tip_id', '=', 'educacion_roles_tipos.rol_tip_id')
        ->where([['educacion_usuarios_roles.usu_id', $usu_id], ['educacion_roles_tipos.sis_id', $sis_id], ['educacion_usuarios_roles.usu_rol_fecha_expiracion', '>', Carbon::now()], ['educacion_roles_tipos.rol_tip_desactivado', null]])
        ->orWhere([['educacion_usuarios_roles.usu_id', $usu_id], ['educacion_roles_tipos.sis_id', $sis_id], ['educacion_usuarios_roles.usu_rol_fecha_expiracion', null], ['educacion_roles_tipos.rol_tip_desactivado', null]])
        ->first();
    }

    public static function eliminar($rol_id)
    {
        $usuarioRol = UsuarioRol::find($rol_id);
        return $usuarioRol->delete();
    }

    public static function actualizarFecha($rol, $fecha)
    {
        $usuarioRol = UsuarioRol::find($rol);
        $usuarioRol->usu_rol_fecha_expiracion = $fecha;
        return $usuarioRol->save();
    }

    public static function insertar($usu_id, $rol_tip_id, $fecha_expiracion)
    {
        $usuarioRol = new UsuarioRol;
        $usuarioRol->usu_id = $usu_id;
        $usuarioRol->rol_tip_id = $rol_tip_id;
        $usuarioRol->usu_rol_fecha_expiracion = $fecha_expiracion;
        $usuarioRol->save();

        return $usuarioRol;
    }
}
