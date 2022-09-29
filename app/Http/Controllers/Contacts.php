<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class Contacts extends Controller
{

    public function storecontact(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

     $contact= new Contact;
     $contact->name = $request['name'];
     $contact->email = $request['email'];
     $contact->message =$request['message'];
      $reg = $contact->save();
      if($reg){
        return view('welcome');
      }
}
}
