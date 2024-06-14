<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{

    public function avatarUpload(Request $request){
        $request->validate([
            'avatar' => ['required', 'image', 'max:10240']
        ]);

        $avatarName = Auth::user()->email;
        $avatarExt = $request->avatar->getClientOriginalExtension();
        $avatar = $avatarName.'.'.$avatarExt;
        $request->avatar->move(public_path('img/users'), $avatar);

        UserModel::where('id', Auth::user()->id)->update([
            'profile_photo_path' => 'img/users/'.$avatar,
        ]);
        

        return redirect()->route('profile.edit')->with('status', 'Profile Photo Updated');
    }

    public function avatarDelete(){
        
        File::delete(Auth::user()->avatar);

        UserModel::where('id', Auth::user()->id)->update([
            'avatar' => 'img/users/default.svg',
        ]);

        return redirect()->route('profile.edit')->with('status', 'Profile Photo Deleted');


    }
    
    public function educationUpdate(Request $request){

        $request->validate([
            'education_type' => 'required',
            'education_name' => 'required',
            "education_year" => ['required', 'digits:1'],
        ]);

        UserModel::where('id', Auth::user()->id)->update([
            'education_type' => $request->education_type,
            'education_name' => $request->education_name,
            'education_year' => $request->education_year,
        ]);

        return redirect()->back()->with('status', 'Education Informations Updated');


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
    public function show(UserModel $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserModel $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserModel $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserModel $user)
    {
        //
    }
}
