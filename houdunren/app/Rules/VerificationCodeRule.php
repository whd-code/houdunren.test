<?php

namespace App\Rules;

use App\Services\CodeService;
use Illuminate\Contracts\Validation\Rule;

class VerificationCodeRule implements Rule
{
    protected $account;
    public function __construct($account)
    {
        $this->account = $account;
    }


    public function passes($attribute, $value)
    {
        return app(CodeService::class)->check($this->account,$value);
    }


    public function message()
    {
        return '验证码错误.';
    }
}
