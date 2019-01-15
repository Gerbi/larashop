<?php

namespace App\Http\Controllers\Fronted;

use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CheckoutController extends Controller
{
    public function index()
    {
        return view('fronted.checkout.index');
    }

    public function store(Request $request)
    {
        try {

            Stripe::charges()->create([

                'amount'    => Cart::total(),
                'currency'  => 'USD',
                'source'    => $request->stripeToken,
                'description' => 'Something text',
                'metadata'    => [

                ]

            ]);

            return redirect()->back()->with('msg','Successfully Thank You');

        } catch (Exception $e)
        {
            //code
        }
    }
}
