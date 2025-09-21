<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

// Cuando entren a "/", ejecuta directamente el método index del controlador
Route::get('/', [UsuarioController::class, 'index']);

// CRUD de usuarios
Route::resource('usuarios', UsuarioController::class);
