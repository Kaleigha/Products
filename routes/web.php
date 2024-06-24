<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])->name('index');

Route::get('/add', [ProductController::class, 'addProduct'])->middleware('auth')->name('addProduct');

Route::post('/add/confirm', [ProductController::class, 'store'])->name('addProductComfirm');

Route::get('/upd/{id}', [ProductController::class, 'updateProduct'])->middleware('auth')->name('updateProduct');

Route::post('/upd/confirm/{id}', [ProductController::class, 'updateProductConfirm'])->name('updateProductConfirm');

Route::get('/del/{id}', [ProductController::class, 'delete'])->middleware('auth')->name('delProduct');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
