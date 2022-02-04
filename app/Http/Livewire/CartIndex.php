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

        // dd($this->carts_chunk);
        return $carts;
    }

    public function deleteCart($id)
    {
        Cart::destroy($id);
    }

    public function changeCartCount($id, $value, $maxCount)
    {
        if ($value > $maxCount) {
            return;
        }

        // $this->emit('postAdded');

        Cart::where('id', $id)->update(['count' => $value]);
    }

    public function cobaChange()
    {
        dd('www');
    }

    public function increaseCartCount($id, $maxCount)
    {
        $cart = Cart::find($id);
        if ($cart->count >= $maxCount) {
            dd('max');
            return;
        }

        Cart::where('id', $id)->increment('count');
    }

    public function render()
    {
        return view('livewire.cart-index', [
            'carts' => $this->getCarts()
        ]);
    }
}
