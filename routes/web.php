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

use App\Messages;
use Carbon\Carbon;
use http\Client\Request;

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
Route::get('test', function (){
    $count=Messages::select('created_at')->whereBetween('created_at', [Carbon::now()->subDays(30), Carbon::now()])->count();
    dd($count);
});

Route::post('upload', function (){
    request()->logo->store('logos');
})->name('upload.store');
