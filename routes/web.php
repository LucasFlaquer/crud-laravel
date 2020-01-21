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

Route::group(['namespace'=>'Form'], function() {
    Route::get('/usuarios', 'TestController@listAllUsers')->name('users.listAll');
    #deixar rotas com palavras fixas para cimia se nao vai dar conflito no roteamento
    Route::get('/usuarios/novo', 'TestController@formAddUser')->name('users.addUser'); 
    Route::get('/usuarios/editar/{user}', 'TestController@formEditUser')->name('users.editar');
    Route::get('/usuarios/{user}', 'TestController@listUsers')->name('users.list');


    Route::post('/usuarios/store', 'TestController@storeUser')->name('users.store');


    Route::put('/usuarios/edit/{user}', 'TestController@edit')->name('users.edit');

    Route::delete('/usuarios/destroy/{user}', 'TestController@destroy')->name('users.destroy');
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/listagem-usuario', 'UserController@listUser');

