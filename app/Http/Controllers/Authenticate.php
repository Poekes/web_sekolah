<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Authenticate extends Controller
{
    public function index(Request $req)
    {
        return view('Login');
    }


    public function auth(Request $req)
    {
        return response()->json($req, 200);
    }
}
