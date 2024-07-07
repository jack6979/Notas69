<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\imcController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [notasController::class, 'index']);

Route::get('/notas/calcularnotas',  [notasController::class, 'calcularnotas'])->name('notas.calcular');
Route::post('/notas/store',[notasController::class,'calcularnotas'])->name('notas.calcular');
Route::get('notas/show',[notasController::class,'show'])->name('notas.show');
Route::delete('/notas/delete/{id}',[notasController::class,'destroy'])->name('notas.delete');
Route::put('/notas/update/{id}',[notasController::class,'update'])->name('notasupdate');

