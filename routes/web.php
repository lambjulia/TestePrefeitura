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

Route::get('/searchprot', 'HomeController@searchprot')->middleware('auth');

Route::get('/search', 'HomeController@search')->middleware('auth');

Route::get('/cadastro', 'RegistroController@create')->name('cadastrouser');

Route::post('/cadastro', 'RegistroController@store')->name('store_user');


Route::get('/index', 'PessoasController@index')->name('pessoas')->middleware('auth');

Route::get('/cadastro', 'GhostController@create')->name('cadastro');

Route::get('/cadastrop', 'PessoasController@cadastro')->name('cadastro')->middleware('auth');

Route::post('/save', 'PessoasController@store')->name('store')->middleware('auth');

Route::get('/cadastro/ver/{id}', 'PessoasController@show')->name('show')->middleware('auth');

Route::get('/cadastro/edit/{id}', 'PessoasController@edit')->name('edit')->middleware('auth');

Route::post('/cadastro/{id}', 'PessoasController@update')->name('alterar_cadastro')->middleware('auth');

Route::delete('/delete/{id}',  'PessoasController@delete')->middleware('auth');


Route::get('/cadastroprot', 'ProtocoloController@create')->name('cadastro_protocolo')->middleware('auth');

Route::post('/saveprot', 'ProtocoloController@store')->name('store_protocolo')->middleware('auth');

Route::get('/cadastroprot/ver/{numeroprot}', 'ProtocoloController@show')->name('showprot')->middleware('auth');

Route::get('/cadastroprot/edit/{numeroprot}', 'ProtocoloController@edit')->name('editprot')->middleware('auth');

Route::post('/cadastroprot/{numeroprot}', 'ProtocoloController@update')->name('alterar_protocolo')->middleware('auth');

Route::delete('/deleteprot/{numeroprot}',  'ProtocoloController@delete')->middleware('auth');

Route::get('/lista', 'ProtocoloController@index')->name('protocolo')->middleware('auth');



Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/{error?}', 'LoginController@login')->name('login');

Route::post('/', 'LoginController@autenticar')->name('login');

Route::get('/logout', 'LoginController@logout');





