<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

use App\Models\RolTipo;

class EsRolTipoValido implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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
        if(RolTipo::where([['rol_tip_id', $value], ['rol_tip_desactivado', null]])->first()){
            return true;
        }

        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Rol especificado no valido.';
    }
}
