<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index(Request $req)
    {
        return view('admin_artikel');
    }
    public function tambah(Request $req)
    {
        return view('admin_artikel_tambah');
    }
}