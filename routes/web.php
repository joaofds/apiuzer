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
    return view('clients.home');
})->name('home');

Route::get('/clientes/delete/{id}', 'AppClientController@destroy')->name('clientes.destroy');
Route::resource('clientes', 'AppClientController')->except(['destroy']);
