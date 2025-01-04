<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
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
});

Route::get('/test', function () {
    // return Storage::url('test.pdf');
    return '<a href="' . Storage::url('test.pdf') . '">open pdf</a>';
});