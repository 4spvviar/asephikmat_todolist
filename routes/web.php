<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\TugasController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/login', [UserController::class, 'showLogin'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'regist'])->name('regist');
Route::post('/register', [UserController::class, 'register'])->name('regist.store');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::middleware(['aut'])->group(function () {
    Route::get('/', [TugasController::class, 'index'])->name('dashboard');
    Route::post('/tugas', [TugasController::class, 'store'])->name('tugas.store');
    Route::patch('/tugas/{id}/toggle', [TugasController::class, 'tombol'])->name('tugas.toggle');
    Route::delete('/tugas/{id}', [TugasController::class, 'hapus'])->name('hapus');
});
