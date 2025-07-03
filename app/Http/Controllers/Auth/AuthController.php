<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
            return redirect()->intended('home');
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

    public function Register()
    {
        // Logic for registration
        return view('auth.register');
    }
}
