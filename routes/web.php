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
    return view('welcome');
});

Route::get('/teste', function () {
    return view('layouts.sb-admin');
});

Auth::routes();

Route::middleware(['auth', 'winhappy'])->group(function () {

    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('filas', 'FilaController')->middleware('v_perfil');
    Route::resource('filalideres', 'FilaLiderController')->middleware('v_perfil');
    Route::resource('perfil', 'UserController');
    Route::get('iniciar','TransacaoController@t_inicial');
    Route::post('set_arquivo', 'TransacaoController@set_comprovante');
    Route::get('arquivo-{id}','TransacaoController@download')->name('download');
    Route::get('recebidas', 'TransacaoController@show_rec')->name('trecebidas');
    Route::get('efetuadas', 'TransacaoController@show_dep')->name('tefetuadas');
    Route::post('liberar', 'TransacaoController@liberar_nivel1')->name('liberar01');

    
});

Route::resource('banco', 'BancoController');

// Route::get('/banco', 'UserController@banco_index')->name('banco');
// Route::post('/banco', 'UserController@banco_create')->name('banco_create');
// Route::post('/banco/{id}', 'UserController@banco_update')->name('banco_update');

    


