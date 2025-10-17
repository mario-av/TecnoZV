<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MainController;

// main route 
Route::get('/', [MainController::class, 'index'])->name('index');

// Blog routes
Route::get('blog', [BlogController::class, 'index'])->name('blog.index');
Route::post('blog', [BlogController::class, 'store'])->name('blog.store');
Route::get('blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::put('blog/{id}', [BlogController::class, 'update'])->name('blog.update');
Route::get('blog/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::delete('blog/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');
Route::get('blog/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');