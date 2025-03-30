<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login-register', function () {
    return view('login-register');
});

Route::get('/manufacturer-dashboard', function () {
    return view('manufacturer-dashboard');
});
