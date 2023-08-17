<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

use App\Models\UsuarioRol;

class UsuarioRolTipoNoExiste implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */

    public function __construct($usu_id)
    {
        $this->usu_id = $usu_id;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if(UsuarioRol::where([['usu_id', $this->usu_id], ['rol_tip_id', $value]])->first()){
            return false;
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'El rol seleccionado ya se encuentra asignado al usuario.';
    }
}
