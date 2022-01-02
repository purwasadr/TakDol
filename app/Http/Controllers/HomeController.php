<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function addToCart(Product $product)
    {
        Cart::create([
            'user_id' => Auth::user()->id,
            'product_id' => $product->id
        ]);

        return redirect('/show/' . $product->slug);
    }

    public function buyNow(Product $product)
    {
        Cart::create([
            'user_id' => Auth::user()->id,
            'product_id' => $product->id
        ]);

        return redirect('/cart');
    }
}
