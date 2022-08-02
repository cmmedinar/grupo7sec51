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


Route::get('/prod','ProductoController@menuprod');
Route::get('/creaprod','ProductoController@creaprod');
Route::get('/modprod','ProductoController@modprod');
Route::get('/eliprod','ProductoController@eliprod');


Route::get('/suc','SucursalController@menusuc');
Route::get('/creasuc','SucursalController@creasuc');
Route::get('/modsuc','SucursalController@modsuc');
Route::get('/elisuc','SucursalController@elisuc');

Route::get('/cat','CategoriaController@menucat');
Route::get('/creacat','CategoriaController@creacat');
Route::get('/modcat','CategoriaController@modcat');
Route::get('/elicat','CategoriaController@elicat');


