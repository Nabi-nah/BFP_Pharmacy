<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::paginate();
        //$medicines = Medicine::paginate();

        //return view(medicines.display, compact('medicines));
        return view('contacts.index', compact('contacts'));
    }
}
