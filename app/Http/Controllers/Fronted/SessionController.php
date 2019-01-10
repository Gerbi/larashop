<?php

namespace App\Http\Controllers\Fronted;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        if (! auth()->attempt($data))
        {
            return back()->withErrors([
                'message' => 'Wrong credentials please try again'
            ]);
        }

        //redirect to
        return redirect('/user/profile');
    }
}
