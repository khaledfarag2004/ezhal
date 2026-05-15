<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index']);

Route::get('/admin', [DashboardController::class, 'index']);
