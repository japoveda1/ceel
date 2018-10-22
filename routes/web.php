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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Vistas Modulo Servicios
Route::get('/home/servicios', 'Servicios\ServiciosController@show')->name('servicios');
Route::get('/home/servicios/listar', 'Servicios\ServiciosListarController@show')->name('serviciosListar');
Route::get('/home/servicios/crearEditar/{id}', 'Servicios\ServiciosCrearEditarController@show')->name('serviciosCrearEditar');