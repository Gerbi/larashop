<?php

namespace App\Http\Controllers\Fronted;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('fronted.registration.index');
    }

    public function store(Request $reques)
    {
        dd($reques->all());
//        return view();
    }
}
