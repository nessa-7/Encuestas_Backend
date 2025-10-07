<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); 
});

use App\Http\Controllers\RespuestaController;

Route::post('/respuestas', [RespuestaController::class, 'store'])->name('respuestas.store');

Route::get('/formulario', [RespuestaController::class, 'formulario'])->name('formulario');
