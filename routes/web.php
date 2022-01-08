<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\seller\MyProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\seller\MyOrderController;
use App\Http\Controllers\ShopDetailController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

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
    return view('home', [
        'title' => 'Home',
        'products' => Product::all(),
        'categories' => Category::all()
    ]);
});

Route::get('/show/{product}', function (Product $product) {
    return view('show', [
        'title' => $product->title,
        'product' => $product
    ]);
});
Route::post('/show/{product}/checkout', [HomeController::class, 'addToCart'])->middleware('auth');;
Route::post('/show/{product}/buy-now', [HomeController::class, 'buyNow'])->middleware('auth');;

Route::get('/login', [LoginController::class, 'index'])->name('login.form')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index'])->name('register.form')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/create', function () {
    return view('product.create', [
        'title' => 'Edit',
    ]);
});

Route::get('/seller/myproducts/checkSlug', [MyProductController::class, 'checkSlug'])->middleware('auth');
Route::resource('/seller/myproducts', MyProductController::class)->middleware('auth');

Route::get('/myaccount/profile', [ProfileController::class, 'index'])->middleware('auth');
Route::put('/myaccount/profile', [ProfileController::class, 'update'])->middleware('auth');

Route::get('/myaccount/change-password', [ChangePasswordController::class, 'index'])->middleware('auth');
Route::put('/myaccount/change-password', [ChangePasswordController::class, 'update'])->middleware('auth');

Route::get('/cart', [CartController::class, 'index'])->middleware('auth');
Route::post('/cart/checkout', [CartController::class, 'checkout'])->middleware('auth');

Route::get('/seller/myorders', [MyOrderController::class, 'index'])->middleware('auth');
Route::post('/seller/myorders/edit-status', [MyOrderController::class, 'editStatus'])->middleware('auth');

Route::get('/shop-details', [ShopDetailController::class, 'index']);

Route::get('/purchase', [PurchaseController::class, 'index']);
