<!DOCTYPE html>
<html>
<head>

    <title>Student Dashboard</title>

    <link rel="stylesheet" href="{{ asset('css/student.css') }}">

</head>

<body>

<div class="container">

    <h1>আমার ড্যাশবোর্ড</h1>

    <div class="card">

        <p><strong>Name:</strong> {{ $student->name }}</p>

        <p><strong>Email:</strong> {{ $student->email }}</p>

        <p><strong>Phone:</strong> {{ $student->phone }}</p>

        <p><strong>District:</strong> {{ $student->district }}</p>

        <p><strong>Batch:</strong> {{ $student->shift }}</p>

    </div>

    <a href="{{ route('student.branch') }}" class="btn">

        আমার ব্রাঞ্চ

    </a>

</div>

</body>
</html>
