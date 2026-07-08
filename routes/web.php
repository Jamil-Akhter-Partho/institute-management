<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.submit');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::middleware('admin')->group(function () {

    Route::get('/admin/head-office', [AdminController::class, 'headOffice'])
        ->name('admin.head-office');

    // Course
    Route::get('/admin/course', [CourseController::class, 'index'])
        ->name('course.index');

    Route::get('/admin/course/create', [CourseController::class, 'create'])
        ->name('course.create');

    Route::post('/admin/course/store', [CourseController::class, 'store'])
        ->name('course.store');

    // Students
    Route::get('/admin/students', [AdminController::class, 'students'])
        ->name('admin.students');

    Route::post('/admin/activate/{id}', [AdminController::class, 'activate'])
        ->name('admin.activate');

    // Branch
    Route::get('/admin/branch', [AdminController::class, 'branch'])
        ->name('admin.branch');

});

/*
|--------------------------------------------------------------------------
| Student Routes
|--------------------------------------------------------------------------
*/

Route::middleware('student')->group(function () {

    Route::get('/student/dashboard', [StudentController::class, 'dashboard'])
        ->name('student.dashboard');

    Route::get('/student/branch', [StudentController::class, 'branch'])
        ->name('student.branch');

    Route::get('/student/buy/{id}', [StudentController::class,'buyCourse'])
    ->name('student.buy');

    Route::post('/student/confirm/{id}',
    [StudentController::class,'confirmPurchase'])
    ->name('student.confirm');

});
