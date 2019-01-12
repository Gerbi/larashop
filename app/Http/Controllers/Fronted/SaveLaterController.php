<?php

namespace App\Http\Controllers\Fronted;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SaveLaterController extends Controller
{
    public function destroy($id)
    {
        Cart::instance('saveForLater')->remove($id);

        return redirect()->back()->with('msg','Items has been remove save for later');

    }
}
