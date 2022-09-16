<?php

use App\Http\Controllers\LoginController;
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
    return view('welcome');
});

// System Login //

Route::get('/register', [LoginController::class, 'index_register'])->name('index_register');
Route::post('/register/store', [LoginController::class, 'register_store'])->name('register_store');

Route::get('/login', [LoginController::class, 'index_login'])->middleware('guest')->name('index_login');
Route::post('/login/auth', [LoginController::class, 'auths'])->name('auths');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// System Login //
