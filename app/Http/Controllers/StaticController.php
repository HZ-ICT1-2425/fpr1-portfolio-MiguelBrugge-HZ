<?php

namespace App\Http\Controllers;

class StaticController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function profile()
    {
        return view('profile');
    }
}
