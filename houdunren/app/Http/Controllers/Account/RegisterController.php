<?php

namespace App\Http\Controllers\Account;

use App\Rules\VerificationCodeRule;
use App\Services\CodeService;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule ;

class RegisterController extends Controller
{
    public function __construct(){
        $this->middleware('guest')->except('code');
    }
    public function index()
    {
        return view('account.register');
    }


    public function store(Request $request,User $user)
    {
        // dd($request->all());

        $request->validate([
            'code' =>['required',new VerificationCodeRule($request->account)],
            'account' =>['required',$this->accountValidate(),Rule::unique('users',$this->username())],
            'password' =>['required','confirmed'],
        ],['code.required'=>'验证码不能为空']);

        $user->password=$request->password;
        $user[$this->username()]=$request->account;
        $user->name=$request->name;
        $user->save();
        Auth::login($user);
        return response()->json(['message' => '登录成功']);
    }
    public function code(Request $request,CodeService $codeService){


        $request->validate([
            'account' =>['required',$this->accountValidate(),Rule::unique('users',$this->username())],
            'captcha' =>['required','captcha'],
        ]);
            $codeService->send($request->account);
            return response()->json(['message' => '验证码发送成功']);
    }
}
