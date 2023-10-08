<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::latest()->paginate(5);
        return view('contact.contact', compact('contacts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function create()
    {
        //
    }

    public function store(ContactRequest $request)
    {

    }

    public function show(Contact $contact)
    {
        //
    }

    public function edit(Contact $contact)
    {
        //
    }

    public function update(Request $request, Contact $contact)
    {
        //
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contact.index')
            ->with('success', 'تم الحذف بنجاح.');
    }
}
