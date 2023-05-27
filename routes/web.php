<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::group(['prefix' => 'auth', 'namespace' => 'App\Http\Controllers\Auth'], function () {
    Route::group(['middleware' => ['guest']], function () {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('auth.register.show');
        Route::post('/register', 'RegisterController@register')->name('auth.register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('auth.login.show');
        Route::post('/login', 'LoginController@login')->name('auth.login.perform');
    });

    Route::group(['middleware' => ['auth']], function () {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('auth.logout.perform');
    });
});


Route::group(['middleware' => ['auth'], 'prefix' => 'administrator', 'namespace' => 'App\Http\Controllers\Backend', 'as' => 'backend.'], function () {
    Route::get('/', function () {
        return view('backend.dashboard');
    })->name('dashboard');

    Route::group([], function () {
        Route::resource('/user', 'UserController');
        Route::resource('/device', 'DeviceController', [
            "except" => ["show"]
        ]);
    });

    Route::resource('/sapi', 'SapiController');

    Route::post('/sapi/{sapi}/catatan/store', 'CatatanController@store')->name('catatan.store');
    Route::delete('/sapi/{sapi}/catatan/{catatan}/destroy', 'CatatanController@destroy')->name('catatan.destroy');
    Route::post('/sapi/{sapi}/vaksin/store', 'VaksinController@store')->name('vaksin.store');
    Route::delete('/sapi/{sapi}/vaksin/{vaksin}/destroy', 'VaksinController@destroy')->name('vaksin.destroy');
});
