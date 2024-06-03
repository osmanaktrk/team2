<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function showAll(){
        $posts = Post::latest()->get();

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function postCreate($topicId , Request $request)
    {
        $validated = $request->validate([
            "post_title" => ["required", "min:5"],
            "content" => ["required", "min:5"],
        ]);
        
        $post = new Post();
        $post->topic_id = $topicId;
        $post->user_id = Auth::user()->id;
        $post->title = $validated["post_title"];
        $post->content = $validated["content"];
        $post->save();
        
        return redirect()->back()->with("status", "Post Created");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        "topic_id"=>"required",
        "post_title"=>["required", "min:5"],
        "content" =>["required", "min:5"],
    ]);
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
    public function edit($postId, Request $request)
    {
        $validated = $request->validate([
            "post_title"=>["required", "min:5"],
            "content" =>["required", "min:5"],
        ]);

        $post = Post::findOrFail($postId);
        $post->title = $validated["post_title"];
        $post->content = $validated["content"];
        $post->save();

        return redirect()->back()->with("status", "Post Edited");
    }

    public function delete($postId){

        Post::findOrFail($postId)->delete();

        return redirect()->back()->with("status", "Post Deleted");

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
