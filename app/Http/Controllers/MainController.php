<?php

namespace App\Http\Controllers;


use App\Models\CategoryModel;
use App\Models\CommentModel;
use App\Models\CommentLike;
use App\Models\ContactModel;
use App\Models\CoverModel;
use App\Models\FavoriteModel;
use App\Models\FileModel; 
use App\Models\MessageModel;
use App\Models\PostModel;
use App\Models\PostLike;
use App\Models\ReadedModel;
use App\Models\UserModel;
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
        $posts = PostModel::all();

        $categories = CategoryModel::all();

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
    public function show(PostModel $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PostModel $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PostModel $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PostModel $post)
    {
        //
    }
}
