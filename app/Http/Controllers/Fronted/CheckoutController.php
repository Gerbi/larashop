<?php

namespace App\Http\Controllers\Fronted;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('fronted.checkout.index');
    }
}
