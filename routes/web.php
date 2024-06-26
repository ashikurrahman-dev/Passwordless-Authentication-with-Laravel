<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/login', [LoginController::class, 'index'])->name('auth.login');
Route::post('/auth/login', [LoginController::class, 'store']);