<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])->name('index');

Route::get('/add', [ProductController::class, 'addProduct'])->name('addProduct');

Route::post('/add/confirm', [ProductController::class, 'store'])->name('addProductComfirm');

Route::get('/upd/{id}', [ProductController::class, 'updateProduct'])->name('updateProduct');

Route::post('/upd/confirm/{id}', [ProductController::class, 'updateProductConfirm'])->name('updateProductConfirm');

Route::get('/del/{id}', [ProductController::class, 'delete'])->name('delProduct');
