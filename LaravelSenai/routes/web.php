<?php

use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

    Route::get('/chef', [PrincipalController::class, 'chef']);
    Route::get('/card', [PrincipalController::class, 'card']);
    Route::get('/profile', [PrincipalController::class, 'profile']);

