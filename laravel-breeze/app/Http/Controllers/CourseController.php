<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function addCourse(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string|max:255',
        ]);

        // Create a new course
        $course = new Course();
        $course->title = $request->input('title');
        $course->type = $request->input('type');
        $course->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Course added successfully.');
    }
}
