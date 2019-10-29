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
})->Middleware('userGuest');

Auth::routes();

Route::get('/cargaDeProductos', 'ProductsController@create')->Middleware('userAdmin');
Route::post('/productos', 'ProductsController@store')->Middleware('userAdmin');
Route::patch('/productos', 'ProductsController@update')->Middleware('userAdmin');

Route::get('/admin', function () {
    return view('admin');
})->Middleware('userAdmin');

Route::get('/listadoDeUsuarios', 'UserController@index')->Middleware('userAdmin');
Route::get('/listadoDeProductos', 'ProductsController@listadoAdmin')->Middleware('userAdmin');
