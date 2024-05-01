<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::resource('/', ArticleController::class);

Route::get('/login', [UserController::class, 'index']);
Route::get('/register', [UserController::class, 'create']);
Route::get('/register/store', [UserController::class, 'store']);
