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
    public function redirectToMain(Request $request): View
    {
        $posts = Post::withCount('comments')
            ->with(['category', 'tags'])
            ->latest()
            ->paginate(20);

        return view('main', [
            'posts' => $posts,
        ]);
    }
}
