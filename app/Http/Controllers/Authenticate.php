<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Controller
{
    public function index(Request $req)
    {
        return view('Login');
    }


    public function auth(Request $req)
    {
        $cre = $req->validate([
            'username' => 'required|max:255',
            'password' => 'required',
        ]);

        if (Auth::attempt($cre)) {
            $req->session()->regenerate();

            return redirect()->intended($req->user()->role == "admin" ? '/admin' : '/');
        }

        return back()->with('invalidAuth', 0)->withInput();
    }
    public function logout(Request $req)
    {
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect()->route('login')->with('logout', 0);
    }
}
