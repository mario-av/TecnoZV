<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\firstcontroller;
use App\Http\Controllers\BlogController;
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',[firstcontroller::class, 'index'])->name('index');

# Route::method('route','controller::class, 'method');

# proyectos-laravel/app-dos/app/Http/Controllers/firstcontroller.php controller created with command php artisan make:controller firstcontroller

# create a view with blade engine in resources/views/index.blade.php with the comand php artisan make:view index

Route::get('heredia',[firstcontroller::class, 'heredia'])->name('heredia');


// Blog routes 
Route::get('blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('blog/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::get('blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::get('blog', [BlogController::class, 'store'])->name('blog.store');
Route::get('blog/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');
Route::get('blog/{id}', [BlogController::class, 'update'])->name('blog.update');
Route::get('blog/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');


// routes new 
Route::get('dashboard', [firstcontroller::class, 'dashboard'])->name('dashboard');
