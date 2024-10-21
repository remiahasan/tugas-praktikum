<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::post('/bukus/{id}', [BukuController::class, 'store']);
Route::apiResource('kategoris', KategoriController::class);
Route::apiResource('bukus', BukuController::class);
