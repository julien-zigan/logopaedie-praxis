<?php

use App\Http\Controllers\Web;
use Illuminate\Support\Facades\Route;

// Landing Page
Route::get('/', function () {
    return view('pages.home.index');
})->name('index');

// Web Home
Route::get('/app', [Web\IndexController::class, 'index']);

// Therapists
Route::resource('therapists', Web\TherapistController::class);
