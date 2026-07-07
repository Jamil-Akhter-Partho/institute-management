@extends('layouts.admin')

@section('content')

<div class="page-header">

    <h2>All Courses</h2>

    <a href="{{ route('course.create') }}" class="add-btn">

        + Add Course

    </a>

</div>

<table class="table">

    <thead>

        <tr>

            <th>ID</th>

            <th>Course Name</th>

            <th>Description</th>

        </tr>

    </thead>

    <tbody>

        @forelse($courses as $course)

            <tr>

                <td>{{ $course->id }}</td>

                <td>{{ $course->course_name }}</td>

                <td>{{ $course->description }}</td>

            </tr>

        @empty

            <tr>

                <td colspan="3">

                    No Course Found

                </td>

            </tr>

        @endforelse

    </tbody>

</table>

@endsection
