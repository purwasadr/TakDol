<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductShow extends Component
{
    public $product;

    public function render()
    {
        return view('livewire.product-show');
    }

    private function getProduct()
    {
    }
}
