<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

// Route::get('category', [CategoryController::class, 'index']);
// Route::post('category', [CategoryController::class, 'store']);
// Route::put('category/{category}', [CategoryController::class, 'update']);
// Route::delete('category/{category}', [CategoryController::class, 'destroy']);
// Route::get('category/{category}', [CategoryController::class, 'show']);

Route::apiResource('category', CategoryController::class);
Route::get('category/{category}/car', [CategoryController::class, 'getCar']);
Route::apiResource('car', CarController::class);
Route::apiResource('employee', EmployeeController::class);
Route::post('employee/{employee}/car', [EmployeeController::class, 'addCar']);
Route::get('employee/{employee}/car', [EmployeeController::class, 'getCar']);
