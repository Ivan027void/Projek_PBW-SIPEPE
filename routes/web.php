<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\DokumenControler;
use App\Http\Controllers\PenelitianController;

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
    return view('Landingpage');
});

Route::get('/detailMahasiswa', function () {
    return view('mahasiswa/detailMahasiswa');
});

Route::get('/penelitian', [App\Http\Controllers\PenelitianController::class, 'index'])->name('penelitian.index');
Route::get('/penelitian/{id}', [App\Http\Controllers\PenelitianController::class, 'show'])->name('penelitian.show');


Route::get('/pengajuan', function () {
    return view('mahasiswa/pengajuan');
});

Route::get('/pengajuan', [App\Http\Controllers\PengajuanController::class, 'index'])->name('pengajuan.index');
Route::post('/pengajuan', [App\Http\Controllers\PengajuanController::class, 'store'])->name('pengajuan.store');

Route::get('/upload-dokumen', [App\Http\Controllers\DokumenController::class, 'create'])->name('dokumen.create');
Route::post('/upload-dokumen', [App\Http\Controllers\DokumenController::class, 'store'])->name('dokumen.store');


Route::get('/home', [HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});



Route::post('/dokumen/delete', [DokumenController::class, 'deleteDokumen'])->name('dokumen.delete');
