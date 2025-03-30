<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\ManufacturerAuthController;


Route::get('/', [ManufacturerAuthController::class, 'index']);
Route::get('manufacturer_settings', [ManufacturerAuthController::class, 'manufacturer_settings']);
Route::get('manufacturer_dashboard', [ManufacturerAuthController::class, 'manufacturer_dashboard']);
Route::get('login', [ManufacturerAuthController::class, 'login'])->name('login');
Route::post('custom-login', [ManufacturerAuthController::class, 'customLogin'])->name('login.custom');
Route::get('register', [ManufacturerAuthController::class, 'register'])->name('register-user');
Route::post('custom-register', [ManufacturerAuthController::class, 'customRegister'])->name('register.custom');
