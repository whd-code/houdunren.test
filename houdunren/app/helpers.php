<?php

function user_info($name=null){
    $user=auth()->user();
    return $name ? $user['name'] : $user ;
}

function Route_class (){
    return str_replace('.', '-', Route::currentRouteName());
}
