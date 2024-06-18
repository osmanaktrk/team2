<?php

namespace App\Http\Controllers;

use App\Models\UsertypeRequest;
use Illuminate\Http\Request;

class UsertypeRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required',
            'usertype' => 'required',
        ]);

        $usertype = new UsertypeRequest();

        
        $usertype->request = $validated['usertype'];
        $usertype->user_id = $validated['user_id'];

        $usertype->save();

        return redirect()->back()->with("accept", "REQUEST SENDED");
    }

    /**
     * Display the specified resource.
     */
    public function show(UsertypeRequest $usertypeRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UsertypeRequest $usertypeRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UsertypeRequest $usertypeRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UsertypeRequest $usertypeRequest)
    {
        //
    }
}
