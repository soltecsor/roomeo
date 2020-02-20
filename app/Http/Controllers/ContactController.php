<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{    
    public function index(){
        $contacts = Contact::all();

        return view('portal.contact', compact('contacts'))->with('emailsent', '');
    }
    public function contacts_edit($id){
        $contact = Contact::find($id);

        return view('edit.contact', compact('contact'));
    }
    public function edit_contact(Request $request){
        $contacts = Contact::all();

        $idcontact = $request->input("id_contact");
        $contact = Contact::find($idcontact);
        $contact->title = ($request->input("title"));
        $contact->subtitle = ($request->input("subtitle"));
        $contact->subtitle = ($request->input("subtitle"));
        $contact->button_label = ($request->input("button_label"));
        $contact->phone = ($request->input("phone"));
        $contact->email = ($request->input("email"));
        $contact->address = ($request->input("address"));

        if ($contact->save()) {
            flash('Contacts updated successfully')->success();
            return redirect(url('/contacts_edit', compact('contact')));
        } else {
            flash('Error updating Contacts')->error();
            return redirect(url('/contacts_edit', compact('contact') ));
        }
    }
}
