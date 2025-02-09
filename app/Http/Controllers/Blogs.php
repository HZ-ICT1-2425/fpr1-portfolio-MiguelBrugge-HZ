<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blogs extends Controller
{
    public function index()
    {
        return view('blogs', ['blogs' => '']);
    }

    public function blogPost($id)
    {
        return view('blog-post', ['post' => '']);
    }
}
