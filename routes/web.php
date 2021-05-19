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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::view('/login', 'login')->name('login');
Route::post('/login', 'AuthController@login')->name('login.submit');

Route::view('/register', 'register')->name('register')->name('register');
Route::post('/register', 'AuthController@register')->name('register.submit');

Route::get('/logout', 'AuthController@logout')->name('logout');
