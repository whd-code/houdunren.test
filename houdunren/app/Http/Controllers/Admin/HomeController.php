<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Route;

class HomeController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function setting(){
        // dd(Route::currentRouteName());
    //   dd(  Route_class());
        return view('admin.setting');
    }
}
