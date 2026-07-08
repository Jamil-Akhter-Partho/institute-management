<?php

namespace App\Http\Controllers;

use App\Models\User;

class AdminController extends Controller
{
    public function headOffice()
    {
        return view('admin.head-office');
    }

    public function students()
    {
        $students = User::where('role', 'student')->get();

        return view('admin.students', compact('students'));
    }

    public function branch()
{
    $branches = [

        [
            'name' => 'Dhaka Branch',
            'district' => 'Dhaka',
            'manager' => 'Mr. Rahim'
        ],

        [
            'name' => 'Chattogram Branch',
            'district' => 'Chattogram',
            'manager' => 'Mr. Karim'
        ],

        [
            'name' => 'Rajshahi Branch',
            'district' => 'Rajshahi',
            'manager' => 'Mr. Hasan'
        ]

    ];

    return view('admin.branch', compact('branches'));
}

public function activate($id)
{
    $student = User::findOrFail($id);

    if ($student->status == 'Pending') {
        $student->status = 'Active';
    } else {
        $student->status = 'Pending';
    }

    $student->save();

    return redirect()->back();
}
}
