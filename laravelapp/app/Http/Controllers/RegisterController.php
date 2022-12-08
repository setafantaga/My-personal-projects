<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegisterUser;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    protected $redirectTo = '/';

    protected function redirectTo()
    {
        return '/';
    }

    public function __construct()
    {
        $this->middleware('guest');
    }


    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        //create the user
        $attributes = request()->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        //$attributes['password'] = bcrypt($attributes['password']);

        // dd('validation succeeded');

        $user = User::create([
            'name' => $attributes['name'],
            'username' => $attributes['username'],
            'email' => $attributes['email'],
            'password' => bcrypt($attributes['password']),
        ]);

        // $save = $user->save();

        auth()->login($user);

        return redirect('/')->with('success', 'Your account has been created!');
    } 
}
