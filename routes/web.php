<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'home']);

Route::get('/services', [PackageController::class, 'services']);

Route::get('/review', [ReviewController::class, 'review'])->name('review');

Route::post('/review/check', [ReviewController::class, 'review_check']);

Route::get('/portfolio/{catalog?}', [PortfolioController::class, 'getPhotos']);

Route::post('/order', [PackageController::class, 'postOrder']);

Route::get('/order/{package}', [PackageController::class, 'getPackage']);



