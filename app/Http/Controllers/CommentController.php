<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cover;
use App\Models\Extra;
use Illuminate\Support\Facades\File;



class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $validated = $request->validate([
            'post_id' => 'required',
            'comment_cover' => ['image', 'max:10240'],
            'comment' =>['required', 'min:5'],
            'comment_file_name' => 'min:5',
            'comment_file' => ['file', 'max:10240', 'mimes:zip,rar,7zip'],
        ]);


        $comment = new Comment();

        $comment->comment = $validated['comment'];
        $comment->user_id = Auth::user()->id;
        $comment->post_id = $validated['post_id'];
        $comment->save();





        if(isset($validated['comment_cover'])){

            $comment_cover = new Cover();

            $comment_cover_ext = $validated['comment_cover']->getClientOriginalExtension();
            $comment_cover_name = time().rand(5, 10).'.'.$comment_cover_ext;
            $validated['comment_cover']->move(public_path('img/covers/'), $comment_cover_name);

            $comment_cover->cover = 'img/covers/'.$comment_cover_name;
            $comment_cover->user_id = Auth::user()->id;
            $comment_cover->cover_id = $comment->id;
            $comment_cover->save();
            $comment->cover_id = $comment_cover->id;
            $comment->save();



        }


        if(isset($validated['comment_file_name']) && isset($validated['comment_file'])){

            $comment_file = new Extra();

            $comment_file_ext = $validated['comment_file']->getClientOriginalExtension();
            $comment_file_name = $validated['comment_file_name'].time().rand(5, 10).'.'.$comment_file_ext;

            $validated['comment_file']->move(public_path('extras/'), $comment_file_name);

            $comment_file->name = $comment_file_name;
            $comment_file->file = 'extras/'.$comment_file_name;
            $comment_file->user_id = Auth::user()->id;
            $comment_file->comment_id = $comment->id;
            $comment_file->save();
            $comment->extra_id = $comment_file->id;
            $comment->save();

        }
        

        return redirect()->back()->with('accept', 'COMMENT CREATED');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required',
            'comment_cover' => ['image', 'max:10240'],
            'comment' =>['required', 'min:5'],
            'comment_file_name' => 'min:5',
            'comment_file' => ['file', 'max:10240', 'mimes:zip,rar,7zip'],
        ]);

        $comment_id = $validated['id'];
        $comment = Comment::findOrFail($comment_id);


        $comment->comment = $validated['comment'];
        $comment->save();





        if(isset($validated['comment_cover'])){

            $comment_cover = Cover::where('comment_id', $comment_id)->get();
            File::delete($comment_cover->cover);



            $comment_cover_ext = $validated['comment_cover']->getClientOriginalExtension();
            $comment_cover_name = time().rand(5, 10).'.'.$comment_cover_ext;
            $validated['comment_cover']->move(public_path('img/covers/'), $comment_cover_name);

            $comment_cover->cover = 'img/covers/'.$comment_cover_name;
            $comment_cover->cover_id = $comment->id;
            $comment_cover->save();
            $comment->cover_id = $comment_cover->id;
            $comment->save();



        }


        if(isset($validated['comment_file_name']) && isset($validated['comment_file'])){

            $comment_file = Extra::where('comment_id', $comment_id)->get();
            File::delete($comment_file->file);

            $comment_file_ext = $validated['comment_file']->getClientOriginalExtension();
            $comment_file_name = $validated['comment_file_name'].time().rand(5, 10).'.'.$comment_file_ext;

            $validated['comment_file']->move(public_path('extras/'), $comment_file_name);

            $comment_file->name = $comment_file_name;
            $comment_file->file = 'public/extras/'.$comment_file_name;
            $comment_file->comment_id = $comment->id;
            $comment_file->save();
            $comment->extra_id = $comment_file->id;
            $comment->save();

        }






        return redirect()->back()->with('accept', 'COMMENT EDITED');

        
    }


    public function delete(){

    }
    /**
     * Update the specified resource in storage.
     */
    public function edit(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
