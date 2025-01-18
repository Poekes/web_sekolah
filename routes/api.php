<?php

use App\Http\Controllers\ImgController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/v3/img', [ImgController::class, 'send']);
Route::get('/v3/img', [ImgController::class, 'show']);
Route::get('/v3/img/{imgModel:name}', [ImgController::class, 'detail_img']);
Route::delete('/v3/img', [ImgController::class, 'delete']);
