<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyOrderController extends Controller
{
    public function index()
    {

        return view('seller.myorders.index', [
            'title' => 'My Orders',
            'orders' => Auth::user()->orders
        ]);
    }
}
