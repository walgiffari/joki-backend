<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JokiController;
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

Route::get('/login', [LoginController::class, 'index_login'])->middleware('guest')->name('login');
Route::post('/login/auth', [LoginController::class, 'auths'])->name('auths');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// System Login //

// Dashboard //

Route::get('/dashboard', [DashboardController::class, 'index_dashboard'])->middleware('auth')->name('dashboard');

// Dashboard // 

// Joki //
Route::get('/super-admin/joki-master', [JokiController::class, 'index_joki'])->middleware('auth')->name('index_joki');
Route::get('/super-admin/joki-master/tambah-joki', [JokiController::class, 'tambah_joki'])->middleware('auth')->name('tambah_joki');
Route::post('/super-admin/joki-master/store', [JokiController::class, 'joki_store'])->middleware('auth')->name('joki_store');
Route::get('/super-admin/joki-master/{slug}', [JokiController::class, 'ubah_joki'])->middleware('auth')->name('ubah_joki');
Route::get('/super-admin/joki-master/{slug}/store', [JokiController::class, 'ubah_joki_store'])->middleware('auth')->name('ubah_joki_store');
Route::get('/super-admin/joki-master/{id}', [JokiController::class, 'hapus_joki'])->middleware('auth')->name('hapus_joki');
// Joki //

// Chat //
Route::get('/room-chat', [ChatController::class, 'room_chat'])->middleware('auth')->name('room_chat');
// Chat //