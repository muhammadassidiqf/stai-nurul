<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisiMisiController;
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

Route::group(['prefix' => ''], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    // Route::get('/news', [HomeController::class, 'news'])->name('news');
    Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/students', [HomeController::class, 'students'])->name('students');
    Route::get('/academic', [HomeController::class, 'academic'])->name('academic');
    Route::get('/history', [HomeController::class, 'history'])->name('history');
    Route::get('/visi_misi', [HomeController::class, 'visi_misi'])->name('visi_misi');
    Route::get('/news/{slug}', [HomeController::class, 'newsbySlug'])->name('newsbySlug');
});

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');

    Route::prefix('berita')->group(function () {
        Route::get('/', [BeritaController::class, 'index'])->name('admin.berita');
        Route::get('/list', [BeritaController::class, 'list'])->name('admin.berita.list');
        Route::get('/create', [BeritaController::class, 'create'])->name('admin.berita.create');
        Route::post('/store', [BeritaController::class, 'store'])->name('admin.berita.store');
        Route::get('/show/{id}', [BeritaController::class, 'show'])->name('admin.berita.show');
        Route::get('/edit/{id}', [BeritaController::class, 'edit'])->name('admin.berita.edit');
        Route::POST('/update/{id}', [BeritaController::class, 'update'])->name('admin.berita.update');
    });

    Route::get('/visi-misi/list', [VisiMisiController::class, 'list'])->name('visi-misi.list');
    Route::resource('visi-misi', VisiMisiController::class);

    Route::prefix('user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('user');
        Route::get('/list', [UserController::class, 'list'])->name('user.list');
        Route::get('/create', [UserController::class, 'create'])->name('user.create');
        Route::get('/store', [UserController::class, 'store'])->name('user.store');
    });
});

require __DIR__ . '/auth.php';
