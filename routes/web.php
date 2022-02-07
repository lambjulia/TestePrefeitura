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

Route::get('/index', 'PessoasController@index')->name('home');

Route::get('/cadastro', 'PessoasController@cadastro')->name('cadastro');

Route::post('/save', 'PessoasController@store')->name('store');

Route::get('/cadastro/ver/{id}', 'PessoasController@show')->name('show');

Route::get('/cadastro/edit/{id}', 'PessoasController@edit')->name('edit');

Route::post('/cadastro/{id}', 'PessoasController@update')->name('alterar_cadastro');

Route::delete('/delete/{id}',  'PessoasController@delete');


Route::get('/cadastroprot', 'ProtocoloController@create')->name('cadastro_protocolo');

Route::post('/saveprot', 'ProtocoloController@store')->name('store_protocolo');

Route::get('/cadastroprot/ver/{id}', 'ProtocoloController@show')->name('show_protocolo');

Route::get('/cadastroprot/edit/{id}', 'ProtocoloController@edit')->name('edit_protocolo');

Route::post('/cadastroprot/{id}', 'ProtocoloController@update')->name('alterar_protocolo');

Route::delete('/deleteprot/{id}',  'ProtocoloController@delete');