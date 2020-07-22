<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class AccountRule implements Rule
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

      return  filter_var($value,FILTER_VALIDATE_EMAIL)
        ||
        preg_match('/^1\d{10}$/i',$value);

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return '请输入正确账号';
    }
}
