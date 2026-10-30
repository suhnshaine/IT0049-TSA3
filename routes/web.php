<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'welcome']);

Route::get('/tasks', [PageController::class, 'tasks']);

Route::get('/profile', [PageController::class, 'profile']);

Route::get('/about', [PageController::class, 'about']);