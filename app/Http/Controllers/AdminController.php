<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Comment;
use App\Models\CommentLike;
use App\Models\Contact;
use App\Models\Cover;
use App\Models\Favorite;
use App\Models\FileModel; 
use App\Models\Message;
use App\Models\Post;
use App\Models\PostLike;
use App\Models\Readed;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\UsertypeRequest;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('layouts.admin');
    }

    /**
     * Show the form for creating a new resource.
     */

     public function showAdminContactMessages(){
        
        $contacts = Contact::all();

        
        return view('admin.contact-messages', compact('contacts'));
    }
    
    public function deleteContact(Request $request){
        $request->validate([
            'contactId' => 'required',
        ]);

        Contact::findOrFail($request->contactId)->delete();


        return redirect()->back()->with('warm', 'CONTACT DELETED');
    }



    public function showAdminUsertypeRequests(){
       
        $usertyperequests = UsertypeRequest::all();

        
        return view('admin.usertype-requests', compact('usertyperequests'));
    }


    public function accept(Request $request){
        $validated = $request->validate([
            "requestId" => 'required',
        ]);

        $requestId = $validated['requestId'];
        $usertype = UsertypeRequest::findOrFail($requestId);
        $userId = $usertype->user_id;
        $user = User::findOrFail($userId);
        $user->usertype->$usertype->request;
        $user->save();
        $usertype->delete();



        return redirect()->back()->with("accept", "REQUEST ACCEPTED");
    }

    public function reject(Request $request){
        $validated = $request->validate([
            "requestId" => 'required',
        ]);
        $requestId = $validated['requestId'];
        UsertypeRequest::findOrFail($requestId)->delete();

        return redirect()->back()->with('warm', "REQUEST REJECTED");
    }


    public function resetPassword(Request $request)
    {
        $validated = $request->validate([
            "userId" => 'required',
            "password" => 'required',
        ]);

        $userId = $validated['userId'];
        $password = $validated['password'];
        $user = User::findOrFail($userId);

        $user->password = Hash::make($password);
        $user->save();


        return redirect()->back()->with("accept", "USER PASSWORD RESETTED");
    }

    public function userBlock(Request $request)
    {
        $validated = $request->validate([
            "userId" => "required",
        ]);

        $id = $validated["userId"];
        $user = User::findOrFail($id);
        $user->is_banned = true;
        $user->save();

        return redirect()->back()->with("warm", "USER BANNED");
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        if(isset($user->avatar)){
           File::delete(public_path($user->avatar)); 
        }
        
        $user->delete();
        


        return redirect()->back()->with("warm", "USER DELETED");
    }



    public function showAdminUsers()
    {
        $users = User::all();



        return view('admin.users', compact('users'));
    }

    public function showAdminPostCategories(){
       

        $categories = Category::all();

        
        return view('admin.post-categories', compact("categories"));
    }

    public function createCategory(Request $request)
    {
       
        $category = new Category();

        $valitated = $request->validate([
            'category' => ['required', 'min:2', 'unique:App\Models\Category,category'],
        ]);

        $category->category = $valitated['category'];
        $category->save();

        return redirect()->back()->with('accept', 'CATEGORY CREATED');

    }

    public function deleteCategory($id){

        $generalId = Category::where('category', 'General')->first()->id;

        if($id == $generalId){
        
            return redirect()->back()->with('warm', 'CATEGORY GENERAL CAN NOT DELETED');
        }

        


        Post::where('category_id', $id)->update([
            'category_id' => $generalId,
        ]);


        Category::findOrFail($id)->delete();

        return redirect()->back()->with('warm', 'CATEGORY DELETED');

    }


    public function editCategory($id, Request $request)
    {
       
        $category = Category::findOrFail($id);

        $valitated = $request->validate([
            'category' => ['required', 'min:2', 'unique:App\Models\Category,category'],
        ]);

        $category->category = $valitated['category'];
        $category->save();

        return redirect()->back()->with('status', 'CATEGORY EDITED');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
