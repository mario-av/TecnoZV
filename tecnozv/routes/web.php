<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

Route::get('/', [PaginaController::class, 'welcome'])->name('home');
Route::get('/pisos', [PaginaController::class, 'index'])->name('pisos.listado');
Route::get('/pisos/{id}', [PaginaController::class, 'show'])->name('pisos.detalle')->where('id', '[0-9]+');
Route::get('/atencioncliente', [PaginaController::class, 'atencionCliente'])->name('atencion');
Route::get('/contacto', [PaginaController::class, 'contacto'])->name('contacto');
