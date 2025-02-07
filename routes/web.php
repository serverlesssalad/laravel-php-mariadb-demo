<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WordController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/words', [WordController::class, 'index']);
Route::post('/words', [WordController::class, 'store']);
Route::get('/words/{id}', [WordController::class, 'show']);
Route::put('/words/{id}', [WordController::class, 'update']);
Route::delete('/words/{id}', [WordController::class, 'destroy']);

Route::get('/health', function () {
    return response()->json(["status" => "healthy"]);
});
