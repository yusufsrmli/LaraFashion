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

    Route::group(['prefix'=>'colors'],function (){
        Route::get('/create', 'Cms\colorsController@index')->name('Cms.news.color');
        Route::get('/list','Cms\colorsController@list')->name('Cms.list.color');
        Route::post('/create_color','Cms\colorsController@create_color')->name('Cms.news.create_color');

    });

    Route::group(['prefix'=>'category'],function (){
        Route::get('/create', 'Cms\categoryController@index')->name('Cms.news.category');
        Route::get('/list','Cms\categoryController@list')->name('Cms.list.category');
        Route::post('/create_category','Cms\categoryController@create_category')->name('Cms.news.create_category');
    });

    Route::group(['prefix'=>'size'],function (){
        Route::get('/create','Cms\sizeController@index')->name('Cms.news.size');
        Route::get('/list','Cms\sizeController@list')->name('Cms.list.size');
        Route::post('/create_size','Cms\sizeController@create_size')->name('Cms.news.create_size');

    });

    Route::group(['prefix'=>'brand'],function(){
        Route::get('/create','Cms\brandController@index')->name('Cms.news.brand');
        Route::get('/list','Cms\brandController@list')->name('Cms.list.brand');
        Route::post('/brand_create','Cms\brandController@create_brand')->name('Cms.news.create_brand');
    });

    Route::group(['prefix'=>'contact'],function(){
        Route::get('/create','Cms\contactController@index')->name('Cms.news.contact');
        Route::get('/list','Cms\contactController@list')->name('Cms.list.contact');
        Route::post('/create_contact','Cms\contactController@create_contact')->name('Cms.news.create_contact');

    });

    Route::group(['prefix'=>'product'],function (){
        Route::get('/create','Cms\productController@index')->name('Cms.news.product');
        Route::get('/list','Cms\productController@list')->name('Cms.list.product');
        Route::post('/product_create' , 'Cms\productController@create_product')->name('Cms.news.create_product');
    });


});


Route::get('/home', 'HomeController@index')->name('home');
