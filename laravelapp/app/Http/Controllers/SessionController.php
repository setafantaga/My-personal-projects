<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Validation\ValidationException;
// use Illuminate\Support\Facades\Validator;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{

    protected $redirectTo = '/';

    protected function redirectTo()
    {
        return '/';
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function create()
    {
        return view('session.create');
    }

    public function store()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');

        $attributes = request()->validate([
            'email' =>  'required|email',
            'password' => 'required'
        ]);

        //attempt to atuhenticate and log in the user
        //based on the provide credentials 
        if (! auth()->attempt($attributes)) {
            session()->regenerate();
            return redirect('/')->with('success', 'Welcome Back!');
        }else{
            //auth failed
            return back()->withError([
            'email' => 'This email adress does not exist.',
            'password' => 'Your password is incorect.'
        ]);
        }

    }

    public function logout()
    {
        auth()->logout();
        
        return redirect('/')->with('success', 'Goodbye!');
    }
}
