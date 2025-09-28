<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout']);
Route::get('user', [AuthController::class, 'user'])->middleware('auth:api');


Route::middleware('auth:api')->group(function () {
    Route::get('/teams/query', [TeamController::class, 'query']);
    Route::get('/sales/index', [SalesController::class, 'index']);
});