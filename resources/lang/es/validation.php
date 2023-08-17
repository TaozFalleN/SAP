<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'El campo ":attribute" debe ser aceptado',
    'accepted_if' => 'El campo ":attribute" debe ser aceptado cuando el campo ":other" es :value.',
    'active_url' => 'El campo ":attribute" no es una URL valida.',
    'after' => 'El campo ":attribute" debe ser una fecha superior a :date.',
    'after_or_equal' => 'El campo ":attribute" debe ser una fecha superior o igual a :date.',
    'alpha' => 'El campo ":attribute" debe contener solamente letras.',
    'alpha_dash' => 'El campo ":attribute" debe contener solamente letras, numeros, guiones and guiones bajos.',
    'alpha_num' => 'El campo ":attribute" debe contener solamente letras y numeros.',
    'array' => 'El campo ":attribute" debe ser un arreglo.',
    'before' => 'El campo ":attribute" debe ser una fecha anterior a :date.',
    'before_or_equal' => 'El campo ":attribute" debe ser una fecha anterior o igual a :date.',
    'between' => [
        'numeric' => 'El campo ":attribute" debe ser un valor entre :min y :max.',
        'file' => 'El archivo ":attribute" debe pesar entre :min y :max kilobytes.',
        'string' => 'El campo ":attribute" debe tener entre :min y :max caracteres.',
        'array' => 'El campo ":attribute" debe tener entre :min y :max elementos.',
    ],
    'boolean' => 'El campo ":attribute" debe ser verdadero o falso.',
    'confirmed' => 'El campo ":attribute" usado para confirmacion no coincide.',
    'current_password' => 'La contraseña es incorrecta.',
    'date' => 'El campo ":attribute" no es una fecha valida.',
    'date_equals' => 'El campo ":attribute" debe ser una fecha igual a :date.',
    'date_format' => 'El campo ":attribute" no coincide con el formato :format.',
    'declined' => 'El campo ":attribute" debe ser rechazado.',
    'declined_if' => 'El campo ":attribute" debe ser rechazado cuando el campo ":other" es :value.',
    'different' => 'El campo ":attribute" y ":other" deben ser diferentes.',
    'digits' => 'El campo ":attribute" debe contener :digits digitos.',
    'digits_between' => 'El campo ":attribute" debe contener entre :min y :max digitos.',
    'dimensions' => 'La imagen ":attribute" tiene dimensiones invalidas.',
    'distinct' => 'El campo ":attribute" tiene valores duplicados.',
    'email' => 'El campo ":attribute" debe ser una direccion de correo valida.',
    'ends_with' => 'El campo ":attribute" debe terminar con uno de los siguientes valores: ":values".',
    'enum' => 'El campo ":attribute" seleccionado es invalido.',
    'exists' => 'El campo ":attribute" seleccionado es invalido',
    'file' => 'El campo ":attribute" debe ser un archivo.',
    'filled' => 'El campo ":attribute" debe tener un valor.',
    'gt' => [
        'numeric' => 'El campo ":attribute" debe ser mayor a :value.',
        'file' => 'El tamaño del archivo ":attribute" debe ser mayor a :value kilobytes.',
        'string' => 'El campo ":attribute" debe tener mas de :value caracteres.',
        'array' => 'El campo ":attribute" debe tener mas de :value elementos.',
    ],
    'gte' => [
        'numeric' => 'El campo ":attribute" debe ser mayor o igual a :value.',
        'file' => 'El tamaño del archivo ":attribute" debe ser mayor o igual a :value kilobytes.',
        'string' => 'El campo ":attribute" debe tener :value o mas caracteres.',
        'array' => 'El campo ":attribute" debe tener :value elementos o mas.',
    ],
    'image' => 'El archivo ":attribute" debe ser una imagen.',
    'in' => 'El campo ":attribute" es invalido.',
    'in_array' => 'El elemento ":attribute" no existe en ":other".',
    'integer' => 'El campo ":attribute" debe ser un numero entero.',
    'ip' => 'El campo ":attribute" debe ser una direccion IP valida.',
    'ipv4' => 'El campo ":attribute" debe ser una direccion IPv4 valida.',
    'ipv6' => 'El campo ":attribute" debe ser una direccion IPv6 valida.',
    'json' => 'El campo ":attribute" debe ser una cadena JSON valida.',
    'lt' => [
        'numeric' => 'El campo ":attribute" debe ser menor a :value.',
        'file' => 'El tamaño del archivo ":attribute" debe ser menor a :value kilobytes.',
        'string' => 'El campo ":attribute" debe contener menos de :value caracteres.',
        'array' => 'El campo ":attribute" debe tener menos de :value elementos.',
    ],
    'lte' => [
        'numeric' => 'El campo ":attribute" debe ser menor o igual a :value.',
        'file' => 'El tamaño del archivo ":attribute" debe ser menor o igual a :value kilobytes.',
        'string' => 'El campo ":attribute" debe tener :value caracteres o menos',
        'array' => 'El campo ":attribute" no debe contener mas de :value elementos.',
    ],
    'mac_address' => 'El campo ":attribute" debe ser una direccion MAC valida.',
    'max' => [
        'numeric' => 'El campo ":attribute" no debe ser mayor a :max.',
        'file' => 'El tamaño del archivo ":attribute" no debe ser mayor a :max kilobytes.',
        'string' => 'El campo ":attribute" no debe tener mas de :max caracteres.',
        'array' => 'El campo ":attribute" no debe contener mas de :max elementos.',
    ],
    'mimes' => 'El archivo ":attribute" debe ser de alguna de las siguientes extensiones: ":values".',
    'mimetypes' => 'El archivo ":attribute" debe ser de tipo: ":values".',
    'min' => [
        'numeric' => 'El campo ":attribute" debe ser al menos :min.',
        'file' => 'El tamaño del archivo ":attribute" debe ser de al menos :min kilobytes.',
        'string' => 'El campo ":attribute" debe tener al menos :min caracteres.',
        'array' => 'El campo ":attribute" debe contener al menos :min elementos.',
    ],
    'multiple_of' => 'El campo ":attribute" debe ser un multiplo de :value.',
    'not_in' => 'El campo ":attribute" es invalido.',
    'not_regex' => 'El formato del campo ":attribute" es invalido.',
    'numeric' => 'El campo ":attribute" debe ser un numero.',
    'password' => 'La contraseña es incorrecta.',
    'present' => 'El campo ":attribute" field debe estar presente.',
    'prohibited' => 'El campo ":attribute" esta prohibido.',
    'prohibited_if' => 'El campo ":attribute" esta prohibido cuando el campo ":other" es :value.',
    'prohibited_unless' => 'El campo ":attribute" esta prohibido hasta que el campo ":other" esté en ":values".',
    'prohibits' => 'El campo ":attribute" prohibe el campo ":other" de estar presente.',
    'regex' => 'El formato del campo ":attribute" es invalido.',
    'required' => 'El campo ":attribute" es obligatorio.',
    'required_array_keys' => 'El campo ":attribute" debe contener los siguientes campos: ":values".',
    'required_if' => 'El campo ":attribute" es obligatorio si el campo ":other" es :value.',
    'required_unless' => 'El campo ":attribute" es obligatorio hasta que el campo ":other" esté en ":values".',
    'required_with' => 'El campo ":attribute" es obligatorio cuando ":values" esta presente.',
    'required_with_all' => 'El campo ":attribute" es obligatorio cuando ":values" estan presentes.',
    'required_without' => 'El campo ":attribute" es obligatorio cuando ":values" no esta presente.',
    'required_without_all' => 'El campo ":attribute" es requerido cuando ninguno de los valores ":values" estan presentes.',
    'same' => 'El campo ":attribute" y ":other" deben coincidir.',
    'size' => [
        'numeric' => 'El campo ":attribute" debe ser :size.',
        'file' => 'El tamaño del archivo ":attribute" debe ser de :size kilobytes.',
        'string' => 'El campo ":attribute" debe tener :size caracteres.',
        'array' => 'El campo ":attribute" debe contener :size elementos.',
    ],
    'starts_with' => 'El campo ":attribute" debe comenzar con alguno de los siguientes valores: ":values".',
    'string' => 'El campo ":attribute" debe ser una cadena de caracteres.',
    'timezone' => 'El campo ":attribute" debe ser una zona horaria valida.',
    'unique' => 'El campo ":attribute" ya se encuentra en uso.',
    'uploaded' => 'El archivo ":attribute" ha fallado en subirse.',
    'url' => 'El campo ":attribute" debe ser una URL valida.',
    'uuid' => 'El campo ":attribute" debe ser una UUID valida.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
