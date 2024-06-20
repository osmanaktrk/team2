<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{

    public function avatarUpload(Request $request){
       
        $request->validate([
            'avatar' => ['required', 'image', 'max:10240'],

        ]);


         

        $avatarName = Auth::user()->email;
        $avatarExt = $request->avatar->getClientOriginalExtension();
        $avatar = $avatarName.'.'.$avatarExt;
        $request->avatar->move(public_path('img/users/'), $avatar);

        
        User::where('id', Auth::user()->id)->update([
            'avatar' => 'img/users/'.$avatar,
        ]);
        

        return redirect()->back()->with('accept', 'Profile Photo Updated');
    }

 
    
    public function educationUpdate(Request $request){

        $request->validate([
            'education_type' => 'required',
            'education_name' => 'required',
            "education_year" => ['required', 'integer', 'min:1', 'max:3'],
        ]);

        User::where('id', Auth::user()->id)->update([
            'education_type' => $request->education_type,
            'education_name' => $request->education_name,
            'education_year' => $request->education_year,
        ]);

        return redirect()->back()->with('accept', 'Education Informations Updated');


    }





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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
