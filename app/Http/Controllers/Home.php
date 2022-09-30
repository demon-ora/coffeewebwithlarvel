<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

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
      $blogs= Blog::all();
      // echo "<pre>";
      // print_r($contacts->toArray());
      $data= compact('blogs');
      return view('blog')->with($data);
    }


    public function contact()
    {
      return view('contact');
    }


  public function logout(Request $request)
  {
   $request->session()->forget('userid');
    return view('login');
  }
}
