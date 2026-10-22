@extends('Layouts/userLayout')

@section('content')
    <!-- Contact Start -->
    <div class="container-fluid contact bg-light py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <form method="POST" action="{{ route('register-store') }}">
                        @csrf
                        <div class="row g-3">
                            <h1 class="display-4 mb-4 text-center">Register Details</h1>

                            <!-- First Name -->
                            <div class="col-lg-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                                        id="first-name" name="first_name" placeholder="First Name"
                                        value="{{ old('first_name') }}">
                                    <label for="first-name">First Name <span style="color: #e22223;">*</span></label>
                                    @error('first_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Last Name -->
                            <div class="col-lg-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                                        id="last-name" name="last_name" placeholder="Last Name"
                                        value="{{ old('last_name') }}">
                                    <label for="last-name">Last Name <span style="color: #e22223;">*</span></label>
                                    @error('last_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Email Address -->
                            <div class="col-lg-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email" placeholder="Email Address"
                                        value="{{ old('email') }}">
                                    <label for="email">Email Address <span style="color: #e22223;">*</span></label>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Phone Number -->
                            <div class="col-lg-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control @error('phone') is-invalid @enderror"
                                        id="phone" name="phone" placeholder="Phone Number"
                                        value="{{ old('phone') }}">
                                    <label for="phone">Phone Number <span style="color: #e22223;">*</span></label>
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="col-lg-6">
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
                                </div>
                            </div>

                            <!-- Confirm Password -->
                            <div class="col-lg-6">
                                <div class="form-floating position-relative">
                                    <input type="password"
                                        class="form-control password @error('password_confirmation') is-invalid @enderror"
                                        id="confirm-password" name="password_confirmation" placeholder="Confirm Password" required>
                                    <label for="confirm-password">Confirm Password <span
                                            style="color: #e22223;">*</span></label>
                                    @error('password_confirmation')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <span class="password-toggle"
                                        onclick="togglePassword('confirm-password', 'toggle-confirm-password')">
                                        <i id="toggle-confirm-password" class="fa fa-eye"></i>
                                    </span>
                                </div>
                            </div>

                            <!-- Register Button -->
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Register</button>
                            </div>

                            <!-- Login Option -->
                            <div class="col-12 text-center">
                                <p class="mb-0">Already have an account? <a href="{{route('login')}}" class="text-primary">Login
                                        Now</a></p>
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
