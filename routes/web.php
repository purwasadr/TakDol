<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MyProductController;
use App\Http\Controllers\RegisterController;
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
        'products' => Product::all()
    ]);
});

Route::get('/show/{products:slug}', function (Product $product) {
    return view('home', [
        'title' => 'Home',
        'product' => $product
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/create', function () {
    return view('product.create', [
        'title' => 'Edit',
    ]);
});

Route::get('/seller/myproducts/checkSlug', [MyProductController::class, 'checkSlug'])->middleware('auth');
Route::resource('/seller/myproducts', MyProductController::class)->middleware('auth');
