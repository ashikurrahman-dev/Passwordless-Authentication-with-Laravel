<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('home');
})->name('home');

// login
Route::get('/auth/login', [LoginController::class, 'index'])
    ->name('auth.login')
    ->middleware('guest');
Route::post('/auth/login', [LoginController::class, 'store'])->middleware('guest');

//register
Route::get('/auth/register', [RegisterController::class, 'index'])
    ->name('auth.register')
    ->middleware('guest');
Route::post('/auth/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/auth/session/{user:email}', [LoginController::class, 'session'])
    ->name('auth.session')
    ->middleware('guest', 'signed');

Route::get('/auth/logout', LogoutController::class)->name('auth.logout');