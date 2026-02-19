<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::get('books', [BookController::class, 'store']);
    Route::post('loans', [BookController::class, 'store']);
    Route::post('returns/{id}', [BookController::class, 'store']);
});