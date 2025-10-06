<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function(){
    Route::get('/crud', [DashboardController::class, 'index'])->name('crud.index');
});
Route::get('/crud/create', [DashboardController::class, 'create'])->name('crud.create');
Route::get('/register', [DashboardController::class, 'register'])->name('crud.register');
Route::get('/login', [DashboardController::class, 'showLogin'])->name('crud.login');
Route::post('/login', [UserController::class, 'login'])->name('crud.login');
Route::post('/logout', [UserController::class, 'logout'])->name('crud.logout');
Route::post('/crud/products', [ProductController::class, 'store'])->name('product.store');
Route::post('/crud/users', [UserController::class, 'store'])->name('user.store');
Route::get('/crud/products/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/crud/products/{product}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/crud/products/{product}', [ProductController::class, 'delete'])->name('product.delete');
Route::get('/crud/users/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/crud/users/{user}', [UserController::class, 'update'])->name('user.update');
Route::delete('/crud/users/{user}', [UserController::class, 'delete'])->name('user.delete');
