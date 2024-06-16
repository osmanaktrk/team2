<?php

namespace App\Http\Controllers;

use App\Models\Readed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ReadedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function unread($id)
    {
        Readed::where('post_id', $id)->where('user_id', Auth::user()->id)->delete();

        return redirect()->route('main')->with('accept', 'POST SET AS UNREADED');
       
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Readed $readed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Readed $readed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Readed $readed)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Readed $readed)
    {
        //
    }
}
