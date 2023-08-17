<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class NonConsecutiveChars implements Rule
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
        $test = $value;
        $valid = true;

        preg_match_all('/([a-zA-Z0-9])\1{2,}/', $test, $matches);

        if (!empty($matches[1])) {
            $valid = false;
        } else {
            $arr = str_split($test);
            $last = strlen($test) - 1;

            foreach ($arr as $key => $t) {
                if (!is_numeric($t)) {
                    continue;
                }

                $prev = $key > 0 && $arr[$key - 1] == ($t - 1);
                $next = $key < $last && $arr[$key + 1] == ($t + 1);

                if ($prev && $next) {
                    $valid = false;

                    break;
                }
            }
        }

        return $valid;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'La clave no puede contener caracteres consecutivos o repetitivos';
    }
}
