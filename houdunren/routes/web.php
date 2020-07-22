<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Model\Package;
use App\Notifications\VerificationCodeNotification;
use App\Services\CodeService;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/', function () {
    // return view('welcome');
    // return Package::all();
    // dd(auth()->user()->toarray());
    // return '首页123';
    return view('home');
})->name('home');

Route::get('mail',function () {
    app(CodeService::class)->send("whd@qq.com");
});

// 'middleware'=>'guest'

Route::group(['namespace'=>'Account'], function (){
    Route::resource('login','LoginController')->only(['index','store'])->names(['index'=>'login']);
    Route::get('logout','LoginController@logout')->name('logout');

    Route::resource('register','RegisterController')->only(['index','store'])->names([
        'index'=>'register'
    ]);

    Route::post('register/code','RegisterController@code')->middleware(['throttle:10,1']);
});

Route::group(['namespace'=>'Common','prefix' =>'common','as'=>'common.'],function (){
    Route::post('code','VerificationCodeController@send')->name('verification.code');
});

Route::group(['namespace'=>'Admin','prefix' =>'Admin','middleware'=>['auth'],'as'=>'admin.'],function (){
    Route::get('/','HomeController@index')->name('index');
    Route::get('setting','HomeController@setting')->name('setting');

    // Route::resource('modules','ModulesController');
    Route::get('modules','ModulesController@index')->name('modules.index');
    Route::get('modules/install/{name}','ModulesController@install')->name('modules.install');
    Route::delete('modules/uninstall/{modules:name}','ModulesController@uninstall')->name('modules.uninstall');

    Route::resource('package','PackageController');
    Route::resource('group','GroupController');
});
