<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/halaman', function () {
    return view('halaman');
});

Route::get('/home', function () {
    return view('home');
});