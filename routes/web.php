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

Route::resource('instituciones', 'institucion_controller');
Route::resource('bancos', 'banco_controller');
Route::resource('departamentos', 'departamento_controller');
Route::resource('personas', 'persona_controller');
Route::resource('residencias', 'residencia_controller');
Route::resource('subsidios', 'subsidio_controller');

