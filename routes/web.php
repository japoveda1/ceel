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
Route::get('/servicios', 'Servicios\ServiciosController@servicios')->name('servicios');
Route::get('/servicios/serviciosList', 'Servicios\ServiciosListController@serviciosList')->name('serviciosList');