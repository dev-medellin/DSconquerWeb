<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;



Route::get('/register', [RegisterController::class, 'index'])->name('register-get');
Route::post('/register', [RegisterController::class, 'register'])->name('register');