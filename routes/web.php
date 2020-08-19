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





Auth::routes();
Route::get('/', 'Front\indexController@index')->name('Front.index');
Route::get('/archive/{id}', 'Front\indexController@archive')->name('Front.index.archive');
Route::get('/shop','Front\shopController@index')->name('Front.shop');
Route::post('/search','Front\searchController@search')->name('Front.search');

Route::group(['prefix'=>'shoppingcart'],function (){
   Route::get('/view','Front\shoppingcartController@index')->name('Front.shoppingcart');
   Route::get('/add/{id}','Front\shoppingcartController@add')->name('Front.add_shoppingcart');


});

Route::get('exit',function (){\Illuminate\Support\Facades\Auth::logout();
return redirect()->route('login');
})->name('log_out');

/*Route::group(['prefix'=>'panel','middleware'=>'auth'],function (){
    Route::get('/',function (){
        return view('CMS.home');
    })->name('CMS.home');
});*/

Route::get('/panel','Auth\adminController@index')->name('Cms.home');

    Route::group(['prefix'=>'colors'],function (){
        Route::get('/create', 'Cms\colorsController@index')->name('Cms.news.color');
        Route::get('/list','Cms\colorsController@list')->name('Cms.list.color');
        Route::post('/create_color','Cms\colorsController@create_color')->name('Cms.news.create_color');
        Route::get('/edit/{id}','Cms\colorsController@edit')->name('Cms.edits.color');
        Route::post('/edit_color/{id}','Cms\colorsController@edit_color')->name('Cms.edits.edit_color');
        Route::get('/delete/{id}','Cms\colorsController@remove')->name('Cms.edits.delete_color');

    });

    Route::group(['prefix'=>'category'],function (){
        Route::get('/create', 'Cms\categoryController@index')->name('Cms.news.category');
        Route::get('/list','Cms\categoryController@list')->name('Cms.list.category');
        Route::post('/create_category','Cms\categoryController@create_category')->name('Cms.news.create_category');
        Route::get('/edit/{id}','Cms\categoryController@edit')->name('Cms.edits.category');
        Route::post('/edit_category/{id}','Cms\categoryController@edit_category')->name('Cms.edits.edit_category');
        Route::get('/delete/{id}','Cms\categoryController@remove')->name('Cms.edits.delete_category');
    });

    Route::group(['prefix'=>'size'],function (){
        Route::get('/create','Cms\sizeController@index')->name('Cms.news.size');
        Route::get('/list','Cms\sizeController@list')->name('Cms.list.size');
        Route::post('/create_size','Cms\sizeController@create_size')->name('Cms.news.create_size');
        Route::get('/edit_size/{id}','Cms\sizeController@edit')->name('Cms.edits.size');
        Route::post('/edit_size/{id}','Cms\sizeController@edit_size')->name('Cms.edits.edit_size');
        Route::get('/delete/{id}','Cms\sizeController@remove')->name('Cms.edits.delete_size');

    });

    Route::group(['prefix'=>'brand'],function(){
        Route::get('/create','Cms\brandController@index')->name('Cms.news.brand');
        Route::get('/list','Cms\brandController@list')->name('Cms.list.brand');
        Route::post('/brand_create','Cms\brandController@create_brand')->name('Cms.news.create_brand');
        Route::get('/edit/{id}','Cms\brandController@edit')->name('Cms.edits.brand');
        Route::post('/edit_brand/{id}','Cms\brandController@edit_brand')->name('Cms.edits.edit_brand');
        Route::get('/delete/{id}','Cms\brandController@remove')->name('Cms.edits.delete_brand');
    });

    Route::group(['prefix'=>'contact'],function(){
        Route::get('/create','Cms\contactController@index')->name('Cms.news.contact');
        Route::get('/list','Cms\contactController@list')->name('Cms.list.contact');
        Route::post('/create_contact','Cms\contactController@create_contact')->name('Cms.news.create_contact');
        Route::get('/edit/{id}','Cms\contactController@edit')->name('Cms.edits.contact');
        Route::post('/edit_contact/{id}','Cms\contactController@edit_contact')->name('Cms.edits.edit_contact');
        Route::get('/delete/{id}','Cms\contactController@remove')->name('Cms.edits.delete_contact');

    });

    Route::group(['prefix'=>'product'],function (){
        Route::get('/create','Cms\productController@index')->name('Cms.news.product');
        Route::get('/list','Cms\productController@list')->name('Cms.list.product');
        Route::post('/create_product' , 'Cms\productController@create_product')->name('Cms.news.create_product');
        Route::get('/edit/{id}','Cms\productController@edit')->name('Cms.edits.product');
        Route::post('/edit_product/{id}','Cms\productController@edit_product')->name('Cms.edits.edit_product');
        Route::get('/delete/{id}','Cms\productController@remove')->name('Cms.edits.delete_product');
    });





/*Route::get('/home', 'HomeController@index')->name('home');*/
