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

Route::get('/prod', function () {
    return view('/prod');
});
Route::get('/ingresar', function () {
    return view('/ingresar-login');
});
Route::get('/registrar', function () {
    return view('/registrar-login');
});
Route::get('/buscar', function () {
    return view('/buscar-producto');
});