<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index()
    {
        return view('post/create');
    }

    public function redirectToMain(Request $request): View
    {
        $posts = Post::withCount('comments')
            ->with(['category', 'tags'])
            ->latest()
            ->get();

        return view('main', [
            'posts' => $posts,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "category" => ["required"],
            "title" => ["required", "min:5"],
            "content" => ["required", "min:5"],
        ]);


        $post = new Post();
        $post->user_id = Auth::user()->id;
        $topic->category = $validated["category"];
        $post->title = $validated["title"];
        $post->content = $validated["content"];
        $post->save();
        
        
        return redirect()->route('main')->with("status", "Post Created");
    }
}
