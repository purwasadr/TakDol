<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
    function index(Request $request)
    {
        return view('signup.index', [
            'title' => 'Sign Up'
        ]);
    }
}
