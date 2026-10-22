@extends('Layouts/userLayout')

@section('content')
    <div class="container-fluid bg-light py-5">
        <div class="container py-5 text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <!-- <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                            <h1 class="display-1">404</h1> -->
                    <h1 class="mb-4">Registration Submitted 🎉</h1>
                    <p class="mb-4">Thanks! Your registration has been received successfully. We are excited to have you on
                        board. Stay connected with us!
                    </p>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="{{ route('home') }}">Go Back To Home</a>
                </div>
            </div>
        </div>
    </div>
@endsection
