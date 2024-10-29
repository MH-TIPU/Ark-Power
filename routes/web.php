<?php

use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Route;

// Route::view('/', 'layouts.home');

Route::get('/', 'App\Http\Controllers\BaseController@home');
Route::get('/products', [BaseController::class, 'products'])->name('products');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
