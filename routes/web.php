<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

// Links e Rotas

Route::get('/', [TodoController::class, 'index']);
Route::get('/index', [TodoController::class, 'index']);
Route::get('/create', [TodoController::class, 'create']);
Route::post('/upload', [TodoController::class, 'upload']);
Route::get('/{id}/edit', [TodoController::class, 'edit']);
Route::patch('/update', [TodoController::class, 'update']);
Route::get('/{id}/completed', [TodoController::class, 'completed']);
Route::get('/{id}/delete', [TodoController::class, 'delete']);
