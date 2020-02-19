<?php

use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
//    Route::post('login', 'Auth\LoginController@login')->name('auth.login');

Route::post('login', 'AuthController@login');
Route::post('logout', 'AuthController@logout');
Route::post('register', 'AuthController@register');

Route::middleware('auth:api')->group(function () {
    Route::resource("message", 'MessagesController')->except([
        'edit', 'create'
    ]);
});
//});
