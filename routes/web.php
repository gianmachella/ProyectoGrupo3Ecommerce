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

Route::get('/productos', function () {
    return view('productos');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::post('/registroExitoso', function () {
    return view('registroExitoso');
});

Route::get('/carrito', function () {
    return view('carrito');
});

Route::get('/cargaProductos', function () {
    return view('cargaProductos');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
