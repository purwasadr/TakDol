<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CartIndex extends Component
{
    public $carts_chunk;

    public function getCarts()
    {
        $carts = Cart::where('carts.user_id', Auth::user()->id)
            ->select('carts.*')
            ->join('products', 'products.id', '=', 'carts.product_id')
            ->orderBy('products.user_id')
            ->with(['product', 'product.user'])
            ->get()
            ->chunkWhile(function ($value, $key, $chunk) {
                return $value->product->user_id == $chunk->last()->product->user_id;
            });

        $this->carts_chunk = $carts->map(function ($item, $key) {
            return $item->values();
        })->toArray();

        return $carts;
    }

    public function deleteCart($id)
    {
        Cart::destroy($id);
    }

    public function changeCartCount($id, $value, $maxCount)
    {
        if ($value > $maxCount) {
            Cart::where('id', $id)->update(['count' => $maxCount]);
            return;
        } else if ($value < 1) {
            Cart::where('id', $id)->update(['count' => 1]);
            return;
        }

        Cart::where('id', $id)->update(['count' => $value]);
    }

    public function increaseCartCount($id, $maxCount)
    {
        $cart = Cart::find($id);
        if ($cart->count >= $maxCount) {
            $this->emit('toast', 'Count is max');
            return;
        }

        Cart::where('id', $id)->increment('count');
    }

    public function decreaseCartCount($id, $maxCount)
    {
        $cart = Cart::find($id);
        if ($cart->count < 2) {
            dd('max');
            return;
        }

        Cart::where('id', $id)->decrement('count');
    }

    public function render()
    {
        return view('livewire.cart-index', [
            'carts' => $this->getCarts()
        ]);
    }
}
