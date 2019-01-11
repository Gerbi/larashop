<?php

namespace App\Http\Controllers\Fronted;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index()
    {
        return view('fronted.cart.index');
    }

    public function store(Request $request)
    {
//        Cart

    }

}
