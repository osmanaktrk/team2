<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function photoUpload(Request $request){
        $request->validate([
            'photo' => ['required', 'image', 'max:10240', 'extensions:jpg, jpeg, png, bmp, gif, svg, webp']
        ]);

        $imgname = Auth::user()->email;
        $imgext = $request->photo->getClientOriginalExtension();
        $img = $imgname.'.'.$imgext;
        $request->photo->move(public_path('img/users'), $img);

        User::where('id', Auth::user()->id)->update([
            'profile_photo_path' => 'img/users/'.$img,
        ]);
        
        return redirect()->route('profile.edit')->with('status', 'Profile Photo Updated');
    }

    public function photoDelete(){
        
        File::delete(Auth::user()->profile_photo_path);

        User::where('id', Auth::user()->id)->update([
            'profile_photo_path' => 'img/users/default.svg',
        ]);

        return redirect()->route('profile.edit')->with('status', 'Profile Photo Deleted');
    }

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $courses = Course::all();
        $schoolYears = ["2023-2024", "2024-2025", "2025-2026", "2026-2027", "2027-2028", "2028-2029", "2029-2030"];
        return view('profile.edit', [
            'user' => $request->user(),
            'courses' => $courses,
            'schoolYears' => $schoolYears,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        // Update the username
        if ($request->has('username')) {
            $request->user()->username = $request->input('username');
        }
        
        // If the email address is changed, the email verification timestamp is reset
        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

            // Check if a course ID is provided in the request
        if ($request->has('course_id')) {
            // Find the course by ID
            $course = Course::find($request->input('course_id'));

            // Associate the course with the user
            $user->course()->associate($course);
        }

        if ($request->has('education_year')) {
            $schoolYear = $request->input('course_id');
            $request->user()->education_year = $schoolYear;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
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

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
