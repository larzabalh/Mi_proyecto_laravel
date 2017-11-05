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


Route::get('/configuracion/bank','BankController@Directory');
Route::post('/configuracion/bank/alta','BankController@alta');
Route::get('/configuracion/bank/editar/{id}', 'BankController@editar')->name('editarbank');



Route::get('/', function () {
    return view('welcome');
});
