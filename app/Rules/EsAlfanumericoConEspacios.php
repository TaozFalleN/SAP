<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class EsAlfanumericoConEspacios implements Rule
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
        if(preg_match('/[^A-Za-z0-9 ñÑáéíóúÁÉÍÓÚ]/', $value)){
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
        return 'Solo se permiten letras, numeros y espacios.';
    }
}
