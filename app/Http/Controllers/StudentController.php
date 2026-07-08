<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function dashboard()
    {
        $student = Auth::user();

        $courses = Course::all();

        return view('student.dashboard', compact('student','courses'));
    }

    public function branch()
    {
        $student = Auth::user();

        return view('student.branch', compact('student'));
    }
    public function buyCourse($id)
{
    $course = Course::findOrFail($id);

    return view('student.buy-course', compact('course'));
}
public function confirmPurchase($id)
{
    Enrollment::firstOrCreate([
        'user_id' => auth()->id(),
        'course_id' => $id,
    ]);

    return redirect()
        ->route('student.dashboard')
        ->with('success','Course enrolled successfully!');
}
}
