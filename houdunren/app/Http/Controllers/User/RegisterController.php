<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\ApiController;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class RegisterController extends ApiController
{
    public function store (Request $request,User $user)
    {

              $post= $request->validate( [
                'email' =>['sometimes','email'],
                'name' =>['required','min:3','max:20'],
                'password' =>['required','min:5','max:20','confirmed']
            ] ,['name.required'=>'昵称不能为空']);

            $user->password=$request->password;
            $user->name=$request->name;
            $user->email=$request->email;
            $user->save();
        return $user;
    }
}
