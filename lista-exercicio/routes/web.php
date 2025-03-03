<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\listaUm\ListaController;

Route::get('/', function () {
    return view('welcome');
});

// lista 1
Route::get('/listaUm/ex1',[ListaController::class, 'ex1']);
Route::post('/listaUm/ex1',[ListaController::class, 'ex1Post']);

Route::get('/listaUm/ex2',[ListaController::class, 'ex2']);
Route::post('/listaUm/ex2',[ListaController::class, 'ex2Post']);

Route::get('/listaUm/ex3',[ListaController::class, 'ex3']);
Route::post('/listaUm/ex3',[ListaController::class, 'ex3Post']);


