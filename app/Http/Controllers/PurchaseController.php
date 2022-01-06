<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id', auth()->user()->id)->get();

        return view('purchase.index', [
            'title' => "Purchase",
            'orders' => $orders
        ]);
    }
}
