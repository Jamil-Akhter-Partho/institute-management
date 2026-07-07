@extends('layouts.admin')

@section('content')

<div class="page-header">
    <h2>Add New Course</h2>
</div>

<div class="form-card">

    <form action="{{ route('course.store') }}" method="POST">

        @csrf

        <div class="form-group">

            <label>Course Name</label>

            <input
                type="text"
                name="course_name"
                placeholder="Enter Course Name"
                value="{{ old('course_name') }}">

            @error('course_name')
                <small>{{ $message }}</small>
            @enderror

        </div>

        <div class="form-group">

            <label>Description</label>

            <textarea
                name="description"
                rows="5"
                placeholder="Course Description">{{ old('description') }}</textarea>

        </div>

        <button class="save-btn">

            Save Course

        </button>

    </form>

</div>

@endsection
