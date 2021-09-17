<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

// Route::get('category', [CategoryController::class, 'index']);
// Route::post('category', [CategoryController::class, 'store']);
// Route::put('category/{category}', [CategoryController::class, 'update']);
// Route::delete('category/{category}', [CategoryController::class, 'destroy']);
// Route::get('category/{category}', [CategoryController::class, 'show']);

Route::apiResource('category', CategoryController::class);
