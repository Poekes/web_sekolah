<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\Authenticate;
use App\Http\Controllers\Homepage;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::group(['middleware' => 'throttle:global'], function () {


    Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {

        Route::get('/', [AdminController::class, 'index'])->name('admin.statistik');
        Route::get('/artikel', [ArtikelController::class, 'index'])->name('admin.artikel');
        Route::get('/artikel/tambah', [ArtikelController::class, 'tambah'])->name('admin.artikel.tambah');
    });

    Route::get('/', [Homepage::class, 'index'])->name('home');



    Route::get('/test', function () {
        // return Storage::url('test.pdf');
        return '<a href="' . Storage::url('test.pdf') . '">open pdf</a>';
    });
    Route::get('/login', [Authenticate::class, 'index'])->name('login')->middleware('guest');
    Route::post('/login', [Authenticate::class, 'auth'])->name('auth')->middleware(['guest', 'throttle:login']);
    Route::post('/logout', [Authenticate::class, 'logout'])->name('logout')->middleware('auth');
});