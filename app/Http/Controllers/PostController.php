<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Favorite;
use App\Models\Post;
use App\Models\PostDislike;
use App\Models\PostLike;
use App\Models\Readed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $post = Post::findOrFail($id);

        $is_readed = Readed::where('post_id', $id)->where('user_id', Auth::user()->id)->exists();
        $is_liked = PostLike::where('post_id', $id)->where('user_id', Auth::user()->id)->exists();
        $is_disliked = PostDislike::where('post_id', $id)->where('user_id', Auth::user()->id)->exists();
        
        $is_favorited = Favorite::where('post_id', $id)->where('user_id', Auth::user()->id)->exists();

        
        if (!$is_readed) {

            $readed = new Readed();

            $readed->post_id = $id;
            $readed->user_id = Auth::user()->id;

            $readed->save();
        }


        return view('post.index', compact('post', 'is_liked', 'is_disliked', 'is_readed', 'is_favorited'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('post.create');
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
