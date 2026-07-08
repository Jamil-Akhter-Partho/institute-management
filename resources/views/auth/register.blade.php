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
        <h2>👤 Only For Students</h2>
    </div>

    <form action="{{ route('register.store') }}" method="POST">

        @csrf

        <div class="form-grid">

            <!-- District -->

            <div class="form-group">
                <label>District? <span>*</span></label>

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

                <label>Which batch do you want to join? <span>*</span></label>

                <select name="shift">

                    <option value="">Select Batch</option>

                    <option value="Morning">Morning</option>
                    <option value="Evening">Evening</option>
                    <option value="Night">Night</option>

                </select>

                @error('shift')
                    <small>{{ $message }}</small>
                @enderror

            </div>

            <!-- Group -->

            <div class="form-group">

                <label>Which group? <span>*</span></label>

                <select name="group">

                    <option>A</option>
                    <option>B</option>
                    <option>C</option>

                </select>

            </div>

            <!-- Name -->

            <div class="form-group">

                <label>Full Name? <span>*</span></label>

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

                <label>Phone Number? <span>*</span></label>

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

                <label>Email? <span>*</span></label>

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

            <label>Password? <span>*</span></label>

            <input
                type="password"
                name="password"
                placeholder="********">

            @error('password')
                <small>{{ $message }}</small>
            @enderror

        </div>

        <div class="form-group full-width">

            <label>Confirm Password? <span>*</span></label>

            <input
                type="password"
                name="password_confirmation"
                placeholder="********">

        </div>

        <button class="register-btn">

            Register

        </button>

    </form>

    <div class="login-link">

        <p>Already have an account?</p>

        <a href="{{ route('login') }}">

            Login Here

        </a>

    </div>

</div>

</body>
</html>
