<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Show Login Page
    public function login()
    {
        return view('auth.login');
    }

    // Show Registration Page
    public function register()
    {
        return view('auth.register');
    }

    // Store Student Registration
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|max:255',
            'email'    => 'required|email|unique:users,email',
            'phone' => 'required',
            'district' => 'required',
            'shift' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);

        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
           'phone' => $request->phone,
            'district' => $request->district,
            'shift' => $request->shift,
            'role' => 'student',
            'password' => Hash::make($request->password),
            ]);


        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }
    // Login User
        public function authenticate(Request $request)
        {
            $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            if (Auth::attempt($credentials)) {

                $request->session()->regenerate();

                if (Auth::user()->role == 'admin') {

                    return redirect('/admin/head-office');

                }

                return redirect('/student/dashboard');
            }

            return back()->withErrors([
                'email' => 'Invalid email or password.',
            ])->onlyInput('email');
        }

        // Logout
        public function logout(Request $request)
        {
            Auth::logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect('/login');
        }
}
