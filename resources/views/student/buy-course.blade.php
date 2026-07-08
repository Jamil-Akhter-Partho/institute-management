            <!DOCTYPE html>
            <html>

            <head>

            <title>Buy Course</title>

            <link rel="stylesheet" href="{{ asset('css/student.css') }}">

            </head>

            <body>

            <div class="container">

            <div class="profile-card">

            <h2>Course Confirmation</h2>

            <br>

            <h3>{{ $course->course_name }}</h3>

            <p>{{ $course->description }}</p>

            <br>

            <form action="{{ route('student.confirm',$course->id) }}" method="POST">

            @csrf

            <button class="btn">

            Confirm Purchase

            </button>

            </form>

            <br><br>

            <a href="{{ route('student.dashboard') }}">

            Back

            </a>

            </div>

            </div>

            </body>

            </html>
