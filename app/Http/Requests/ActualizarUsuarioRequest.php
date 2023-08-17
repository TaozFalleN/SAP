<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

use App\Rules\NonConsecutiveChars;
use App\Rules\EsRutValido;


class ActualizarUsuarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'idUsuario' => ['required', 'numeric'],
            'rut' => ['required', 'min:10', 'max:12', new EsRutValido],
            'nombre' => ['required', 'min:3', 'max:45'],
            'apellidoP' => ['required'],
            'apellidoM' => ['required'],
            'email' => ['required', 'email'],
            'usuario' => ['required', 'alpha'],
            'clave' => ['required', 'confirmed', 'sometimes', new NonConsecutiveChars, Password::min(8)->letters()->mixedCase()->numbers()->symbols()->uncompromised()],
            'clave_confirmation' => ['required', 'sometimes'],
            'direccion' => ['required'],
            'dominio' => ['required'],
        ];
    }

    public function attributes()
    {
        return [
            'rut' => 'Rut',
            'nombre' => 'Nombres',
            'apellidoP' => 'Primer apellido',
            'apellidoM' => 'Segundo apellido',
            'usuario' => 'Nombre de Usuario',
            'email' => 'Correo electronico',
            'clave' => 'Contraseña del usuario',
            'clave_confirmation' => 'Repita la contraseña',
            'direccion' => 'Dirección Municipal',
            'dominio' => 'Dominio',
        ];
    }
}
