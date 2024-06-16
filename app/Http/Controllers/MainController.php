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


use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::where('is_published', true)->latest()->get();

        $categories = Category::all();

        return view('main', compact('posts', 'categories'));

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
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
