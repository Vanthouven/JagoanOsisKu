<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

// Form & proses login
Route::get('/login',  [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Logout
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Contoh route yang butuh autentikasi
Route::middleware('auth:osis')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});
