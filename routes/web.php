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

Route::get('/listagem-usuario', 'UserController@listUser');

Route::get('/usuarios', 'Form\\TestController@listAllUsers')->name('users.listAll');
#deixar rotas com palavras fixas para cimia se nao vai dar conflito no roteamento
Route::get('/usuarios/novo', 'Form\\TestController@formAddUser')->name('users.addUser'); 
Route::get('/usuarios/editar/{user}', 'Form\\TestController@formEditUser')->name('users.list');
Route::get('/usuarios/{user}', 'Form\\TestController@listUsers')->name('users.list');


Route::post('/usuarios/store', 'Form\\TestController@storeUser')->name('users.store');


Route::put('/usuarios/edit/{user}', 'Form\\TestController@edit')->name('users.edit');

