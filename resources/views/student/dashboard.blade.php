<!DOCTYPE html>
<html>
<head>

    <title>Student Dashboard</title>

    <link rel="stylesheet" href="{{ asset('css/student.css') }}">

</head>
<body>

<div class="container">

    <h1>Student Dashboard</h1>

    <div class="profile-card">

    <h2>My Information</h2>

    <p><strong>Name :</strong> {{ $student->name }}</p>

    <p><strong>Email :</strong> {{ $student->email }}</p>

    <p><strong>Phone :</strong> {{ $student->phone }}</p>

    <p><strong>District :</strong> {{ $student->district }}</p>

    <p><strong>Batch :</strong> {{ $student->shift }}</p>

    <hr><br>

    <h3>Enrollment Status</h3>

    @if($student->status == 'Pending')

        <p style="color:orange;">
            🟡 Pending Approval
        </p>

    @else

        <p style="color:green;">
            🟢 Active
        </p>

    @endif

</div>

    <h2 class="title">Available Courses</h2>

    <div class="course-grid">

       @foreach($courses as $course)

<div class="course-card">

    <h3>{{ $course->course_name }}</h3>

    <p>{{ $course->description }}</p>

    <a href="{{ route('student.buy',$course->id) }}">

        <button>

            Buy Course

        </button>

    </a>

</div>

@endforeach

    </div>

</div>

</body>
</html>
