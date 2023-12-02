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

//Rutas de HotelsController

Route::get('/hotels', [HotelsController::class, 'hotels'])->name('hotels');
Route::post('/hotels', [HotelsController::class, 'store'])->name('hotels.store');
Route::get('/hotels/{id}/edit', [HotelsController::class, 'store'])->name('hotels.edit');
Route::put('/hotels/{hotel}', [HotelsController::class, 'update'])->name('hotels.update');
Route::delete('/hotels/{hotel}', [HotelsController::class, 'destroy'])->name('hotels.destroy');

//Rutas de UsersController

Route::get('/users', [UsersController::class, 'users'])->name('users');
Route::post('/users', [UsersController::class, 'store'])->name('users.store');
Route::get('/users/{id}/edit', [UsersController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [UsersController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [UsersController::class, 'destroy'])->name('users.destroy');

//Rutas de ClientsController

Route::get('/clients', [ClientsController::class, 'clients'])->name('clients');
Route::post('/clients', [ClientsController::class, 'store'])->name('clients.store');
Route::get('/clients/{id}/edit', [ClientsController::class, 'edit'])->name('clients.edit');
Route::put('/clients/{client}', [ClientsController::class, 'update'])->name('clients.update');
Route::delete('/clients/{client}', [ClientsController::class, 'destroy'])->name('clients.destroy');