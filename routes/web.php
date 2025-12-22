<?php

use App\Http\Controllers\Web;
use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Logout;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Register;
use Illuminate\Container\Attributes\Log;

// Landing Page
Route::get('/', function () {
    return view('pages.home.index');
})->name('index');

// Web Home
Route::get('/app', [Web\IndexController::class, 'index']);

// Therapists
Route::middleware('auth')->group(function () {
    Route::resource('therapists', Web\TherapistController::class);
});

// Auth
Route::view('/register', 'pages.auth.register')
    ->middleware('guest')
    ->name('register');
Route::post('/register', Register::class)
    ->middleware('guest');

Route::view('login', 'pages.auth.login')
->middleware('guest')
->name('login');

Route::post('/login', Login::class)
->middleware('guest');

Route::post('/logout', Logout::class)->name('logout');
