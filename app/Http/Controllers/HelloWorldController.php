<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function index(): string
    {
        return "Selamat Belajar Framework Laravel 10";
    }
    public function ambilfile()
    {
        return view('ambilfile');
    }
}
