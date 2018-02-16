<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('admin.contact.add-contact');
    }
    public function manageContact(){
        $contacts = Contact::all();
        return view('admin.contact.manage-contact', ['contacts'=>$contacts]);
    }
    public function saveContact(Request $request){
        $this->Validate($request, [
            'address'=>'required',
            'phone'=>'required',
            'email'=>'required'
        ]);

        $contact = new Contact();
        $contact->address = $request->address;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->publication_status = $request->publication_status;
        $contact->save();

        return redirect('/contact/add-contact')->with('message', 'Contact info added successfully');
    }
    public function unpublishedContact($id){
        $contact = Contact::find($id);
        $contact->publication_status=0;
        $contact->save();

        return redirect('/contact/manage-contact')->with('message', 'Contact info unpublished');
    }
    public function publishedContact($id){
        $contact = Contact::find($id);
        $contact->publication_status=1;
        $contact->save();

        return redirect('/contact/manage-contact')->with('message', 'Contact info published');
    }
    public function deleteContact($id){
        $contact = Contact::find($id);
        $contact->delete();

        return redirect('/contact/manage-contact')->with('message', 'Contact info deleted');
    }
    public function editContact($id){
        $contact = contact::find($id);

        return view('admin.contact.edit-contact', ['contact'=>$contact]);
    }
    public function updateContact(Request $request){
        $contact = Contact::find($request->address_id);
        $contact->address = $request->address;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->publication_status = $request->publication_status;
        $contact->save();

        return redirect('/contact/manage-contact')->with('message', 'Contact info updated successfully');
    }
}
