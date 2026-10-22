{{-- @extends('layouts/blankLayout')

@section('title', 'Login Basic - Pages')

@section('page-style')
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}">
@endsection --}}
@extends('Layouts/userLayout')

@section('content')
    <!-- Contact Start -->
    <div class="container-fluid contact bg-light py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <form action="{{ route('login-show') }}" method="GET">
                        <div class="row g-3">
                            <h1 class="display-4 mb-4 text-center">Login Details</h1>
                            <!-- Email -->
                            <div class="col-lg-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="login-email" name="email" placeholder="Enter your Email"
                                        value="{{ old('email') }}">
                                    <label for="login-email">Mail ID <span style="color: #e22223;">*</span></label>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="col-lg-12">
                                <div class="form-floating position-relative">
                                    <input type="password"
                                        class="form-control password @error('password') is-invalid @enderror" id="password"
                                        name="password" placeholder="Enter your Password">
                                    <label for="password">Password <span style="color: #e22223;">*</span></label>
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <span class="password-toggle" onclick="togglePassword('password', 'toggle-password')">
                                        <i id="toggle-password" class="fa fa-eye"></i>
                                    </span>
                                    <!-- Display a generic error message (Invalid credentials) if present -->
                                    @if ($errors->has('error'))
                                        <div class="text-danger"> {{ $errors->first('error') }}</div>
                                    @endif
                                </div>
                            </div>

                            <!-- Forgot Password -->
                            {{-- <div class="col-12 text-end">
                                <a href="forgot_password.html" class="text-primary">Forgot Password?</a>
                            </div> --}}

                            <!-- Login Button -->
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Login</button>
                            </div>

                            <!-- Register Option -->
                            <div class="col-12 text-center">
                                <p class="mb-0">Don't have an account? <a href="{{ route('register') }}"
                                        class="text-primary">Register Now</a></p>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-img">
                        <img src="{{ asset('assets/user_assets/images/img/logo.jpg') }}"
                            class="img-fluid w-100 rounded-top bg-white" alt="Image">
                        <!-- <img src="images/img/about.jpg" class="img-fluid w-100 rounded-bottom" alt="Image"> -->
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
