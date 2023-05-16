<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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
    Route::post('/login', [LoginController::class, 'store'])->name('ceklogin');
    Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');
    // Route::get('/register', [LoginController::class, 'show'])->name('register');
    // Route::post('/store_register', [LoginController::class, 'store_register'])->name('store_register');
});

Route::group(['prefix' => ''], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    // Route::get('/news', [HomeController::class, 'news'])->name('news');
    Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/news/{slug}', [HomeController::class, 'newsbySlug'])->name('newsbySlug');
});

Route::prefix('admin')->middleware(['isLogin'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
});

Route::prefix('berita')->middleware(['isLogin'])->group(function () {
    Route::get('/', [BeritaController::class, 'index'])->name('berita');
    Route::get('/list', [BeritaController::class, 'list'])->name('berita.list');
    Route::get('/create', [BeritaController::class, 'create'])->name('berita.create');
    Route::post('/store', [BeritaController::class, 'store'])->name('berita.store');
    Route::get('/show/{id}', [BeritaController::class, 'show'])->name('berita.show');
    Route::get('/edit/{id}', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::POST('/update/{id}', [BeritaController::class, 'update'])->name('berita.update');
});

Route::prefix('user')->middleware(['isLogin'])->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('user');
    Route::get('/list', [UserController::class, 'list'])->name('user.list');
    Route::get('/create', [UserController::class, 'create'])->name('user.create');
    Route::get('/store', [UserController::class, 'store'])->name('user.store');
});
