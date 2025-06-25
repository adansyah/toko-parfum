<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;

Route::get('/', function () {
    return view('page.home');
});

Route::get('/about', [AboutController::class], 'index')->name('about');
Route::get('/shop', [ShopController::class], 'index')->name('shop');
Route::get('/blog', [BlogController::class], 'index')->name('blog');
Route::get('/service', [ServiceController::class], 'index')->name('services');
Route::get('/contact', [ContactController::class], 'index')->name('contact');
Route::get('/home', [Controller::class], 'index')->name('home');
