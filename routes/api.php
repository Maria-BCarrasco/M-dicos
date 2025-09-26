<?php

use App\Http\Controllers\MedicoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('medicos', [MedicoController::class, 'index']);
Route::post('medicos', [MedicoController::class, 'store']);
Route::get('medicos/{id}', [MedicoController::class, 'show']);
Route::put('medicos/{id}', [MedicoController::class, 'update']);
Route::delete('medicos/{id}', [MedicoController::class, 'delete']);

