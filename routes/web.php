<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.index');
})->name('dashboard.index');


Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories/create', [CategoryController::class , 'store'])->name('categories.store');
Route::get('/categories/{category:slug}',[CategoryController::class, 'show'])->name('categories.show');


Route::get('/posts',[PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create',[PostController::class, 'create'])->name('posts.create');
Route::post('/posts/create',[PostController::class, 'store'])->name('posts.store');
