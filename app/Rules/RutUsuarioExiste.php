<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

use App\Models\Usuario;
use App\Models\Persona;

class RutUsuarioExiste implements Rule
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
        $rut = Persona::formatearRut($value);

        if(Usuario::where('pna_rut', $rut)->first()){
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
        return 'El rut especificado ya se encuentra asociado a un usuario.';
    }
}
