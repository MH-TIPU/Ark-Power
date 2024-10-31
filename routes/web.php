<?php

use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Route;

// Route::view('/', 'layouts.home');

Route::get('/', 'App\Http\Controllers\BaseController@home');
Route::get('/products', [BaseController::class, 'products'])->name('products');
Route::get('/products/{id}', [BaseController::class, 'productDetails'])->name('productdetails');
Route::get('/services', [BaseController::class, 'service'])->name('services');
Route::get('/news', [BaseController::class, 'news'])->name('news');
Route::get('/about', [BaseController::class, 'aboutUs'])->name('about');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
