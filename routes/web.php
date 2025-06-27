<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\KategoryController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\AuthController as AdminAuthController;


// user login   
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login/form', [AuthController::class, 'login'])->name('login.form');
Route::post('/register/form', [AuthController::class, 'regisForm'])->name('register.form');
// user view
Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::get('/shop', [ShopController::class, 'index'])->name('shop');
    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::get('/service', [ServiceController::class, 'index'])->name('services');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
});

// admin login
Route::get('halawangi/admin', [AdminAuthController::class, 'index']);
// admin view
Route::middleware(['auth', 'admin'])->group(function () {});
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/kategory', [KategoryController::class, 'index'])->name('kategory');
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/stock', [StockController::class, 'index'])->name('stock');
