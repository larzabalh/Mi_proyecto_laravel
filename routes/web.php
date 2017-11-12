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
Route::post('/configuracion/bank','BankController@alta')->name('bank-alta-post');

Route::get('/configuracion/bank-editar/{id}', 'BankController@editar')->name('editarbank');
Route::delete('/configuracion/bank-editar/{id}', 'BankController@delete')->name('borrarbank');
Route::post('/configuracion/bank-editar/{id}', 'BankController@editar_grabar')->name('editarbank-post');

Route::resource('/configuracion/gasto', 'GastosController');
Route::resource('/configuracion/tipos_de_gastos', 'Tipo_de_gastoController');
Route::resource('/registros/registrodegastos', 'RegistrodeGastosController');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
