<?php

use App\Http\Controllers\IngatlanokController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/ingatlanok', function (Request $request) {
    return $request->ingatlanok();
})->middleware('auth:sanctum');

Route::get('/ingatlanok', [IngatlanokController::class, 'index']);
Route::get('/ingatlanok/{id}', [IngatlanokController::class, 'show']);
Route::post('/ingatlanok', [IngatlanokController::class, 'storage']);
Route::put('/ingatlanok/{id}', [IngatlanokController::class, 'update']);
Route::delete('/ingatlanok/{id}', [IngatlanokController::class, 'destroy']);
