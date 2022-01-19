<?php

use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Transaction;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WhislistController;
use App\Http\Controllers\TransactionController;
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
    return view('home.index', [
        'products' => Product::skip(0)->take(4)->get()
    ]);
});

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{product:slug}', [ProductController::class, 'show']);
Route::post('/products/{product:slug}', [ProductController::class, 'show']);
Route::get('/products-category/{category:slug}', [ProductController::class, 'categoryProduct']);
Route::post('/products-category/{category:slug}', [ProductController::class, 'categoryProduct']);
Route::get('/products-search', [ProductController::class, 'find']);

Route::get('/about', function () {
    return view('about.index');
})->name('about');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboardUser.home', [
        'user' => User::where('id', auth()->user()->id)->get()
    ]);
})->middleware('auth');
Route::get('/dashboard/transaksi', function () {
    return view('dashboardUser.transaction', [
        'transactions' => Transaction::where('user_id', auth()->user()->id)->get()
    ]);
})->middleware('auth');
Route::get('/dashboard/download', function () {
    return view('dashboardUser.download', [
        'transactions' => Transaction::where('user_id', auth()->user()->id)->get()
    ]);
})->middleware('auth');

Route::get('/dashboardAdmin/products/checkSlug', [AdminProductController::class, 'checkSlug']);
Route::get('/dashboardAdmin', function () {
    return view('dashboardAdmin.home', [
        'users' => User::where('is_admin', 0)->count(),
        'products' => Product::all()->count(),
        'transactions' => Transaction::all()->count(),
        'transaction_datas' => Transaction::all()
    ]);
})->middleware('auth');
Route::resource('/dashboardAdmin/products', AdminProductController::class)->except('show')->middleware('admin');
Route::resource('/dashboardAdmin/transactions', AdminTransactionController::class)->except('show')->middleware('admin');

Route::resource('/carts', CartController::class)->except('show')->middleware('auth');

Route::resource('/whislists', WhislistController::class)->except('show')->middleware('auth');

Route::post('/checkout', [TransactionController::class, 'index'])->name('checkout')->middleware('auth');
Route::post('/checkoutProduct', [TransactionController::class, 'checkoutProduct'])->middleware('auth');

Route::get('/payment', function () {
    return view('payment.index', [
        'cart' => Cart::where('id', session()->get('cart'))->first(),
    ]);
})->name('payment')->middleware('auth');
Route::post('/payment', [TransactionController::class, 'payment'])->middleware('auth');
Route::get('/uploadPayment', function () {
    $bank = [
        ['name'=>'BRI','value'=>'bri'],
        ['name'=>'BCA','value'=>'bca'],
        ['name'=>'Mandiri','value'=>'mandiri'],
        ['name'=>'BNI','value'=>'bni']
    ];
    return view('payment.upload', [
       'banks' => $bank
    ]);
})->name('uploadpayment')->middleware('auth');
Route::post('/uploadPayment', [TransactionController::class, 'uploadPayment'])->name('uploadpayment')->middleware('auth');