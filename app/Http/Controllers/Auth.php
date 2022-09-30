<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;
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


public function logblog(Request $request)
{
    
    // echo "<pre>";
    // print_r($request->all());
    if($request->email == 'ora@gmail.com' && $request->password == 'ora123'){
        $users= User::all();
        $request->session()->put('userid',$request->email);
        $data= compact('users');
        return view('dashboard')->with($data);
    }else{
 $user= User::where('email','=',$request->email)->first();

if($user)
{
    if(Hash::check($request->password,$user->password)){
     $request->session()->put('userid',$user->id);
     $blogs= Blog::all();
     // echo "<pre>";
     // print_r($contacts->toArray());
     $data= compact('blogs');
     return view('blog')->with($data);
    }
}
 else 
 {
  return back()->with('error','password or email is wrong');
 }
 return back()->with('errorno','password or email is wrong');}
}
}
