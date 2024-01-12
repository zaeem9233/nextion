<?php

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

/**
 * Signup ROutes
 */
Route::get('/register', [SignupController::class, 'register'])->name('register');