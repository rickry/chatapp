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

use App\Mail\sendRegisterToken;
use App\User;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);
Route::get('confirm/user/{register_token}', 'UsersController@verifyToken')->name("verify.email");

Route::middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index');
    Route::resource("message", 'MessagesController')->except([
        'edit', 'create'
    ]);

    Route::resource("users", 'UsersController')->except([
        'edit', 'create'
    ]);

    Route::get('/online', 'UsersController@userOnlineStatus');

});
Route::get('test', function () {
    $user = new stdClass;
    $user->name = "rick";
    $user->email = "r.stoit@gmail.com";
    $user->register_token = "kaas";
    return Mail::to($user->email)->send(new sendRegisterToken($user));
});
