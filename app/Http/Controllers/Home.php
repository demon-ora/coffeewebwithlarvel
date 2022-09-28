<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function home()
    {
      return view('welcome');
    }

    public function about()
    {
      return view('about');
    }

    public function blog()
    {
      return view('blog');
    }


    public function contact()
    {
      return view('contact');
    }

}
