<?php

use App\Http\Controllers\Client\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Client
Route::prefix('/home')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
});
