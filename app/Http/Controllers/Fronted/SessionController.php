<?php

namespace App\Http\Controllers\Fronted;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function index()
    {
        return view('fronted.sessions.index');
    }

    public function store(Request $request)
    {
        //validate user
        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];

        $request->validate($rules);

        //check if exist
        $data = request(['email','password']);
        if (! Auth()->attempt($data))
        {
            return back()->withErrors([
                'message' => 'Wrong credentials please try again'
            ]);
        }

        //redirect to
        return redirect('/user/profile');
    }

    public function logout()
    {
        Auth()->logout();

        session()->flash('msg','You have been logged out successfully');

        return redirect('/user/login');
    }
}
