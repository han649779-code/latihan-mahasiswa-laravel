<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

// Latihan sebelumnya
Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/kalkulator/segitiga', [KalkulatorController::class, 'segitiga']);
Route::post('/kalkulator/segitiga', [KalkulatorController::class, 'hitungSegitiga']);

// Bab Sistem Templating
Route::get('/dashboard', [DashboardController::class, 'home']);
Route::get('/gallery', [DashboardController::class, 'gallery']);
Route::get('/about', function () {
    return "<h2>Ini adalah laman About</h2>";
});