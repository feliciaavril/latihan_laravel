<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\LatihanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/helloworld', [HelloWorldController::class, 'index']);
Route::get('/ambilfile', [HelloWorldController::class, 'ambilFile']);
Route::get('/latihan', [LatihanController::class, 'index']);
