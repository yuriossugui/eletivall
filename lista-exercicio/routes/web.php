<?php

use App\Http\Controllers\ListaUmController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//lista 1
Route::get('/lista-um-ex-um', [ListaUmController::class, 'exercicioUmForm'])->name('lista-um-ex-um');
Route::post('/lista-um-ex-um', [ListaUmController::class, 'exercicioUmPost'])->name('lista-um-ex-um-post');

Route::get('/lista-um-ex-dois', [ListaUmController::class, 'exercicioDoisForm'])->name('lista-um-ex-dois');
Route::post('/lista-um-ex-dois', [ListaUmController::class, 'exercicioDoisPost'])->name('lista-um-ex-dois-post');