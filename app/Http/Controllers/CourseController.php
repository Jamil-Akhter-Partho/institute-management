<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::latest()->get();

        return view('admin.course.index', compact('courses'));
    }

    public function create()
    {
        return view('admin.course.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_name' => 'required|max:255',
        ]);

        Course::create([
            'course_name' => $request->course_name,
            'description' => $request->description,
        ]);

        return redirect()->route('course.index')
            ->with('success', 'Course created successfully.');
    }
}
