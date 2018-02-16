<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showContact(){
        $contact = Contact::find(1);
        return view('admin.contact.contact', ['contact'=>$contact]);
    }
    public function updateConatct(Request $request){
            $contact = Contact::find($request->contact_id);
            $contact->address  =     $request->address;
            $contact->phone1   =     $request->phone1;
            $contact->phone2   =     $request->phone2;
            $contact->email    =     $request->email;
            $contact->save();

            return redirect('/contact/us/')->with('message', 'Updated Success');


    }

}
