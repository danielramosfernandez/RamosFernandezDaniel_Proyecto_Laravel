<?php
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\AgendaController;

use Illuminate\Support\Facades\Route;

Route::get('/imagenes', [ImagenController::class, 'index']);
Route::get('/agenda/create', [AgendaController::class, 'create']);
Route::post('/agenda/store', [AgendaController::class, 'store']);
Route::get('/agenda/show', [AgendaController::class, 'showAgendaByDate']);