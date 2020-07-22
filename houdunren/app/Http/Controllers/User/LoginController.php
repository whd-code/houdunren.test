<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\ApiController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends ApiController
{
    public function store(Request $request)
    {
        // return 'bac';

        if (Auth::attempt($request->only('email', 'password'))) {
            // return 'ok';
            // Authentication passed...
            // return redirect()->intended('dashboard');
            // return 11111;
            return Auth::user()->createToken('auth')->plainTextToken;

            // return auth()->user();
        }
    }
}
