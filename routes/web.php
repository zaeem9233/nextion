<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/login', [MainController::class, 'index'])->name('login');
Route::get('/register', [MainController::class, 'index'])->name('register');