<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopDetailController extends Controller
{
    public function index()
    {
        return view('shop-details.index', [
            'title' => 'Shop'
        ]);
    }
}
