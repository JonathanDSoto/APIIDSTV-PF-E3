<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/', [LoginController::class, 'login']);
Route::get('/venta', [LoginController::class, 'index'])->name('index');
Route::get('/tarifas', [LoginController::class, 'rates'])->name('rates');
Route::get('/habitaciones', [LoginController::class, 'rooms'])->name('rooms');
Route::get('/clientes', [LoginController::class, 'clients'])->name('clients');
Route::get('/reservaciones', [LoginController::class, 'reservations'])->name('reservations');
Route::get('/usuarios', [LoginController::class, 'users'])->name('users');
Route::get('/hoteles', [LoginController::class, 'hotels'])->name('hotels');