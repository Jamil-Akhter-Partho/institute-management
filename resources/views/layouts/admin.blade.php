<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Institute Management</title>

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>

<div class="wrapper">

    <!-- Sidebar -->

    <div class="sidebar">

        <h2>Institute</h2>

        <ul>

            <li>
                <a href="{{ route('admin.head-office') }}">
                    🏠 Head Office
                </a>
            </li>

            <li>
                <a href="#">
                    🏢 Branch
                </a>
            </li>

            <li>
                <a href="#">
                    👨‍🎓 Students
                </a>
            </li>

        </ul>

        <form action="{{ route('logout') }}" method="POST">

            @csrf

            <button class="logout-btn">
                Logout
            </button>

        </form>

    </div>

    <!-- Main Content -->

    <div class="content">

        <div class="topbar">

            <h2>Institute Management System</h2>

            <p>Welcome, {{ auth()->user()->name }}</p>

        </div>

        @yield('content')

    </div>

</div>

</body>
</html>
