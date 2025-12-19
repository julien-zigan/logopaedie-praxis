<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('components.pages.home');
});

Route::get('/docs/api', function () {
    return view('components.pages.api');
});

Route::get('/web', function () {
    return view('components.pages.web-home');
});
