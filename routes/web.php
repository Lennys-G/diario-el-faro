<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;

Route::resource('articles', ArticleController::class);
Route::resource('login', loginController::class);
