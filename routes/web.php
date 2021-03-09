<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductoController;

Route::resource('posts', PostController::class);
Route::resource('productos', ProductoController::class);