<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
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

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::get('/register', [LoginController::class, 'show'])->name('register');
    Route::post('/login', [LoginController::class, 'store'])->name('ceklogin');
    Route::post('/store_register', [LoginController::class, 'store_register'])->name('store_register');
    Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');
});

Route::group(['prefix' => ''], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
});

Route::prefix('admin')->name('admin.')->middleware(['isLogin'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
});


// Route::view('/admin', 'content/content-admin');
// Route::view('/auth', 'content/auth');
// Route::view('/register', 'content/register');
