<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('about', 'App\Http\Controllers\AboutController@about');

Route::get('/login', [LoginController::class, 'login']);

Route::get('register', function() {
    return view('register');
});

Route::get('/profile', [ProfileController::class, 'DisplayProfile']);



