<?php

namespace App\Http\Controllers;

use App\Models\Favorite;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function addFavorite($post_id)
    {
        
      $favorite = new Favorite();

      $favorite->post_id = $post_id;
      $favorite->user_id = Auth::user()->id;
      $favorite->save();



        return redirect()->back()->with('accept', 'FAVORITE ADDET');


    }



    /**
     * Show the form for creating a new resource.
     */
    public function deleteFavorite($post_id)
    {
        $favorite = Favorite::where('post_id', $post_id)->where('user_id', Auth::user()->id);
        $favorite->delete();

        return redirect()->back()->with('warm', 'FAVORITE DELATED');

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
    public function show(Favorite $favory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Favorite $favory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Favorite $favory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Favorite $favory)
    {
        //
    }
}
