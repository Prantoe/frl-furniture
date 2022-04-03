<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('Home');
});

Route::resource('products', ProductController::class);
Route::resource('services', ServiceController::class);
Route::resource('categorys', CategoryController::class);
Route::resource('home', HomeController::class);