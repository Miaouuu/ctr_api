<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::middleware('auth')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('logout', 'Auth\AuthController@logout')->name('logout');
});

// Authentication routes...
Route::get('login', 'Auth\AuthController@showLogin')->middleware('guest')->name('login');
Route::post('login', 'Auth\AuthController@postLogin')->name('doLogin');


Auth::routes(['register' => false]);
