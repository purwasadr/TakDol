<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProductShow extends Component
{
    use AuthorizesRequests;

    public $product;
    public $count = 0;

    public function render()
    {
        return view('livewire.product-show');
    }

    public function addToCart($id, $count)
    {
        if (Auth::guest()) {
            return redirect()->route('login.form');
        }

        if (Cart::where('product_id', $id)->where('user_id', Auth::user()->id)->exists()) {
            session()->flash('error', 'You add same product');
            return;
        }



        Cart::create([
            'user_id' => Auth::user()->id,
            'product_id' => $id,
            'count' => $count
        ]);
    }
}
