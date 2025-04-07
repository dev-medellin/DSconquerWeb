<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;



Route::get('/', [RegisterController::class, 'index'])->name('register-get');
Route::post('/', [RegisterController::class, 'register'])->name('register');
