<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('home');

/**
 * Login Routes
 */
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login_check', [LoginController::class, 'loginCheck'])->name('login.check');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('CheckUserLoggedIn');

/**
 * Signup Routes
 */
Route::get('/register', [SignupController::class, 'register'])->name('register');
Route::post('/register_check', [SignupController::class, 'registerSave'])->name('register.save');

/**
 * Dashboard Routes
 */
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('CheckUserLoggedIn');
Route::get('/clients', [ClientController::class, 'clients'])->name('clients')->middleware('CheckUserLoggedIn');
Route::get('/client/{id}', [ClientController::class, 'client'])->name('client')->middleware('CheckUserLoggedIn');