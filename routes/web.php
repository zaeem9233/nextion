<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\UserController;
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
Route::middleware('CheckUserLoggedIn')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/clients', [ClientController::class, 'clients'])->name('clients');
    Route::get('/client/{id}', [ClientController::class, 'client'])->name('client');
    Route::get('/album/{albumId}', [AlbumController::class, 'album'])->name('album');
    Route::get('/photo/{photoId}', [AlbumController::class, 'photo'])->name('photo');
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::post('/profile/update', [UserController::class, 'profile_update'])->name('profile.update');
    Route::post('/profile/password/update', [UserController::class, 'password_update'])->name('profile.password.update');
});

/**
 * Verify Email Route
 */
Route::get('/email/verify/{token}', [UserController::class, 'verify_email'])->name('email.verify');