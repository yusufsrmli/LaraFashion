<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('exit',function (){\Illuminate\Support\Facades\Auth::logout();
return redirect()->route('login');
})->name('log_out');

Route::group(['prefix'=>'panel','middleware'=>'auth'],function (){
    Route::get('/',function (){
        return view('CMS.home');
    })->name('CMS.home');

    Route::group(['prefix'=>'news'],function (){
        Route::get('/color', 'CMS\colorsController@createColor')->name('CMS.news.color');
        Route::post('/create_color','Cms\colorsController@create_color')->name('Cms.news.create_color');

    });

});


Route::get('/home', 'HomeController@index')->name('home');
