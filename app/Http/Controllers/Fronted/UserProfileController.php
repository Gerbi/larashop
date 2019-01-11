<?php

namespace App\Http\Controllers\Fronted;

use http\Client\Curl\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserProfileController extends Controller
{
    public function index()
    {
        $id = auth()->user()->id;
        $user = User::where('id',$id)->first();
        return view('fronted.profile.index', compact($user));
    }
}
