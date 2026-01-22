<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


    Route::prefix('product')->group(function () {
        Route::get('/', [ProductController::class, 'index']);
        Route::get('/create', [ProductController::class, 'create']);           
        Route::get('{product}', [ProductController::class, 'show']);    
        Route::post('/', [ProductController::class, 'store']);           
        Route::delete('{product}', [ProductController::class, 'destroy']); 
        Route::delete('/', [ProductController::class, 'bulkDelete']);   
    });
