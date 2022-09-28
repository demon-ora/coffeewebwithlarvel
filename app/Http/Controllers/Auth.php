<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

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


    public function store(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        $request->validate([
            'name' => 'required',
            'last' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

     $user= new User;
     $user->name = $request['name'];
     $user->lastname = $request['last'];
     $user->email = $request['email'];
     $user->password = Hash::make($request['password']);
      $reg = $user->save();
      if($reg){
        return view('welcome');
      }
}
}
