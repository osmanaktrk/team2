<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Models\User;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $users = User::all();
        
        return view('message', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        $validated = $request->validate([
            'user_from' => 'required',
            'user_to' => 'required',
            'message' => ['required', 'min:5'],
        ]);

        $message = new Message();

        $message->user_id_from = $validated['user_from'];
        $message->user_id_to = $validated['user_to'];
        $message->message = $validated['message'];
        $message->save();

        return redirect()->back()->with("accept", "MESSAGE SENDED");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        //
    }
}
