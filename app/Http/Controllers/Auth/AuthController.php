<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
    //

    public function ShowLoginForm()
    {
        return view('auth.login');
    }

    public function Login(Request $request)
    {
        $credentials = $request->only('name', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('home.index')->with('success', 'Welcome back, ' . Auth::user()->name . '!');
        }

        return back()->withErrors([
            'name' => 'The provided credentials do not match our records.',
        ]);
    }

    public function Logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function RegisterForm()
    {

        return view('auth.register');
    }

    public function Register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:users,name',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'password' => bcrypt($request->input('password')),
        ]);

        Auth::login($user);

        return redirect()->intended('home');
    }
}
