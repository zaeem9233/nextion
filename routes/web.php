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
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('CheckUserLoggedIn');
Route::get('/clients', [ClientController::class, 'clients'])->name('clients')->middleware('CheckUserLoggedIn');
Route::get('/client/{id}', [ClientController::class, 'client'])->name('client')->middleware('CheckUserLoggedIn');
Route::get('/album/{albumId}', [AlbumController::class, 'album'])->name('album')->middleware('CheckUserLoggedIn');
Route::get('/photo/{photoId}', [AlbumController::class, 'photo'])->name('photo')->middleware('CheckUserLoggedIn');
Route::get('/profile', [UserController::class, 'profile'])->name('profile')->middleware('CheckUserLoggedIn');
Route::post('/profile/update', [UserController::class, 'profile_update'])->name('profile.update')->middleware('CheckUserLoggedIn');
Route::post('/profile/password/update', [UserController::class, 'password_update'])->name('profile.password.update')->middleware('CheckUserLoggedIn');