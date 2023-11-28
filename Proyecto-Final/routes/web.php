<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\HotelsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RatesController;
use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/', [LoginController::class, 'login']);
Route::get('/index', [IndexController::class, 'index'])->name('index');
Route::get('/rates', [RatesController::class, 'rates'])->name('rates');
Route::get('/rooms', [RoomsController::class, 'rooms'])->name('rooms');
Route::get('/clients', [ClientsController::class, 'clients'])->name('clients');
Route::get('/reservations', [ReservationsController::class, 'reservations'])->name('reservations');
Route::get('/users', [UsersController::class, 'users'])->name('users');

Route::get('/hotels', [HotelsController::class, 'hotels'])->name('hotels');
Route::post('/hotels', [HotelsController::class, 'store'])->name('hotels.store');
Route::get('/hotels/{id}/edit', [HotelsController::class, 'store'])->name('hotels.edit');
Route::put('/hotels/{hotel}', [HotelsController::class, 'update'])->name('hotels.update');
Route::delete('/hotels/{hotel}', [HotelsController::class, 'destroy'])->name('hotels.destroy');
