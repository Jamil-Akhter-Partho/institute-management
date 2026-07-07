<!DOCTYPE html>
<html>
<head>

    <title>My Branch</title>

    <link rel="stylesheet" href="{{ asset('css/student.css') }}">

</head>

<body>

<div class="container">

    <h1>My Branch</h1>

    <div class="card">

        <p><strong>Branch:</strong> Not Assigned</p>

        <p><strong>Status:</strong> Waiting for Admin Assignment</p>

    </div>

    <a href="{{ route('student.dashboard') }}" class="btn">

        Back Dashboard

    </a>

</div>

</body>
</html>
