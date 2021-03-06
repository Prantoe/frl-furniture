<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ConstructionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Construction;
use App\Models\Product;
use App\Models\Service;

Route::get('/', function () {
    // return view('Home.index');
    $products = Product::with('product_images')->oldest()->paginate(8);
    $services = Service::with('service_images')->oldest()->paginate(2);
    $makeover = Service::with('service_images')->first();
    $construction = Construction::with('construction_images')->oldest()->paginate(8);
    return view('Home.index',compact('products','services','makeover','construction'))
     ->with('i', (request()->input('page', 1) - 1) * 5);
});

Route::middleware('auth')->resource('products', ProductController::class);
Route::middleware('auth')->resource('services', ServiceController::class);
Route::middleware('auth')->resource('constructions', ConstructionController::class);
Route::middleware('auth')->resource('categorys', CategoryController::class);

Route::resource('home', HomeController::class);
Route::get('productsList', [HomeController::class, 'productsList']);
Route::get('makeOverList', [HomeController::class, 'makeOverList']);
Route::get('constructionList', [HomeController::class, 'constructionList']);
Route::get('about', [HomeController::class, 'about']);

// auth
Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
