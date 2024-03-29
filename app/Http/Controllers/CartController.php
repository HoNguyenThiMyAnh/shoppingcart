<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CartController extends Controller
{
    public function index()
    {
        $carts = session()->get('cart', []);
        return view ('carts', compact('carts'));
    }

   
}
