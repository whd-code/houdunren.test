<?php
namespace App\Services;

use App\Notifications\VerificationCodeNotification;
use App\User;
use Cache;

class CodeService
{
    // 验证方式 手机 或 邮箱
    public function send($account){
        $this->account = $account;
        $code=mt_rand(1000,9999);
        call_user_func([$this ,$this->action($account)],$account,$code);

        Cache::put($this->key($account),$code,now()->addminutes(20));
    }
    protected function key($account){
        return md5('verification-code'. $account);
    }
    public function check($account,$value){
        return Cache::get($this->key($account))==$value;
    }

    public function action($account){
        if(filter_var($account,FILTER_VALIDATE_EMAIL)) {
            return "email";
        }

        if(preg_match('/^1\d{10}$/i',$account)){
            return "mobile";
        }
    }


    public function email($account,$code){

        $user=new User();
        $user->email=$this->account;
        $user->notify(new VerificationCodeNotification($code));
    }
    public function mobile($account,$code){

    }

}
