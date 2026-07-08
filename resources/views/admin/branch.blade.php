@extends('layouts.admin')

@section('content')

<h2 class="page-title">
    Branch List
</h2>

<table class="table">

    <thead>

        <tr>

            <th>Branch</th>
            <th>District</th>
            <th>Manager</th>

        </tr>

    </thead>

    <tbody>

    @foreach($branches as $branch)

        <tr>

            <td>{{ $branch['name'] }}</td>
            <td>{{ $branch['district'] }}</td>
            <td>{{ $branch['manager'] }}</td>

        </tr>

    @endforeach

    </tbody>

</table>

@endsection
