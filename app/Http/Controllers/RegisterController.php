<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'tittle' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'user_nama' => 'required | max:255',
            'user_email' => ['required', 'email', 'unique:users'],
            'user_password' => ['required', 'min:5', 'max:255'],
            'user_alamat' => 'required | max:255',
            'user_tempat_lahir' => 'required | max:50',
            'user_tgl_lahir' => 'required',
            'user_gender' => 'required',
            'user_gambar' => 'image|file|max:1024'
        ]);

        // $validateData['password'] = bcrypt($validateData['password']);
        $validateData['user_password'] = Hash::make($validateData['user_password']);
        if ($request->file('user_gambar')) {
            $validateData['user_gambar'] = $request->file('user_gambar')->store('img');
        }

        $validateData['user_role'] = $request->user_role;
        // dd($validateData);
        User::create($validateData);

        // $request->session()->flash('success', 'Registration Successfull! Please Login');

        return redirect('/login')->with('success', 'Registration Successfull! Please Login');
    }
}
