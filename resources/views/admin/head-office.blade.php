@extends('layouts.admin')

@section('content')

<h2 class="page-title">
    হেড অফিসের ড্যাশবোর্ড
</h2>

<div class="card-grid">

    <div class="dashboard-card">

    <h3>Course</h3>

    <a href="{{ route('course.create') }}">
    <button>Add</button>
    </a>

    <a href="{{ route('course.index') }}">
    <button>View</button>
    </a>

    </div>
    <div class="dashboard-card">
        <h3>Course Category</h3>

        <button>Add</button>

        <button>View</button>
    </div>

    <div class="dashboard-card">
        <h3>Branch</h3>

        <button>Add</button>

        <button>View</button>
    </div>

    <div class="dashboard-card">
        <h3>Group</h3>

        <button>Add</button>

        <button>View</button>
    </div>

    <div class="dashboard-card">
        <h3>Batch</h3>

        <button>Add</button>

        <button>View</button>
    </div>

</div>

@endsection
