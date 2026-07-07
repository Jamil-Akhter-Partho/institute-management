<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>

<link rel="stylesheet" href="{{ asset('css/registration.css') }}">
</head>
<body>

<div class="register-container">

    <div class="register-header">
        <h2>👤 এইডা খালি Student এর জন্য</h2>
    </div>

    <form action="{{ route('register.store') }}" method="POST">

        @csrf

        <div class="form-grid">

            <!-- District -->

            <div class="form-group">
                <label>কোন জেলায় থাকো? <span>*</span></label>

                <select name="district">

                    <option value="">Select District</option>

                    <option>Dhaka</option>
                    <option>Chattogram</option>
                    <option>Rajshahi</option>
                    <option>Khulna</option>
                    <option>Barishal</option>
                    <option>Sylhet</option>
                    <option>Rangpur</option>
                    <option>Mymensingh</option>

                </select>

                @error('district')
                    <small>{{ $message }}</small>
                @enderror

            </div>

            <!-- Batch -->

            <div class="form-group">

                <label>কহন ক্লাস করবা? <span>*</span></label>

                <select name="shift">

                    <option value="">Select Batch</option>

                    <option value="Morning">সকালে</option>
                    <option value="Evening">সন্ধ্যা</option>
                    <option value="Night">রাতে আমার সাথে</option>

                </select>

                @error('shift')
                    <small>{{ $message }}</small>
                @enderror

            </div>

            <!-- Group -->

            <div class="form-group">

                <label>কোন গ্রুপ ? <span>*</span></label>

                <select name="group">

                    <option>A</option>
                    <option>B</option>
                    <option>C</option>

                </select>

            </div>

            <!-- Name -->

            <div class="form-group">

                <label>পুরা নাম কি? <span>*</span></label>

                <input
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    placeholder="পুরা নাম লেখো">

                @error('name')
                    <small>{{ $message }}</small>
                @enderror

            </div>

            <!-- Phone -->

            <div class="form-group">

                <label>ফোন নাম্বার দেও <span>*</span></label>

                <input
                    type="text"
                    name="phone"
                    value="{{ old('phone') }}"
                    placeholder="01XXXXXXXXX">

                @error('phone')
                    <small>{{ $message }}</small>
                @enderror

            </div>

            <!-- Email -->

            <div class="form-group">

                <label>ইমেইল দেও <span>*</span></label>

                <input
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="example@email.com">

                @error('email')
                    <small>{{ $message }}</small>
                @enderror

            </div>

        </div>

        <!-- Password -->

        <div class="form-group full-width">

            <label>পাসওয়ার্ড দেও <span>*</span></label>

            <input
                type="password"
                name="password"
                placeholder="********">

            @error('password')
                <small>{{ $message }}</small>
            @enderror

        </div>

        <div class="form-group full-width">

            <label>আবার দেও <span>*</span></label>

            <input
                type="password"
                name="password_confirmation"
                placeholder="********">

        </div>

        <button class="register-btn">

           রেজিস্টার করো

        </button>

    </form>

    <div class="login-link">

       একাউন্ট থাকলি লগইন কর?

        <a href="{{ route('login') }}">

            লগইন হেনে

        </a>

    </div>

</div>

</body>
</html>
