<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Contacts_office;

class ContactController extends Controller
{
    public function contact()
    {
        $contact = Contact::all();
        return view('contact', [
            'contact' => $contact
        ]);
    }
}
