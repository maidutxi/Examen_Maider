<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\DentistaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dentistas/index', [DentistaController::class,'index']);
Route::get('/dentistas/edit/{id}', [DentistaController::class,'edit']);
Route::get('/dentistas/create', [DentistaController::class, 'create']);
Route::post('/dentistas/store', [DentistaController::class, 'store']);
Route::delete('/dentistas/delete/{id}', [DentistaController::class, 'delete']);
Route::put('/dentistas/update/{id}', [DentistaController::class, 'update']);


Route::get('/clientes/index', [ClientesController::class,'index']);
Route::get('/clientes/create', [ClientesController::class, 'create']);
Route::post('/clientes/store', [ClientesController::class, 'store']);
Route::put('/clientes/update/{id}', [ClientesController::class, 'update']);
