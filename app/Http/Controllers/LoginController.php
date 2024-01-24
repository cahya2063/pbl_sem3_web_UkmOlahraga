<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }


    public function postlogin(Request $request)
    {
        $request->validate([
            'email'     => 'required',
            'password'  => 'required',
        ]);

        $data = [
            'email'     => $request->email,
            'password'  => $request->password,
        ];

        if(Auth::attempt($data)) {
            return redirect()->route('dashboard')->with('succes', 'Kamu Berhasil Login');
        } else {
            return redirect()->route('login')->with('failed', 'Email atau Password Salah');
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('succes', 'Kamu Berhasil Logout');
    }
}
