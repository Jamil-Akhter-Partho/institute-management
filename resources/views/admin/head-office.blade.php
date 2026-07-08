@extends('layouts.admin')

@section('content')

<h2 class="page-title">
    Head Office Dashboard
</h2>

<div class="card-grid">

    <!-- Course -->
    <div class="dashboard-card">

        <h3>Course</h3>

        <a href="{{ route('course.create') }}">
            <button>Add Course</button>
        </a>

        <br><br>

        <a href="{{ route('course.index') }}">
            <button>Manage Courses</button>
        </a>

    </div>

    <!-- Students -->
    <div class="dashboard-card">

        <h3>Students</h3>

        <a href="{{ route('admin.students') }}">
            <button>Manage Students</button>
        </a>

    </div>

    <!-- Branch -->
    <div class="dashboard-card">

        <h3>Branch</h3>

        <a href="{{ route('admin.branch') }}">
            <button>View Branch</button>
        </a>

    </div>

</div>

@endsection
