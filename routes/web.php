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

Route::resource('formulario', 'UsuariaController');
Route::resource('contato', 'ContatoController');
Route::resource('endereco', 'EnderecoController');
Route::resource('guardiao', 'GuardiaoController');
Route::resource('denuncia', 'DenunciaController');
Route::resource('audio', 'AudioController');
Route::resource('localizacao', 'LocalizacaoController');


Route::get('/prox_form', 'Auth\RegisterController@prox_form')->name('prox_form');

Route::get('/home_adm', 'UsuariaController@adm_home')->name('home_adm');

/*Route::group(['middleware' => 'web'], function () {
    Route::resource('formulario', 'UsuariaController');
    });

