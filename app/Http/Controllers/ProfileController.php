<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Category;
use App\Models\Comment;
use App\Models\CommentLike;
use App\Models\Contact;
use App\Models\Cover;
use App\Models\Favorite;
use App\Models\FileModel; 
use App\Models\Message;
use App\Models\Post;
use App\Models\PostLike;
use App\Models\Readed;
use App\Models\User;
use Illuminate\Support\Facades\File;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit($id, Request $request): View
    {

        
        $users = User::all();
    
        return view('profile-index', [
            'user' => $request->user(),
        ], compact('users'));
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return redirect()->back()->with('accept', 'PROFILE UPDATED');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {




        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        $avatar = $user->avatar;

        File::delete(public_path($avatar));








        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
