<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Dashboard extends Controller
{
    public function dash()
    {   $users= User::all();
      // echo "<pre>";
      // print_r($users->toArray());
      $data= compact('users');
      return view('dashboard')->with($data);
    }

    public function destory($id)
    {
     $user= User::find($id);
     if(!is_null($user)){
     $user->delete();
     }
     return redirect('dashboard');
    }

    public function edit($id)
    {
      $user= User::find($id);
     if(is_null($user)){
     return redirect('dashboard');
     }
       $data=compact('user');
      return view('edit')->with($data);
    }

    public function update($id, Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $user= User::find($id);
     $user->name = $request['name'];
     $user->lastname = $request['last'];
     $user->email = $request['email'];
    $user->save();
    return redirect('dashboard');
  }
}
