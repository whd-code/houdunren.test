@extends('layout.account')

@section('title','会员登录')

@section('content')
<form action="{{ route('login.store' )}}" method="post">
    @csrf


        <div class="card shadow">
            <div class="card-header">
                会员登录
            </div>


            <div class="card-body">

                <x-form title="账号" name="account" placeholder="请输入手机号或者邮箱" ></x-input>
                <x-form type="password" title="密码" name="password" placeholder="请输入登录密码" ></x-input>
                <x-form theme="captcha"  ></x-input>
                    <label for="remember">
                        <input type="checkbox" name="remember" />记住我
                    </label>

             </div>

            <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                 <button class="btn btn-primary">登录</button>
                 <div class="h6 mt-2">
                     <a href="{{route('register')}}">注册</a> |
                     <a href="">找回密码</a>
                 </div>
            </div>
        </div>


</form>

@endsection
