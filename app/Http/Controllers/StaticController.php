<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\View\View;

class StaticController extends Controller
{
    /**
     * @return View Page to load
     * Home page
     */
    public function home()
    {
        return view('home');
    }

    /**
     * @return View Page to load
     * Dashboard page
     */
    public function dashboard()
    {
        return view('dashboard', ['courses' => Course::all()]);
    }

    /**
     * @return View Page to load
     * Profile page
     */
    public function profile()
    {
        return view('profile');
    }
}
