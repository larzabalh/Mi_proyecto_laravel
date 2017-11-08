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


Route::get('/configuracion/bank','BankController@directory')->name('bank');
Route::get('/configuracion/bank-alta','BankController@formulario')->name('bank-alta');
Route::post('/configuracion/bank-alta','BankController@alta')->name('bank-alta-post');
Route::get('/configuracion/bank/editar/{id}', 'BankController@editar')->name('editarbank');



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
