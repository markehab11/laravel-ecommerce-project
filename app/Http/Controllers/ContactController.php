<?php

namespace App\Http\Controllers;
 
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact = Contact::all();
        return view('eshopper_dash.contact.index', compact('contact'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        Contact::create([
            'name' => $request->name,
            'email' =>$request->email,
            'message' => $request->message
        ]);
        return response()->json(['message' => 'message added successfully']);
    }

    public function show(Contact $contact)
    {

    }

    public function edit(Contact $contact)
    {
        
    }


    public function update(Request $request, Contact $contact)
    {
        //
    }

    public function destroy($id)
    {
        Contact::findOrFail($id)->delete();
        return redirect()->route('Contact.index');
    }
}
