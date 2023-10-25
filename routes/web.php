<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\TentangController;
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
    Route::get('/academic/{slug}', [HomeController::class, 'academic'])->name('academic');
    Route::get('/academic/{staf}', [HomeController::class, 'staff_academic'])->name('staff_academic');
    Route::get('/struktur_organisasi', [HomeController::class, 'struktur_organisasi'])->name('struktur_organisasi');
    Route::get('/history', [HomeController::class, 'history'])->name('history');
    Route::get('/visi_misi', [HomeController::class, 'visi_misi'])->name('visi_misi');
    Route::get('/news/{slug}', [HomeController::class, 'newsbySlug'])->name('newsbySlug');
});

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::post('/image', [AdminController::class, 'storeImage'])->name('image.upload');

    Route::get('/berita/list', [BeritaController::class, 'list'])->name('berita.list');
    Route::resource('berita', BeritaController::class);

    Route::get('/visi-misi/list', [VisiMisiController::class, 'list'])->name('visi-misi.list');
    Route::resource('visi-misi', VisiMisiController::class);

    Route::get('/prodi/list', [ProdiController::class, 'list'])->name('prodi.list');
    Route::resource('prodi', ProdiController::class);

    Route::get('/sejarah/list', [SejarahController::class, 'list'])->name('sejarah.list');
    Route::resource('sejarah', SejarahController::class);

    Route::get('/tentang/list', [TentangController::class, 'list'])->name('tentang.list');
    Route::resource('tentang', TentangController::class);

    Route::get('/list', [UserController::class, 'list'])->name('user.list');
    Route::resource('user', UserController::class);
});

require __DIR__ . '/auth.php';
