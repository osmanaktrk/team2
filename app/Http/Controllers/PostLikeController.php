<?php

namespace App\Http\Controllers;

use App\Models\PostLike;
use App\Models\PostDislike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostLikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function postLike($id)
    {
        

        $like = new PostLike();
        $like->post_id = $id;
        $like->user_id = Auth::user()->id;
        $like->save();

        $is_disliked = PostDislike::where('post_id', $id)->where('user_id', Auth::user()->id)->exists();

        if($is_disliked){
            PostDislike::where('post_id', $id)->where('user_id', Auth::user()->id)->delete();

        }



        return redirect()->back()->with('accept', 'POST LIKED');
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
    public function show(PostLike $postLike)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PostLike $postLike)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PostLike $postLike)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PostLike $postLike)
    {
        //
    }
}
