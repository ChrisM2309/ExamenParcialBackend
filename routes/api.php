<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::group(['prefix' => 'v1'], function () {
    Route::get('/books', [BookController::class, 'index']);
});