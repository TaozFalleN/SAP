<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;

    protected $table = 'educacion_menus';

    protected $primaryKey = 'men_id';

    public $timestamps = false;

    public function sistema() { 
        return $this->belongsTo(Sistema::class, 'sis_id', 'sis_id');
    }

    public function itemsMenu()
    {
        return $this->hasMany(ItemsMenu::class, 'men_id', 'men_id');
    }

    public static function menuRol(){
        $sistema = Sistema::credencialesSistema();
        $usuario = Usuario::obtenerPerfil();
        $roles_items_menu = RolServicio::obtenerServiciosSistemaRol($usuario->rol_tip_id);
        //dd(Menu::with('itemsMenu')->where('sis_id', $sistema->sis_id)->get());
        $menus =  Menu::with(['itemsMenu' => function($query) use ($roles_items_menu) {
            return $query->whereIn('ite_ruta', $roles_items_menu);
        }])->where([['sis_id', $sistema->sis_id]])->get();

        return $menus;
    }

    public static function insertar($nombre, $icono, $sis_id)
    {
        $menu = new Menu;
        $menu->men_nombre = $nombre;
        $menu->men_font_icon = $icono;
        $menu->sis_id = $sis_id;
        $menu->save();

        return $menu;
    }
    
}
