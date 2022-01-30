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

        // $carts = Cart::with(['product' => function ($query) {
        //     $query->orderBy('user_id', 'asc');
        // }])->where('user_id', Auth::user()->id)->get();
        // $carts = Cart::with(['product'])->where('user_id', Auth::user()->id)->get()->sortBy(function ($cart, $key) {
        //     return $cart->product->user_id;
        // });
        // $carts = Cart::where('user_id', Auth::user()->id)->orderBy(Product::select('id')->whereColumn('products.id', 'carts.product_id'))->get();

        $carts = Cart::where('carts.user_id', Auth::user()->id)
            ->select('carts.*')
            ->join('products', 'products.id', '=', 'carts.product_id')
            ->orderBy('products.user_id')
            ->with(['product', 'product.user'])
            ->get()
            ->chunkWhile(function ($value, $key, $chunk) {
                return $value->product->user_id == $chunk->last()->product->user_id;
            });

        // dd($carts);

        return view('cart.index', [
            'title' => 'Cart',
            'carts' => $carts
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

    public function destroy(Cart $cart)
    {
        Cart::destroy($cart->id);

        return redirect('/cart')->with('success', "Product has been deleted!");
    }
}
