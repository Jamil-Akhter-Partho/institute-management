<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function dashboard()
    {
        $student = Auth::user();

        return view('student.dashboard', compact('student'));
    }

    public function branch()
    {
        $student = Auth::user();

        return view('student.branch', compact('student'));
    }
}
