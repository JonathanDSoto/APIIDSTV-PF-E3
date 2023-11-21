<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/', [LoginController::class, 'login']);
Route::get('/index', [LoginController::class, 'index'])->name('index');
Route::get('/rates', [LoginController::class, 'rates'])->name('rates');
Route::get('/rooms', [LoginController::class, 'rooms'])->name('rooms');