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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/cadastro', 'PessoasController@cadastro')->name('cadastro');

Route::post('/save', 'PessoasController@store')->name('store');

Route::get('/cadastro/ver/{id}', 'PessoasController@show')->name('show');

Route::get('/cadastro/editar/{id}', 'PessoasController@edit');

Route::put('/cadastro/editar/{id}', 'PessoasController@update')->name('alterar_cadastro');