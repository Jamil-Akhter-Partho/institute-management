<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>জাহিদ ভাই এর প্রজেক্ট | Login</title>

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

<div class="login-container">

    <h2>এইখানে লগইন করা লাগবি</h2>

    <form action="{{ route('login.submit') }}" method="POST">

        @csrf

        <div class="form-group">

        <label>Email</label>

        <input
        type="email"
        name="email"
        value="{{ old('email') }}"
        placeholder="Enter Email">

        @error('email')
        <small style="color:red">{{ $message }}</small>
        @enderror

        </div>

        <div class="form-group">

        <label>Password</label>

        <input
        type="password"
        name="password"
        placeholder="Enter Password">

        </div>

        <button type="submit">
            Login
        </button>

    </form>

    <p>
        একাউন্ট নাই?

        <a href="{{ route('register') }}">
            রেজিস্টার করো
        </a>

    </p>

</div>

</body>
</html>
