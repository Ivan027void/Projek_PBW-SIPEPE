<?php

use Illuminate\Support\Facades\Route;
use app\Http\Middleware\CheckRoleMiddleware;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});

Route::get('/mahasiswa/dashboard', [MahasiswaController::class, 'dashboard'])
    ->middleware('auth', 'role:Mahasiswa');
    
Route::get('/dosen/dashboard', [DosenController::class, 'dashboard'])
    ->middleware('auth', 'role:Dosen');
    
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
    ->middleware('auth', 'role:Admin');

