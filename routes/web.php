<?php

use App\Http\Controllers\Authenticate;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::group(['middleware' => 'auth'], function () {

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
});



Route::get('/test', function () {
    // return Storage::url('test.pdf');
    return '<a href="' . Storage::url('test.pdf') . '">open pdf</a>';
})->name('home');
Route::get('/login', [Authenticate::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [Authenticate::class, 'auth'])->name('auth')->middleware(['guest', 'throttle:login']);
Route::post('/logout', [Authenticate::class, 'logout'])->name('logout')->middleware('auth');
