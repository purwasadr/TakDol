<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(Product $product)
    {
        return view('cart.index', [
            'title' => 'Cart',
            'carts' => Cart::where('user_id', Auth::user()->id)->get()
        ]);
    }

    public function checkout(Request $request)
    {
        $data = array();
        foreach ($request->cart_check as $product_id) {
            array_push($data, [
                'user_id' => Auth::user()->id,
                'product_id' => $product_id,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        Cart::whereIn('product_id', $request->cart_check)->delete();
        Order::insert($data);

        return redirect('/cart');
    }
}
