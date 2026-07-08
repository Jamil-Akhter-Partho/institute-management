@extends('layouts.admin')

@section('content')

<h2 class="page-title">
    Registered Students
</h2>

<table class="table">

    <thead>

        <tr>

            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>District</th>
            <th>Batch</th>
            <th>Status</th>
            <th>Action</th>

        </tr>

    </thead>

    <tbody>

    @foreach($students as $student)

        <tr>

            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->phone }}</td>
            <td>{{ $student->district }}</td>
            <td>{{ $student->shift }}</td>
            <td>{{ $student->status }}</td>

<td>

<form action="{{ route('admin.activate', $student->id) }}" method="POST">

    @csrf

    @if($student->status == 'Pending')

        <button type="submit">
            Activate
        </button>

    @else

        <button type="submit">
            Deactivate
        </button>

    @endif

</form>

</td>

        </tr>

    @endforeach

    </tbody>

</table>

@endsection
