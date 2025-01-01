<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    return view('Home');
});

Route::get('/test', function () {
    // return Storage::url('test.pdf');
    return '<a href="' . Storage::url('test.pdf') . '">open pdf</a>';
});