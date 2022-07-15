<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'tittle' => 'Login',
            'active' => 'login'
        ]);
    }

    public function auth(Request $request)
    {
        $credential = $request->validate([
            'user_email' => 'required | email:dns',
            'user_password' => 'required'
        ]);

        // // dd($credential);
        // if (Auth::attempt(['user_email' => $email, 'password' => $password, 'user_role' => 1])) {
        //     $request->session()->regenerate();

        //     return redirect()->intended('/dashboard/products');
        // } elseif (Auth::attempt(['user_email' => $email, 'password' => $password, 'user_role' => 2])) {
        //     $request->session()->regenerate();
        //     // dd(auth()->user());
        //     return redirect()->intended('/product');
        // }


        if (Auth::attempt(['user_email' => $credential['user_email'], 'password' => $credential['user_password']])) {
            $request->session()->regenerate();
            if (auth()->user()->user_role === 1) {
                $request->session()->regenerate();
                return redirect()->intended('/dashboard/products');
            } else {
                $request->session()->regenerate();
                return redirect()->intended('/product');
            }
        }

        // if (Auth::attempt($credential)) {
        //     $request->session()->regenerate();
        //     return redirect()->intended('/dashboard/products');
        // }

        return back()->with('loginError', 'Login Failed!!!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
