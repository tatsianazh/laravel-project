<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'IndexController@index')->name('index');

//Route::get('/product');



Route::namespace('Admin')->middleware(['auth'])->prefix('admin')->name('admin.')->group(function(){
    Route::get('/', function(){
        return view('admin.dashboard');
    })->name('dashboard');
    Route::resource('/category', 'CategoryController');
    Route::resource('/product', 'ProductController');
    Route::resource('/{product}/photo', 'PhotoController');
});


Route::get('/catalog/{category?}', 'ShopController@category')->name('catalog');
Route::get('/catalog/{category}/{product}', 'ShopController@product')->name('product');

//Route::get('/cart', 'CartController@index');
//Route::post('/cart', 'CartController@add');

//Route::get('/order/{order?}', 'OrderController@index');
//Route::get('/order', 'OrderController@index');



Auth::routes();
//
Route::get('/home', 'HomeController@index')->name('home');
