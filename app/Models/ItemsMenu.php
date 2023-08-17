<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemsMenu extends Model
{
    use HasFactory;

    protected $table = 'educacion_items_menu';

    protected $primaryKey = 'ite_id';

    public $timestamps = false;

    public static function itemsMenuRolesTipos()
    {
        return $this->belongsToMany(RolTipo::class, 'educacion_roles_items_menu', 'ite_id', 'rol_tip_id')->as('ItemsRoles');
    }

}
