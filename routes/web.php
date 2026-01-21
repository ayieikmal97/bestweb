<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', [ProductController::class, 'index'])->name('dashboard');
    Route::get('/product/export', [ProductController::class, 'export'])->name('product.export');
    Route::delete('/product', [ProductController::class, 'bulkDelete'])->name('product.bulk-delete');
    Route::resource('/product', ProductController::class);
});

require __DIR__.'/auth.php';
