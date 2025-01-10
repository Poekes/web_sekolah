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

            return redirect()->intended('/');
        }

        return back()->with('invalidAuth', 0);
    }
}