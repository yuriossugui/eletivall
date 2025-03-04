<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\listaUm\ListaController;
use App\Http\Controllers\listaDois\ListaDoisController;

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

Route::get('/listaUm/ex4',[ListaController::class, 'ex4']);
Route::post('/listaUm/ex4',[ListaController::class, 'ex4Post']);

Route::get('/listaUm/ex5',[ListaController::class, 'ex5']);
Route::post('/listaUm/ex5',[ListaController::class, 'ex5Post']);

Route::get('/listaUm/ex6',[ListaController::class, 'ex6']);
Route::post('/listaUm/ex6',[ListaController::class, 'ex6Post']);

Route::get('/listaUm/ex7',[ListaController::class, 'ex7']);
Route::post('/listaUm/ex7',[ListaController::class, 'ex7Post']);

Route::get('/listaUm/ex8',[ListaController::class, 'ex8']);
Route::post('/listaUm/ex8',[ListaController::class, 'ex8Post']);

Route::get('/listaUm/ex9',[ListaController::class, 'ex9']);
Route::post('/listaUm/ex9',[ListaController::class, 'ex9Post']);

Route::get('/listaUm/ex10',[ListaController::class, 'ex10']);
Route::post('/listaUm/ex10',[ListaController::class, 'ex10Post']);

Route::get('/listaUm/ex11',[ListaController::class, 'ex11']);
Route::post('/listaUm/ex11',[ListaController::class, 'ex11Post']);

Route::get('/listaUm/ex12',[ListaController::class, 'ex12']);
Route::post('/listaUm/ex12',[ListaController::class, 'ex12Post']);

Route::get('/listaUm/ex13',[ListaController::class, 'ex13']);
Route::post('/listaUm/ex13',[ListaController::class, 'ex13Post']);

Route::get('/listaUm/ex14',[ListaController::class, 'ex14']);
Route::post('/listaUm/ex14',[ListaController::class, 'ex14Post']);

Route::get('/listaUm/ex15',[ListaController::class, 'ex15']);
Route::post('/listaUm/ex15',[ListaController::class, 'ex15Post']);

// lista 2
Route::get('/listaDois/ex1',[ListaDoisController::class, 'ex1']);
Route::post('/listaDois/ex1',[ListaDoisController::class, 'ex1Post']);

Route::get('/listaDois/ex2',[ListaDoisController::class, 'ex2']);
Route::post('/listaDois/ex2',[ListaDoisController::class, 'ex2Post']);

Route::get('/listaDois/ex3',[ListaDoisController::class, 'ex3']);
Route::post('/listaDois/ex3',[ListaDoisController::class, 'ex3Post']);

Route::get('/listaDois/ex4',[ListaDoisController::class, 'ex4']);
Route::post('/listaDois/ex4',[ListaDoisController::class, 'ex4Post']);

Route::get('/listaDois/ex5',[ListaDoisController::class, 'ex5']);
Route::post('/listaDois/ex5',[ListaDoisController::class, 'ex5Post']);

Route::get('/listaDois/ex6',[ListaDoisController::class, 'ex6']);
Route::post('/listaDois/ex6',[ListaDoisController::class, 'ex6Post']);

Route::get('/listaDois/ex7',[ListaDoisController::class, 'ex7']);
Route::post('/listaDois/ex7',[ListaDoisController::class, 'ex7Post']);