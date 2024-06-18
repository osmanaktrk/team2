<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Cover;
use App\Models\Extra;
use App\Models\Favorite;
use App\Models\Post;
use App\Models\PostDislike;
use App\Models\PostLike;
use App\Models\Readed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


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


        $categories = Category::all();
        
        return view('post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required',
            'post_cover' => ['image', 'max:10240'],
            'title' =>['required', 'min:5'],
            'post_file_name' => '',
            'post_file' => ['file', 'max:10240', 'mimes:zip,rar,7zip'],
            'comment_cover' => ['image', 'max:10240'],
            'comment' =>['required', 'min:5'],
            'comment_file_name' => '',
            'comment_file' => ['file', 'max:10240', 'mimes:zip,rar,7zip'],
        ]);


        $post = new Post();

        if(Auth::user()->usertype == 'admin'){
            $post->is_published = true;

        }else{
            $post->is_published = false;

        }


        $comment = new Comment();


        $post->category_id = $validated['category_id'];
        $post->user_id = Auth::user()->id;
        $post->title = $validated['title'];
        $post->save();

        if(isset($validated['post_cover'])){

            $post_cover = new Cover();

            $post_cover_ext = $validated['post_cover']->getClientOriginalExtension();
            $post_cover_name = time().rand(1, 10000000000).'.'.$post_cover_ext;
            $validated['post_cover']->move(public_path('img/covers/'), $post_cover_name);

            $post_cover->cover = 'img/covers/'.$post_cover_name;
            $post_cover->user_id = Auth::user()->id;
            $post_cover->post_id = $post->id;
            $post_cover->save();
            $post->cover_id = $post_cover->id;
            $post->save();



        }


        if(isset($validated['post_file_name']) && isset($validated['post_file'])){

            $post_file = new Extra();

            $post_file_ext = $validated['post_file']->getClientOriginalExtension();
            $post_file_name = $validated['post_file_name'].time().rand(1, 10000000000).'.'.$post_file_ext;

            $validated['post_file']->move(public_path('extras/'), $post_file_name);

            $post_file->name = $validated['post_file_name'];
            $post_file->file = 'extras/'.$post_file_name;
            $post_file->user_id = Auth::user()->id;
            $post_file->post_id = $post->id;
            $post_file->save();
            $post->extra_id = $post_file->id;
            $post->save();

        }




        $comment->comment = $validated['comment'];
        $comment->user_id = Auth::user()->id;
        $comment->post_id = $post->id;
        $comment->save();





        if(isset($validated['comment_cover'])){

            $comment_cover = new Cover();

            $comment_cover_ext = $validated['comment_cover']->getClientOriginalExtension();
            $comment_cover_name = time().rand(1, 10000000000).'.'.$comment_cover_ext;
            $validated['comment_cover']->move(public_path('img/covers/'), $comment_cover_name);

            $comment_cover->cover = 'img/covers/'.$comment_cover_name;
            $comment_cover->user_id = Auth::user()->id;
            $comment_cover->comment_id = $comment->id;
            $comment_cover->save();
            $comment->cover_id = $comment_cover->id;
            $comment->save();



        }


        if(isset($validated['comment_file_name']) && isset($validated['comment_file'])){

            $comment_file = new Extra();

            $comment_file_ext = $validated['comment_file']->getClientOriginalExtension();
            $comment_file_name = $validated['comment_file_name'].time().rand(1, 10000000000).'.'.$comment_file_ext;

            $validated['comment_file']->move(public_path('extras/'), $comment_file_name);

            $comment_file->name = $validated['comment_file_name'];
            $comment_file->file = 'extras/'.$comment_file_name;
            $comment_file->user_id = Auth::user()->id;
            $comment_file->comment_id = $comment->id;
            $comment_file->save();
            $comment->extra_id = $comment_file->id;
            $comment->save();

        }

        return redirect()->route('main')->with('accept', 'POST CREATED');
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
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        $categories = Category::all();

        return view('post.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {


        $validated = $request->validate([
            'category_id' => 'required',
            'post_cover' => ['image', 'max:10240'],
            'title' =>['required', 'min:5'],
            'post_file_name' => '',
            'post_file' => ['file', 'max:10240', 'mimes:zip,rar,7zip'],
        ]);



        $post = Post::findOrFail($id);

        if(Auth::user()->usertype == 'admin'){
            $post->is_published = true;

        }

        $post->category_id = $validated['category_id'];
        $post->title = $validated['title'];
        $post->save();

        if(isset($validated['post_cover'])){

            $post_cover_ex = Cover::where('post_id', $id);

            if($post_cover_ex->exists()){
                File::delete(public_path($post_cover_ex->first()->cover));
                $post_cover = Cover::where('post_id', $id)->first();
                

            }else{
                $post_cover = new Cover();
            }

            

            $post_cover_ext = $validated['post_cover']->getClientOriginalExtension();
            $post_cover_name = time().rand(1, 10000000000).'.'.$post_cover_ext;
            $validated['post_cover']->move(public_path('img/covers/'), $post_cover_name);

            $post_cover->cover = 'img/covers/'.$post_cover_name;
            $post_cover->post_id = $post->id;
            $post_cover->user_id = Auth::user()->id;
            $post_cover->save();
            $post->cover_id = $post_cover->id;
            $post->save();



        }

        if(isset($request->delete)){

            $post_file = Extra::where('post_id', $id)->first();

            File::delete(public_path($post_file->file));

            $post->extra_id = null;
            $post->save();
            $post_file->delete();
        }


        if(isset($validated['post_file_name']) && isset($validated['post_file'])){

            $post_file_ex = Extra::where('post_id', $id);

            if($post_file_ex->exists()){
                File::delete(public_path($post_file_ex->first()->file));
                $post_file = Extra::where('post_id', $id)->first();

            }else{
                $post_file = new Extra();
                
            }

            

            $post_file_ext = $validated['post_file']->getClientOriginalExtension();
            $post_file_name = $validated['post_file_name'].time().rand(1, 10000000000).'.'.$post_file_ext;

            $validated['post_file']->move(public_path('extras/'), $post_file_name);

            $post_file->name = $validated['post_file_name'];
            $post_file->file = 'extras/'.$post_file_name;
            $post_file->post_id = $post->id;
            $post_file->user_id = Auth::user()->id;
            $post_file->save();
            $post->extra_id = $post_file->id;
            $post->save();

        }








        return redirect()->back()->with('accept', 'POST EDITED');

    }




    public function delete($id){


        Post::findOrFail($id)->delete();
     
        $postLike = PostLike::where('post_id', $id);

        if($postLike->exists()){
            $postLike->delete();
        }

        $postDislike = PostDislike::where('post_id', $id);

        if($postDislike->exists()){
            $postDislike->delete();
        }

        $favorite = Favorite::where('post_id', $id);

        if($favorite->exists()){
            $favorite->delete();
        }

        $readed = Readed::where('post_id', $id);

        if($readed ->exists()){
            $readed->delete();
        }

        $postCover = Cover::where('post_id', $id);

        if($postCover->exists()){
            File::delete(public_path($postCover->first()->cover));
            $postCover->delete();
        }

    

        $postExtra = Extra::where('post_id', $id);


        if($postExtra->exists()){
            File::delete(public_path($postExtra->first()->file));
            $postExtra->delete();
        }

        

        $comments = Comment::all()->where('post_id', $id);

        foreach ($comments as $comment) {
            
            
            
            $commentCover = Cover::where('comment_id', $comment->id);

            if($commentCover->exists()){
                File::delete(public_path($commentCover->first()->cover));
                $commentCover->delete();
            }
            $commentExtra = Extra::where('comment_id', $comment->id);

            if($commentExtra->exists()){
                File::delete(public_path($commentExtra->first()->file));
                $commentExtra->delete();
            }
            $comment->delete();
            
        }

        
        

       return redirect()->route('main')->with('warm', 'POST DELETED');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
