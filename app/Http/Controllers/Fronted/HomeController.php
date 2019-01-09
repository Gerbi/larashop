<?php

namespace App\Http\Controllers\Fronted;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::inRandomOrder()->take(4)->get();

        return view('fronted.index', compact('products'));
    }
}
