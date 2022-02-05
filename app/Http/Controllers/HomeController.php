<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function addToCart(Request $request, Product $product)
    {
        if (Cart::where('product_id', $product->id)->where('user_id', Auth::user()->id)->exists()) {
            return back()->with('error', 'You add same product');
        }

        Cart::create([
            'user_id' => Auth::user()->id,
            'product_id' => $product->id,
            'count' => $request->count
        ]);

        return redirect('/show/' . $product->slug);
    }

    public function buyNow(Request $request, Product $product)
    {
        if (Cart::where('product_id', $product->id)->where('user_id', Auth::user()->id)->exists()) {
            return back()->with('error', 'You add same product');
        }

        Cart::create([
            'user_id' => Auth::user()->id,
            'product_id' => $product->id,
            'count' => $request->count
        ]);

        return redirect('/cart');
    }
}
