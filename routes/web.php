<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;
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

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/signup', [SignUpController::class, 'index']);
Route::post('/signup', [SignUpController::class, 'store']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/create', function () {
    return view('product.create', [
        'title' => 'Edit',
    ]);
});

Route::get('/seller', function () {
    return view('seller.layouts.main', [
        'title' => 'Seller Home',
    ]);
});
