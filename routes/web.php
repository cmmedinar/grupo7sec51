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
    return view('/layouts/master');
});

Route::get('/producto', function () {
    return view('/producto');
});

Route::get('/contacto/{nombre?}', function ($nombre="x") {
    return view('contacto',array(
        "nombre" => $nombre
    ));
});
