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



Route::get('/consulta/prod','ProductoController@consultaprod');//vista busqueda producto x cod nom suc cat
Route::get('/consulta/prodAll','ProductoController@listaprod'); //listado de todos los productos
Route::get('/consulta/buscaxcod/{dato}','ProductoController@buscaxcod'); ////// Busqueda  /////
Route::get('/consulta/buscaxnom/{dato}','ProductoController@buscaxnom'); /////   de          
Route::get('/consulta/buscaxsuc/{dato}','ProductoController@buscaxsuc'); /////   Productos
Route::get('/consulta/buscaxcat/{dato}','ProductoController@buscaxcat'); /////   Por distintas categorias
Route::get('/prod','ProductoController@menuprod');//menu maestro productos
Route::get('/creaprod','ProductoController@creaprod');//formulario creacion productos
Route::post('/grabaprod','ProductoController@grabaprod');//graba datos producto nuevo


Route::get('/consulta/sucAll','SucursalController@listasuc');
Route::get('/suc','SucursalController@menusuc');
Route::get('/creasuc','SucursalController@creasuc');
Route::post('/grabasuc','SucursalController@grabasuc');

Route::get('/consulta/catAll','CategoriaController@listacat');
Route::get('/cat','CategoriaController@menucat');
Route::get('/creacat','CategoriaController@creacat');
Route::post('/grabacat','CategoriaController@grabacat');


