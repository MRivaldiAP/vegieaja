<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog.blog');
    }
   
    public function blog1()
    {
        return view('blog.blog1');
    }

    public function blog2()
    {
        return view('blog.blog2');
    }

    public function blog3()
    {
        return view('blog.blog3');
    }
}
