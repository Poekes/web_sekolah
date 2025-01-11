<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homepage extends Controller
{
    public function index(Request $req)
    {
        $content = [
            collect([
                'url' => 'SMK-scane1.mp4',
                'type' => 'mp4',
                'index' => 4,

            ]),
            collect([
                'url' => 'SMK-scane2.mp4',
                'type' => 'mp4',

                'index' => 3,

            ]),
            collect([
                'url' => 'SMK-scane3.mp4',
                'type' => 'mp4',
                'index' => 2,

            ]),
            collect([
                'url' => 'SMK-scane4.mp4',
                'type' => 'mp4',

                'index' => 1,

            ]),
        ];
        return view('Home', compact('content'));
    }
}
