<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

Route::get('/', function () {
    return Inertia::render('welcome', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('home');

Route::get('/about', function () {
    return Inertia::render('about', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('about');

Route::get('/docs', function () {
    return Inertia::render('coming-soon', [
        'canRegister' => Features::enabled(Features::registration()),
        'title' => 'API-Dokumentation'
    ]);
})->name('docs');

Route::get('/impressum', function () {
    return Inertia::render('coming-soon', [
        'canRegister' => Features::enabled(Features::registration()),
        'title' => 'Impressum'
    ]);
})->name('impressum');

Route::get('/datenschutz', function () {
    return Inertia::render('coming-soon', [
        'canRegister' => Features::enabled(Features::registration()),
        'title' => 'Datenschutz'
    ]);
})->name('gdpr');



Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');

    Route::get('/app/speech', function () {
        return Inertia::render('coming-soon', [
            'canRegister' => Features::enabled(Features::registration()),
            'title' => 'Sprach- und Sprechtherapie'
        ]);
    })->name('speech');

    Route::get('/app/voice', function () {
        return Inertia::render('coming-soon', [
            'canRegister' => Features::enabled(Features::registration()),
            'title' => 'Stimme und Gesang'
        ]);
    })->name('voice');

    Route::get('/app/literacy', function () {
        return Inertia::render('coming-soon', [
            'canRegister' => Features::enabled(Features::registration()),
            'title' => 'Lesen und Rechtschreibung'
        ]);
    })->name('literacy');


});


require __DIR__.'/settings.php';
