<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Auth extends Controller
{
    public function login()
    {
      return view('login');
    }

    public function reg()
    {
      return view('reg');
    }
}
