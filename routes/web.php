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

Route::get('/inicio', function () {
    return view('index');
});

Route::get('/historia', function () {
    return view('historia');
});

Route::get('/faqs', function () {
    return view('faqs');
});

Route::get('/productos', 'ProductsController@index');

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/registroExitoso', function () {
    return view('registroExitoso');
});

Route::get('/carrito', function () {
    return view('carrito');
});

Auth::routes();

Route::get('/cargaDeProductos', 'ProductsController@create');
Route::post('/productos', 'ProductsController@store');
Route::patch('/productos', 'ProductsController@update');


Route::get('/home', 'HomeController@index')->name('home');
