<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//Route::get('/cursos/{id}', 'CursosController@show');

Route::get('/meus-dados', 'MeusDadosController@index');

Route::get('/meus-dados/{id}', 'MeusDadosController@edit');

Route::get('/assinatura', 'MinhaAssinaturaController@index');
Route::resource('/cursos', 'CursosController');