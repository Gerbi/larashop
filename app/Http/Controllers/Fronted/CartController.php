<?php

namespace App\Http\Controllers\Fronted;

use Gloudemans\Shoppingcart\Facades\Cart;
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
        Cart::add($request->id, $request->name, 1, $request->price);

        return redirect()->back()->with('msg','Item has been added to cart');

    }

}
