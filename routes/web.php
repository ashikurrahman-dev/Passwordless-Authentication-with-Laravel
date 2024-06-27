<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/auth/login', [LoginController::class, 'index'])
    ->name('auth.login')
    ->middleware('guest');
Route::post('/auth/login', [LoginController::class, 'store'])->middleware('guest');

Route::get('/auth/session/{user:email}', [LoginController::class, 'session'])
    ->name('auth.session')
    ->middleware('guest', 'signed');
Route::get('/auth/logout', LogoutController::class)->name('auth.logout');