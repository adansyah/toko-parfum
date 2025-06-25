<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;


// user login
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
// user view
Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::get('/shop', [ShopController::class, 'index'])->name('shop');
    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::get('/service', [ServiceController::class, 'index'])->name('services');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
});

// admin login

// admin view
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
});
