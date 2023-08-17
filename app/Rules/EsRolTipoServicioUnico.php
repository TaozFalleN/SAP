<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

use App\Models\RolServicio;

class EsRolTipoServicioUnico implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($rol_id)
    {
        $this->rol_id = $rol_id;
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
        foreach($value as $item){
            $rol_servicio = RolServicio::where([['rol_tip_id', $this->rol_id], ['ser_id', $item]])->first();
            if($rol_servicio){
                return false;
            }
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
        return 'Uno o mas servicios que intenta asociar ya se encuentran registrados para este rol';
    }
}
