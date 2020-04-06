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

Route::group(['middleware' => ['winhappy']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
});

Route::get('/banco', 'UserController@banco_index')->name('banco');
    Route::post('/banco', 'UserController@banco_create')->name('banco_create');
    Route::post('/banco/{id}', 'UserController@banco_update')->name('banco_update');
    

