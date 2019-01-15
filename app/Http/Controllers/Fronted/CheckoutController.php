<?php

namespace App\Http\Controllers\Fronted;

use App\Order;
use App\OrderItems;
use Carbon\Carbon;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('fronted.checkout.index');
    }

    public function store(Request $request)
    {
        $contents = Cart::instance('default')->content()->map(function($item)
        {
            return $item->model->name.' '.$item->qty;

        })->values()->toJson();

        try {

            Stripe::charges()->create([

                'amount'      => Cart::total(),
                'currency'    => 'USD',
                'source'      => $request->stripeToken,
                'description' => 'Something text',
                'metadata'    => [
                    'contents' => $contents,
                    'quantity' => Cart::instance('default')->count()
                ]
            ]);

            //insert into ordes table
            $order = Order::create([
                'user_id'   =>  auth()->user()->id,
                'date'      =>  Carbon::now(),
                'address'   =>  $request->address,
                'status'    => 0
            ]);
            //insert into order items table
            foreach (Cart::instance('default')->content() as $item)
            {
                OrderItems::create([
                   'order_id'   =>  $order->id,
                   'product_id' =>  $item->model->id,
                   'quantity'   =>  $item->qty,
                   'price'      =>  $item->price
                ]);
            }

            Cart::instance('default')->destroy();

            return redirect()->back()->with('msg','Successfully Thank You');

        } catch (Exception $e)
        {
            //code
        }
    }
}
