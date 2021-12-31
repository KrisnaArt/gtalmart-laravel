<?php

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminTransactionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/product', [ProductController::class,'index']);
Route::get('/product/{category:slug}', function (Category $category) {
    return view('products',[
        'categories' => $category->name
    ]);
});
Route::get('/product-detail', [ProductController::class,'detailProduct']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);

Route::get('/register',[RegisterController::class, 'index'])->middleware('guest');
Route::post('/register',[RegisterController::class, 'store']);

Route::get('/dashboard',function () {return view('dashboard.home_user');})->middleware('auth');
Route::get('/dashboardAdmin',function () {return view('dashboard.home_admin');})->middleware('auth');

Route::resource('/dashboardAdmin/products', AdminProductController::class)->except('show')->middleware('admin');
Route::resource('/dashboardAdmin/transactions', AdminTransactionController::class)->except('show')->middleware('admin');