<?php

namespace App\Http\Controllers;

use App\Models\PostDislike;
use App\Models\PostLike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostDislikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function postDislike($id)
    {
        
        $dislike = new PostDislike();
        $dislike->post_id = $id;
        $dislike->user_id = Auth::user()->id;
        $dislike->save();
        $is_liked = PostLike::where('post_id', $id)->where('user_id', Auth::user()->id)->exists();

       
        if($is_liked){
            PostLike::where('post_id', $id)->where('user_id', Auth::user()->id)->delete();
        }


        return redirect()->back()->with('warm', 'POST DISLIKED');

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
    public function show(PostDislike $postDislike)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PostDislike $postDislike)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PostDislike $postDislike)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PostDislike $postDislike)
    {
        //
    }
}
