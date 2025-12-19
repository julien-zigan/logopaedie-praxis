<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TherapistController;
use App\Http\Controllers\Api\PatientController;
use App\Http\Controllers\Api\TherapySessionsController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('therapists', TherapistController::class);
Route::apiResource('patients', PatientController::class);
Route::apiResource('therapy-sessions', TherapySessionsController::class);