<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('contact-admin');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function guestContact(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'contact' => ['required', 'min:5'],
            
        ]);

        $contact = new Contact();

        $contact->name = $validated['name'];
        $contact->email = $validated['email'];
        $contact->contact = $validated['contact'];
        

        $contact->save();


        return redirect()->back()->with('accept', 'MESSAGE SENDED');
    }


    public function adminContact(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'contact' => ['required', 'min:5'],
            'user_id' => 'required',
        ]);

        if($validated['name'] != Auth::user()->username || 
            $validated['email'] != Auth::user()->email ||
            $validated['user_id'] != Auth::user()->user_id){

            abort(403, 'HA HA YOU ARE HACKER!!!');

        }
        

        $contact = new Contact();

        $contact->name = $validated['name'];
        $contact->email = $validated['email'];
        $contact->contact = $validated['contact'];
        $contact->user_id = $validated['user_id'];

        $contact->save();


        return redirect()->back()->with('accept', 'MESSAGE SENDED');
    }









    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
