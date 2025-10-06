<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/crud', [ProductController::class, 'index'])->name('crud.index');
Route::get('/crud/create', [ProductController::class, 'create'])->name('crud.create');
Route::post('/crud/products', [ProductController::class, 'store'])->name('product.store');
Route::post('/crud/users', [UserController::class, 'store'])->name('user.store');
Route::get('/crud/products/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/crud/products/{product}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/crud/products/{product}', [ProductController::class, 'delete'])->name('product.delete');
Route::get('/crud/users/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/crud/users/{user}', [UserController::class, 'update'])->name('user.update');
Route::delete('/crud/users/{user}', [UserController::class, 'delete'])->name('user.delete');
