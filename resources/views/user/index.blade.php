@extends('Layouts/userLayout')

@section('content')
    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel">
        @foreach ($banners as $ban)
            <div class="header-carousel-item">
                <div class="header-carousel-item-img-1">
                    <img src="{{ asset('storage/' . $ban->event_image) }}" class="img-fluid w-100" alt="Image">
                </div>
                <div class="carousel-caption">
                    <div class="carousel-caption-inner text-center p-3">
                        <!-- <h1 class="display-1 text-capitalize text-white mb-4">The most prestigious Investments company in worldwide.</h1> -->
                        <p class="mb-1 fs-2">{{ $ban->event_name }}
                        </p>
                        <p class="mb-4">{{ $ban->description }}</p>
                        <a class="btn btn-primary rounded-pill py-3 px-5 mb-4 me-4"
                            href="{{ $ban->type == 'past_event' ? route('gallery', $ban->event_id) : route('event-register', $ban->upcoming_id) }}">
                            {{ $ban->type == 'past_event' ? 'View Gallery' : 'Register Now' }}</a>
                        <!-- <a class="btn btn-dark rounded-pill py-3 px-5 mb-4" href="#">Read More</a> -->
                    </div>
                </div>
            </div>
        @endforeach
        {{-- <div class="header-carousel-item mx-auto">
                <div class="header-carousel-item-img-2">
                    <img src="{{ asset('assets/user_assets/images/carousel/diwali.jpg') }}" class="img-fluid w-100"
                        alt="Image">
                </div>
                <div class="carousel-caption">
                    <div class="carousel-caption-inner text-center p-3">
                        <!-- <h1 class="display-1 text-capitalize text-white mb-4">The most prestigious Investments company in worldwide.</h1> -->
                        <p class="mb-1 fs-2 ">STK Diwali Celebration - 2024
                        </p>
                        <p class="mb-4">Celebrate Tamil New Year with a day of cultural performances, delicious food, and
                            community bonding. Don't miss the highlight performance by our local talent!</p>
                        <a class="btn btn-primary rounded-pill py-3 px-5 mb-4 me-4" href="gallery.html"> View Gallery</a>
                        <!-- <a class="btn btn-dark rounded-pill py-3 px-5 mb-4" href="#">Read More</a> -->
                    </div>
                </div>
            </div>
            <div class="header-carousel-item">
                <div class="header-carousel-item-img-3">
                    <img src="{{ asset('assets/user_assets/images/carousel/stk_tamil_year.jpg') }}" class="img-fluid w-100"
                        alt="Image">
                </div>
                <div class="carousel-caption">
                    <div class="carousel-caption-inner text-center p-3">
                        <!-- <h1 class="display-1 text-capitalize text-white mb-4">The most prestigious Investments company in worldwide.</h1> -->
                        <p class="mb-1 fs-2">STK Tamil New Year Celebrations - 2024
                        </p>
                        <p class="mb-4">Celebrate Tamil New Year with a day of cultural performances, delicious food, and
                            community bonding. Don't miss the highlight performance by our local talent!</p>
                        <a class="btn btn-primary rounded-pill py-3 px-5 mb-4 me-4" href="gallery.html"> View Gallery</a>
                        <!-- <a class="btn btn-dark rounded-pill py-3 px-5 mb-4" href="#">Read More</a> -->
                    </div>
                </div>
            </div> --}}
    </div>
    <!-- Carousel End -->



    <!-- Upcoming Events Start -->
    @if ($records->count() > 0)
        <div class="container-fluid blog service py-5">
            <div class="container py-5">

                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Upcoming Events </h4>
                    <h1 class="display-5 mb-4">Exciting Events Await You!</h1>
                    <p class="mb-0">Join us for our upcoming cultural, social, and educational events. Reserve your spot
                        today!</p>
                </div>
                <div class="row g-4 blog-item justify-content-center text-center">
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

                                        <p class="h4 mb-2 d-inline-flex text-start">{{ $rec->event_name }}</p>
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
                </div>

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
                                <a href="{{ asset('assets/user_assets/images/events/events.jpg') }}"
                                    data-lightbox="blog-5" class="btn btn-primary btn-md-square rounded-pill">
                                    <i class="fa fa-eye fa-1x"></i>
                                </a>
                            </div>
                        </div>
                        <div class="service-content text-center p-4">
                            <div class="service-content-inner">
                                <a href="#" class="h4 mb-2 d-inline-flex text-start">Community Talent Show -
                                    2024</a>
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
    @endif
    <!-- Upcoming Events End -->


    <!-- About Start -->
    <div class="container-fluid about bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img src="{{ asset('assets/user_assets/images/img/logo.jpg') }}"
                            class="img-fluid w-100 rounded-top bg-white" alt="Image">
                        <!-- <img src="{{ asset('assets/user_assets/images/img/about.jpg') }}" class="img-fluid w-100 rounded-bottom" alt="Image"> -->
                    </div>
                </div>
                <div class="col-lg-6 col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                    <h4 class="text-primary">About STK</h4>
                    <h1 class="display-5 mb-4">Community, Events, Charity, Legacy</h1>
                    <p class="text ps-4 mb-4"> Sussex Tamil Kudumbangal (STK) was founded to preserve and promote the rich
                        cultural heritage of the Tamil community in Sussex, London. We organize cultural events, educational
                        programs, and social gatherings that foster unity and cultural pride. Our mission is to create a
                        supportive and vibrant community where traditions are celebrated and passed on to future
                        generations.
                    </p>
                    <p class="text ps-4 mb-4 ">
                        STK Tamil School (Sussex Tamil Kudumbangal Tamil School) is an online institution that teaches Tamil
                        language, literature, and culture to students from Reception to Grade 4. It operates weekly via
                        Zoom, with volunteer teachers and an academic year from September to June. Students take final exams
                        in June through boards like BTEB and BTLEB and are also encouraged to participate in
                        school-organized events.
                    </p>
                    {{-- <div class="row g-4 justify-content-between mb-5">
                        <div class="col-lg-6 col-xl-12">
                            <p class="text-dark mb-0"><i class="fas fa-check-circle text-primary me-1"></i> Promotes Tamil
                                Culture and Traditions</p>

                            <p class="text-dark mb-0"><i class="fas fa-check-circle text-primary me-1"></i> Organizes
                                Events for Community Engagement</p>
                            <p class="text-dark mb-0"><i class="fas fa-check-circle text-primary me-1"></i> Fosters Strong
                                Family Connections</p>
                            <p class="text-dark mb-0"><i class="fas fa-check-circle text-primary me-1"></i> Supports
                                Charitable Activities and Causes</p>

                        </div>
                        <!-- <div class="col-lg-6 col-xl-7">
                                                                                                                                                                                                                                                                                                                                        <p class="text-dark"><i class="fas fa-check-circle text-primary me-1"></i> Marketing Rules</p>
                                                                                                                                                                                                                                                                                                                                        <p class="text-dark mb-0"><i class="fas fa-check-circle text-primary me-1"></i> Partnerships</p>
                                                                                                                                                                                                                                                                                                                                    </div> -->
                    </div> --}}

                    <div class="row g-4 text-center align-items-center justify-content-center">
                        <div class="col-sm-4">
                            <div class="bg-primary rounded p-4">
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="counter-value fs-1 fw-bold text-dark" data-toggle="counter-up">25</span>
                                    <h4 class="text-dark fs-1 mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                                </div>
                                <div class="w-100 d-flex align-items-center justify-content-center">
                                    <p class="text-white mb-0">Successful Events Conducted</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="bg-dark rounded p-4">
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="counter-value fs-1 fw-bold text-primary" data-toggle="counter-up">8</span>
                                    <h4 class=" fs-1 mb-0 text-primary" style="font-weight: 600; font-size: 25px;">+
                                    </h4>
                                </div>
                                <div class="w-100 d-flex align-items-center justify-content-center">
                                    <p class="mb-0 text-white">Years of Community Service</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="bg-primary rounded p-4">
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="counter-value fs-1 fw-bold text-dark" data-toggle="counter-up">30</span>
                                    <h4 class="text-dark fs-1 mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                                </div>
                                <div class="w-100 d-flex align-items-center justify-content-center">
                                    <p class="text-white mb-0"> Dedicated Helping Volunteers</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row g-4 justify-content-between pt-4 mb-5">
                        <div class="col-xl-5"><a href="{{ route('about') }}"
                                class="btn btn-primary rounded-pill py-3 px-5">Read
                                More</a></div>
                        <div class="col-xl-7 mb-5">
                            <div class="about-customer d-flex position-relative">
                                <img src="{{ asset('assets/user_assets/images/img/about1.JPG') }}"
                                    class="img-fluid btn-xl-square position-absolute" style="left: 0; top: 0;"
                                    alt="Image">
                                <img src="{{ asset('assets/user_assets/images/img/about2.JPG') }}"
                                    class="img-fluid btn-xl-square position-absolute" style="left: 45px; top: 0;"
                                    alt="Image">
                                <img src="{{ asset('assets/user_assets/images/img/about3.JPG') }}"
                                    class="img-fluid btn-xl-square position-absolute" style="left: 90px; top: 0;"
                                    alt="Image">
                                <img src="{{ asset('assets/user_assets/images/img/about4.JPG') }}"
                                    class="img-fluid btn-xl-square position-absolute" style="left: 135px; top: 0;"
                                    alt="Image">
                                <div class="position-absolute text-dark" style="left: 220px; top: 10px;">
                                    <p class="mb-0">100+ Kudumbangal </p>
                                    <p class="mb-0">(Tamil Families)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->



    <!-- Past Events Start -->
    @if ($past_event->count() > 0)
        <div class="container-fluid blog pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Past Events</h4>
                    <h1 class="display-5 mb-4">Memories of Shared Moments</h1>
                    <p class="mb-0">Cherished gatherings that celebrate culture and community.</p>
                </div>

                <div class="row g-4 justify-content-center">
                    @foreach ($past_event as $past)
                        <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-light rounded p-4">

                                <div class="project-img">
                                    <img src="{{ asset('storage/' . $past->event_image) }}"
                                        class="img-fluid w-100 rounded" alt="Image">
                                    <div class="blog-plus-icon">
                                        <a href="{{ asset('storage/' . $past->event_image) }}" data-lightbox="blog-1"
                                            class="btn btn-primary btn-md-square rounded-pill"><i
                                                class="fa fa-eye fa-1x"></i></a>
                                    </div>
                                </div>
                                <div class="my-4">
                                    <a href="#" class="h4 ">{{ $past->event_name }}</a>
                                    <p class="mb-0 "> {{ $past->description }}</p>
                                </div>

                                <div class="text-">
        <a class="btn btn-primary rounded-pill "
            href="{{ route('gallery', $past->id) }}">View Gallery</a>

        @if ($past->feedback_enabled && $past->feedback_close_date && now()->lt($past->feedback_close_date))
            <a class="btn rounded-pill "
                style="color:white;background:blue;" href="{{ route('feedback_user', $past->id) }}"
                onmouseover="this.style.background='green';"
                onmouseout="this.style.background='blue';">Share Feedback</a>
        @endif

        <p class="d-none" id="date">{{ $past->created_at }}</p>
    </div>

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    @endif
    <!-- Past Events End -->


    <!-- Blog Start -->
    <div class="container-fluid blog pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Executive Committee members</h4>
                <h1 class="display-5 mb-4"> Leading with Unity & Vision</h1>

            </div>
            <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay="0.2s">
                <div class="blog-item p-4">
                    <div class="blog-img mb-2">
                        <img src="{{ asset('assets/user_assets/images/commitee/c5.jpg') }}"
                            class="img-fluid w-100 rounded" alt="">

                    </div>
                    <h5 href="#" class="text-center mb-1">Jeyavel Paulraj</h5>
                    <p class="text-center">President</p>

                </div>
                <div class="blog-item p-4">
                    <div class="blog-img mb-2">
                        <img src="{{ asset('assets/user_assets/images/commitee/c7.jpg') }}"
                            class="img-fluid w-100 rounded" alt="">

                    </div>
                    <h5 href="#" class="text-center mb-1">Latha Devendiran </h5>
                    <p class="text-center">Vice President</p>

                </div>
                <div class="blog-item p-4">
                    <div class="blog-img mb-2">
                        <img src="{{ asset('assets/user_assets/images/commitee/c13.jpg') }}"
                            class="img-fluid w-100 rounded" alt="">

                    </div>
                    <h5 href="#" class="text-center mb-1">Yokesh Bhoopathy</h5>
                    <p class="text-center">Secretary</p>

                </div>
                <div class="blog-item p-4">
                    <div class="blog-img mb-2">
                        <img src="{{ asset('assets/user_assets/images/commitee/c12.jpg') }}"
                            class="img-fluid w-100 rounded" alt="">

                    </div>
                    <h5 href="#" class="text-center mb-1">Vinodini Muniyaisparan</h5>
                    <p class="text-center">Joint Secretary</p>

                </div>
                <div class="blog-item p-4">
                    <div class="blog-img mb-2">
                        <img src="{{ asset('assets/user_assets/images/commitee/c1.jpg') }}"
                            class="img-fluid w-100 rounded" alt="">

                    </div>
                    <h5 href="#" class="text-center mb-1">Anithaa Jerome</h5>
                    <p class="text-center">Treasurer</p>

                </div>
                <div class="blog-item p-4">
                    <div class="blog-img mb-2">
                        <img src="{{ asset('assets/user_assets/images/commitee/c9.jpg') }}"
                            class="img-fluid w-100 rounded" alt="">

                    </div>
                    <h5 href="#" class="text-center mb-1">Nachiappan Subramanian </h5>
                    <p class="text-center">Joint Treasurer</p>

                </div>
            </div>

        </div>
        <div class="col-12 d-flex justify-content-center">
            <a class="btn btn-primary rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.1s"
                href="{{ route('commitee') }}">
                View All EC Members
            </a>
        </div>

    </div>
    <!-- Blog End -->

    <!-- Testimonial Start -->
    <div class="container-fluid testimonial" style=" background-color: #000000;">
        <div class="container py-5">
            <div class="row g-4 align-items-center">
                <div class="col-xl-4 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="h-100 rounded">
                        <h4 class="text-primary">Community Voices</h4>
                        <h1 class="display-4 mb-4">Hear Their Experiences</h1>
                        <p class="mb-4">Our events bring joy, connection, and unforgettable moments for everyone.</p>
                        <a class="btn btn-primary rounded-pill text-white py-3 px-5"
                            href="{{ route('test_monials') }}">Share Your Testimonials<i
                                class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="sponser-carousel owl-carousel wow fadeInUp" data-wow-delay="0.1s">
                        @if ($testmonials->isEmpty())
                            <div class="testimonial-item bg-white rounded p-4 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="d-flex">
                                    <div><i class="fas fa-quote-left fa-3x text-dark me-3"></i></div>
                                    <p class="mt-4">No Testmonials Yet!
                                    </p>
                                </div>
                            </div>
                            {{-- <div class="text-center text-primary p-5">
                                <h4></h4>
                            </div> --}}
                        @else
                            @foreach ($testmonials as $feed)
                                @if ($feed->status == 1)
                                    <div class="testimonial-item bg-white rounded p-4 wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="d-flex">
                                            <div><i class="fas fa-quote-left fa-3x text-dark me-3"></i></div>
                                            <p class="mt-4">{{ $feed->feed_back }}
                                            </p>
                                        </div>
                                        {{-- <div class="d-flex justify-content-end">
                                            <div class="my-auto text-end">
                                                <h5>{{ $feed->full_name }}</h5>
                                                <p class="mb-0">{{ $feed->profession }}</p>
                                            </div>
                                            <!-- <div class="bg-white rounded-circle ms-3">
                                                                                                                                                                                                                                                            <img src="{{ asset('assets/user_assets/img/testimonial-1.jpg') }}" class="rounded-circle p-2" style="width: 80px; height: 80px; border: 1px solid; border-color: var(--bs-primary);" alt="">
                                                                                                                                                                                                                                                        </div> -->
                                        </div> --}}
                                    </div>
                                @endif
                            @endforeach
                        @endif
                        {{-- <div class="testimonial-item bg-white rounded p-4 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="d-flex">
                                <div><i class="fas fa-quote-left fa-3x text-dark me-3"></i></div>
                                <p class="mt-4">Attending the Pongal celebration was a heartwarming cultural
                                    experience.
                                </p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <div class="my-auto text-end">
                                    <h5>Arun Kumar</h5>
                                    <p class="mb-0"> Software Engineer</p>
                                </div>
                                <!-- <div class="bg-white rounded-circle ms-3">
                                                                                                                                                                                                                                            <img src="{{ asset('assets/user_assets/img/testimonial-2.jpg') }}" class="rounded-circle p-2" style="width: 80px; height: 80px; border: 1px solid; border-color: var(--bs-primary);" alt="">
                                                                                                                                                                                                                                        </div> -->
                            </div>
                        </div>
                        <div class="testimonial-item bg-white rounded p-4 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="d-flex">
                                <div><i class="fas fa-quote-left fa-3x text-dark me-3"></i></div>
                                <p class="mt-4">Wonderful organization and vibrant events that celebrate Tamil
                                    heritage
                                    beautifully.
                                </p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <div class="my-auto text-end">
                                    <h5>Meena Rajesh</h5>
                                    <p class="mb-0">Business Owner</p>
                                </div>
                                <!-- <div class="bg-white rounded-circle ms-3">
                                                                                                                                                                                                                                            <img src="{{ asset('assets/user_assets/img/testimonial-3.jpg') }}" class="rounded-circle p-2" style="width: 80px; height: 80px; border: 1px solid; border-color: var(--bs-primary);" alt="">
                                                                                                                                                                                                                                        </div> -->
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- sponser Start -->

    <div class="container-fluid testimonial bg-light py-5">
        <div class="text-center mx-auto  wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h4 class="text-primary">Our Proud Sponsors</h4>
            <h1 class="display-4">Empowering Events Through Support
            </h1>
        </div>
        <div class="container ">
            <div class="row g-4 align-items-center">
                <!-- <div class="col-xl-4 wow fadeInLeft" data-wow-delay="0.1s">
                                                                                                                                                                                                                                                                                                                                                                                            <div class="h-100 rounded">
                                                                                                                                                                                                                                                                                                                                                                                                <h4 class="text-primary">Our Feedbacks </h4>
                                                                                                                                                                                                                                                                                                                                                                                                <h1 class="display-4 mb-4">Clients are Talking</h1>
                                                                                                                                                                                                                                                                                                                                                                                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum atque soluta unde itaque. Consequatur quam odit blanditiis harum veritatis porro.</p>
                                                                                                                                                                                                                                                                                                                                                                                                <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Read All Reviews <i class="fas fa-arrow-right ms-2"></i></a>
                                                                                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                                                                                        </div> -->
                <div class="col-xl-12">
                    <div class="testimonial-carousel owl-carousel wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item p-4">
                            <div class="blog-img mb-4">
                                <a href="https://allibhavan.com/?gad_source=1&gclid=Cj0KCQjw2ZfABhDBARIsAHFTxGy4pxC_Vi_NoyciVkHPeoQs-zqPRrF2WtgXXCaiwWLGiLFquPdixocaAlH3EALw_wcB"
                                    target="_blank">
                                    <img src="{{ asset('assets/user_assets/images/sponsors/s3.jpg') }}"
                                        class="img-fluid w-100 rounded" alt=""></a>

                            </div>

                        </div>
                        <div class="blog-item p-4">
                            <div class="blog-img mb-4">
                                <a href="https://lifelineprotect.co.uk/" target="_blank">
                                    <img src="{{ asset('assets/user_assets/images/sponsors/splogo.png') }}"
                                        class="img-fluid w-100 rounded" alt=""></a>
                                </a>

                            </div>

                        </div>
                        <!-- <div class="blog-item p-4">
                                                                                                                                                                                                                                                                                                                                                                                                    <div class="blog-img mb-4">
                                                                                                                                                                                                                                                                                                                                                                                                        <img src="{{ asset('assets/user_assets/images/sponsors/spus.jpg') }}" class="img-fluid w-100 rounded" alt="">
                                                                                                                                                                                                                                                                                                                                                                                                        
                                                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                                                    
                                                                                                                                                                                                                                                                                                                                                                                                </div> -->
                        <div class="blog-item p-4">
                            <div class="blog-img mb-4">
                                <a href="https://velbrighton.co.uk/" target="_blank">
                                    <img src="{{ asset('assets/user_assets/images/sponsors/vel.jpg') }}"
                                        class="img-fluid w-100 rounded" alt=""></a>


                            </div>

                        </div>
                        <div class="blog-item p-4">
                            <div class="blog-img mb-4">
                                <a href="" target="_blank">
                                    <img src="{{ asset('assets/user_assets/images/sponsors/us_logo.jpg') }}"
                                        class="img-fluid w-100 rounded" alt="">
                                </a>
                            </div>

                        </div>
                        <div class="blog-item p-4">
                            <div class="blog-img mb-4">
                                <a href="https://www.buses.co.uk/" target="_blank">
                                    <img src="{{ asset('assets/user_assets/images/sponsors/sp.png') }}"
                                        class="img-fluid w-100 rounded" alt="">
                                </a>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const dateElement = document.getElementById('date');
            const feedButton = document.getElementById('feed');

            // Get date text from the hidden <p> element
            const createdDateStr = dateElement.textContent.trim();
            const createdDate = new Date(createdDateStr);
            const today = new Date();
            // Calculate difference in milliseconds
            const diffTime = today - createdDate;
            const diffDays = diffTime / (1000 * 60 * 60 * 24);

            // If more than 10 days, hide the feed button
            if (diffDays > 10) {
                feedButton.style.display = 'none';
            }
        });
    </script>
    <!-- sponser End -->
@endsection
