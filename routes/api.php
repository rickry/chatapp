<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::prefix('v1')->group(function () {
Route::post('login', 'Api\LoginController@login')->name('auth.login');
Route::post('logout', 'Api\LoginController@logout');
Route::post('register', 'Api\RegisterController@apiRegister');

Route::middleware('auth:api')->group(function () {
    Route::resource("message", 'MessagesController')->except([
        'edit', 'create'
    ]);

    Route::resource("users", 'UsersController')->except([
        'edit', 'create'
    ]);


});
//});
