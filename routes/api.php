<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WordController;

Route::get('/words', [WordController::class, 'index']);
Route::post('/words', [WordController::class, 'store']);
Route::get('/words/{id}', [WordController::class, 'show']);
Route::put('/words/{id}', [WordController::class, 'update']);
Route::delete('/words/{id}', [WordController::class, 'destroy']);
