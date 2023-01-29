<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function storeContact(Request $request){
        $request->validate([
            'name' => 'required' ,
            'email' => 'required',
            'subject'=> 'required',
            'message'=>'required'
        ]);
        Contact::create([
                'name'=> $request->name,
                'email'=> $request->email,
                'subject'=> $request->subject,
                'message'=> $request->message,
            ]);

            return 'Success';
    }
}
