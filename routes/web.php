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

Route::middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index');
    Route::resource("message", 'MessagesController')->except([
        'edit', 'create'
    ]);

    Route::resource("users", 'UsersController')->except([
        'edit', 'create'
    ]);

    Route::get('/check', 'UsersController@userOnlineStatus');

});
