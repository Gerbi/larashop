<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function store(Request $request)
    {
        //Validate the user
        $request->validate([
           'email' => 'required|email',
            'password' => 'required'
        ]);

        //Log the user In

        //Session message

        //redirect

    }

}
