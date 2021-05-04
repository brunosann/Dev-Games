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

Route::middleware('auth')->get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    echo 'fazer login';
})->name('login');

Route::view('/register', 'register')->name('register');
Route::post('/register', 'AuthController@register')->name('register.submit');
