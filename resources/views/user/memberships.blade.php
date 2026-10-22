@extends('Layouts/userLayout')

@section('content')
    <!-- 404 Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container py-5 text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <!-- <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                        <h1 class="display-1">404</h1> -->
                    <h1 class="mb-4"> Membership Coming Soon!🎉</h1>
                    <p class="mb-4">We’re excited to introduce our membership program soon! Stay tuned for updates and be
                        part of our growing community.</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="{{route('home')}}">Go Back To Home</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->
@endsection
