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

Route::get('/', function () {return view('welcome');});

Route::resource('usuarios', 'Form\\TestController')
    ->names('user')->parameters(['usuarios' => 'user']);

//Route::get('/listagem-usuario', 'UserController@listUser');


Route::get('/posts', 'PostController@showForm');
Route::post('/posts/debug', 'PostController@debug')->name('debug');

// Http verbs supported by laravel router
// Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);

#multiverbs route
/**
 * Route::match(['get', 'post'], '/', function () {
 * //
 * });
 * 
 * Route::any('/', function () {
 *  //
 * });
 * 
 */

/*
fallback
Route::fallback(function () {
    //
});

*/