<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

use App\Models\Usuario;

class CorreoUsuarioExiste implements Rule
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
        if(Usuario::where('usu_email', $value)->first()){
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
        return 'El correo especificado ya se encuentra asociado a un usuario.';
    }
}
