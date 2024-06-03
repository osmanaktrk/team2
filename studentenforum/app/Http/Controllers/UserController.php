<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function photoUpload(Request $request){
        $request->validate([
            'photo' => ['required', 'image', 'max:10240', 'extensions:jpg, jpeg, png, bmp, gif, svg, webp']
        ]);

        $imgname = Auth::user()->email;
        $imgext = $request->photo->getClientOriginalExtension();
        $img = $imgname.'.'.$imgext;
        $request->photo->move(public_path('img/users'), $img);

        User::where('id', Auth::user()->id)->update([
            'profile_photo_path' => 'img/users/'.$img,
        ]);
        

        return redirect()->route('profile.edit')->with('status', 'Profile Photo Updated');
    }

    public function photoDelete(){
        
        File::delete(Auth::user()->profile_photo_path);

        User::where('id', Auth::user()->id)->update([
            'profile_photo_path' => 'img/users/default.svg',
        ]);

        return redirect()->route('profile.edit')->with('status', 'Profile Photo Deleted');


    }
    
    public function educationUpdate(Request $request){

        $request->validate([
            'education_type' => 'required',
            'education_name' => 'required',
            "education_year" => ['required', 'digits:1'],
        ]);

        User::where('id', Auth::user()->id)->update([
            'education_type' => $request->education_type,
            'education_name' => $request->education_name,
            'education_year' => $request->education_year,
        ]);

        return redirect()->back()->with('status', 'Education Informations Updated');


    }


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
