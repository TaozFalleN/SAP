<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Hash;


class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'educacion_usuarios';

    protected $primaryKey = 'usu_id';

    protected $fillable = [
        'usu_usuario',
        'usu_email',
        'usu_clave',
    ];

    public $timestamps = false;

    const DELETED_AT = 'usu_desactivado';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'usu_clave'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function persona()
    {
        return $this->hasOne(Persona::class, 'pna_rut', 'pna_rut');
    }

    public function direccion()
    {
        return $this->hasOne(Direccion::class, 'dir_id', 'usu_direccion');
    }

    public function usuariosRoles()
    {
        return $this->hasMany(UsuarioRol::class, 'usu_id', 'usu_id');
    }

    public static function obtenerPerfil(){
        $sistema = Sistema::credencialesSistema();
        return Usuario::leftJoin('educacion_personas', 'educacion_usuarios.pna_rut', '=', 'educacion_personas.pna_rut')
        ->leftJoin('educacion_usuarios_roles', 'educacion_usuarios.usu_id', '=', 'educacion_usuarios_roles.usu_id')
        ->leftJoin('educacion_roles_tipos', 'educacion_usuarios_roles.rol_tip_id', '=', 'educacion_roles_tipos.rol_tip_id')
        ->where([['educacion_usuarios_roles.usu_id', Auth::user()->usu_id], ['educacion_roles_tipos.sis_id', $sistema->sis_id], ['educacion_usuarios.usu_desactivado', null]])
        ->first();
    }
    
    public static function actualizarColor($color){  
        return Usuario::where('educacion_usuarios.usu_id', Auth::user()->usu_id)
        ->update(['usu_color_menu' => $color]);
    }

    public static function actualizarTema($valor){  
        return Usuario::where('educacion_usuarios.usu_id', Auth::user()->usu_id)
        ->update(['usu_modo_oscuro' => $valor]);
    }

    public static function actualizarMenu($valor){  
        return Usuario::where('educacion_usuarios.usu_id', Auth::user()->usu_id)
        ->update(['usu_menu_min' => $valor]);
    }

    public static function desactivar($usuario)
    {
        $usuario = Usuario::find($usuario);
        return $usuario->delete();
    }

    public static function restaurar($usuario)
    {
        $usuario = Usuario::where('usu_id', $usuario)->withTrashed();
        return $usuario->update(['usu_desactivado' => null]);
    }

    public static function insertar($nombre_usuario, $clave, $email, $dir_id, $rut, $dominio)
    {
        $usuario = new Usuario;
        $usuario->usu_usuario = $nombre_usuario;
        $usuario->usu_clave = Hash::make($clave);
        $usuario->usu_estado = 1;
        $usuario->usu_email = $email;
        $usuario->usu_direccion = $dir_id;
        $usuario->pna_rut = $rut;
        $usuario->usu_dominio = $dominio;
        $usuario->save();

        return $usuario;
    }

    public static function actualizar($id, $nombre_usuario, $clave, $email, $dir_id, $rut, $dominio)
    {
        $usuario = Usuario::where('usu_id', $id)->first();
        $usuario->usu_usuario = $nombre_usuario;
        $usuario->usu_clave = Hash::make($clave);
        $usuario->usu_estado = 1;
        $usuario->usu_email = $email;
        $usuario->usu_direccion = $dir_id;
        $usuario->pna_rut = $rut;
        $usuario->usu_dominio = $dominio;
        $usuario->save();

        return $usuario;
    }

}
