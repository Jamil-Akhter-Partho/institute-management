<?php

namespace App\Http\Controllers;

use App\Models\User;

class AdminController extends Controller
{
    public function headOffice()
    {
        $pendingStudents = 0;
        $activeStudents = User::where('role', 'student')->count();

        return view('admin.head-office', compact(
            'pendingStudents',
            'activeStudents'
        ));
    }
}
