<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/', [LoginController::class, 'login']);
Route::get('/index', [LoginController::class, 'index'])->name('index');
Route::get('/forgot-password', [LoginController::class, 'forgotPassword'])->name('forgot.password');