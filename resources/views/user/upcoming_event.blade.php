@extends('Layouts/userLayout')

@section('content')
    <!-- Upcoming Events Start -->
    <div class="container-fluid blog service py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Upcoming Events</h4>
                <h1 class="display-5 mb-4">Exciting Events Await You!</h1>
                <p class="mb-0">Join us for our upcoming cultural, social, and educational events. Reserve your spot today!
                </p>
            </div>
            <div class="row g-4 blog-item justify-content-center text-center">
                @if ($records->isEmpty())
                    <div class="col-12">
                        <p class="text-center fw-bold">
                            No upcoming events found.
                        </p>
                    </div>
                @else
                    @foreach ($records as $key => $rec)
                        <div class="col-md-6 col-xl-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item bg-light rounded">
                                <div class="project-img">
                                    <img src="{{ asset('storage/' . $rec->event_image) }}"
                                        class="img-fluid w-100 rounded-top" alt="Tamil New Year Festival">
                                    <div class="blog-plus-icon">
                                        <a href="{{ asset('storage/' . $rec->event_image) }}" data-lightbox="blog-4"
                                            class="btn btn-primary btn-md-square rounded-pill">
                                            <i class="fa fa-eye fa-1x"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="service-content text-center p-4">
                                    <div class="service-content-inner">

                                        <a href="#"
                                            class="h4 mb-2 d-inline-flex text-start">{{ $rec->event_name }}</a>
                                        <p class="text-lg text-center text-gray-700 "><b>Date :
                                            </b>{{ \Carbon\Carbon::parse($rec->event_date)->format('jS M Y') }},
                                            {{ \Carbon\Carbon::parse($rec->event_date)->format('l') }}</p>
                                        <p class="text-lg text-center text-gray-700"><b>Time : </b>
                                            {{ \Carbon\Carbon::parse($rec->start_time)->format('g:i A') }}
                                            to
                                            {{ \Carbon\Carbon::parse($rec->end_time)->format('g:i A') }}
                                            UK Time
                                        </p>
                                        <p class="mb-4">{{ $rec->event_description }}
                                        </p>
                                        <a class="btn btn-light rounded-pill py-2 px-4"
                                            href="{{ route('event-register', $rec->id) }}">Register
                                            Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                {{-- <!-- Event 1 -->
                <div class="col-md-6 col-xl-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light rounded">
                        <div class="project-img">
                            <img src="{{ asset('assets/user_assets/images/events/events.jpg') }}"
                                class="img-fluid w-100 rounded-top" alt="Tamil New Year Festival">
                            <div class="blog-plus-icon">
                                <a href="{{ asset('assets/user_assets/images/events/events.jpg') }}" data-lightbox="blog-4"
                                    class="btn btn-primary btn-md-square rounded-pill">
                                    <i class="fa fa-eye fa-1x"></i>
                                </a>
                            </div>
                        </div>
                        <div class="service-content text-center p-4">
                            <div class="service-content-inner">

                                <a href="#" class="h4 mb-2 d-inline-flex text-start">Tamil New Year Festival -
                                    2025</a>
                                <p class="text-lg text-center text-gray-700 "><b>Date : </b>18th Jan 2025, Saturday</p>
                                <p class="text-lg text-center text-gray-700"><b>Time : </b> 2:00 PM To 5:00 PM UK Time</p>
                                <p class="mb-4">Celebrate Tamil New Year with a day of cultural performances, delicious
                                    food, and community bonding. Don't miss the highlight performance by our local talent!
                                </p>
                                <a class="btn btn-light rounded-pill py-2 px-4" href="eventname_register.html">Register
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Event 2 -->
                <div class="col-md-6 col-xl-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded">
                        <div class="project-img">
                            <img src="{{ asset('assets/user_assets/images/events/events.jpg') }}"
                                class="img-fluid w-100 rounded-top" alt="Community Talent Show">
                            <div class="blog-plus-icon">
                                <a href="{{ asset('assets/user_assets/images/events/events.jpg') }}" data-lightbox="blog-5"
                                    class="btn btn-primary btn-md-square rounded-pill">
                                    <i class="fa fa-eye fa-1x"></i>
                                </a>
                            </div>
                        </div>
                        <div class="service-content text-center p-4">
                            <div class="service-content-inner">
                                <a href="#" class="h4 mb-2 d-inline-flex text-start">Community Talent Show - 2024</a>
                                <p class="text-lg text-center text-gray-700 "><b>Date : </b>18th Jan 2025, Saturday</p>
                                <p class="text-lg text-center text-gray-700"><b>Time : </b> 2:00 PM To 5:00 PM UK Time</p>
                                <p class="mb-4">Showcase your talents in music, dance, or art. Open to all ages, with
                                    exciting prizes for the winners!</p>
                                <a class="btn btn-light rounded-pill py-2 px-4" href="eventname_register.html">Register
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Upcoming Events End -->
@endsection
