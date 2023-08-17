<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

use App\Models\Sistema;

class EsSistemaValido implements Rule
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
        if(Sistema::where('sis_id', $value)->first()){
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
        return 'Sistema especificado no valido.';
    }
}
