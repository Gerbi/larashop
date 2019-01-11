<?php

namespace App\Http\Controllers\Fronted;

use App\Order;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserProfileController extends Controller
{
    public function index()
    {
        $id = auth()->user()->id;
        $user = User::where('id',$id)->first();
        $orders = Order::where('user)id',$id);
        return view('fronted.profile.index', compact('user','orders'));
    }

    public function show($id)
    {
        $order = Order::find($id);

        return view('fronted.profile.details', compact('order'));

    }
}
