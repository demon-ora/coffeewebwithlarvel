<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;

class Dashboard extends Controller
{
    public function dash()
    {   $contacts= User::all();
      // echo "<pre>";
      // print_r($contacts->toArray());
      $data= compact('contacts');
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

  public function dashcontact()
    {   $contacts= Contact::all();
      // echo "<pre>";
      // print_r($contacts->toArray());
      $data= compact('contacts');
      return view('dashboardcontact')->with($data);
    }

    public function destorycontact($id)
    {
     $contact= Contact::find($id);
     if(!is_null($contact)){
     $contact->delete();
     }
     return redirect('dashboardcontact');
    }

    public function editcontact($id)
    {
      $contact= Contact::find($id);
     if(is_null($contact)){
     return redirect('dashboardcontact');
     }
       $data=compact('contact');
      return view('editcontact')->with($data);
    }

    public function updatecontact($id, Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $contact= Contact::find($id);
     $contact->name = $request['name'];
     $contact->email = $request['email'];
     $contact->message = $request['message'];
    $contact->save();
    return redirect('dashboardcontact');
  }

}
