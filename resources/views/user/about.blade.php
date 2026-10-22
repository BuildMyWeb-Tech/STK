@extends('Layouts/userLayout')
@section('content')
    <!-- About Start -->
    <div class="container-fluid about bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img src="{{ asset('assets/user_assets/images/img/logo.jpg') }}"
                            class="img-fluid w-100 rounded-top bg-white" alt="Image">
                        <!-- <img src="images/img/about.jpg" class="img-fluid w-100 rounded-bottom" alt="Image"> -->
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
                    {{-- <div class="row g-4 justify-content-between mb-5">
                        <div class="col-lg-6 col-xl-12">
                            <p class="text-dark mb-0"><i class="fas fa-check-circle text-primary me-1"></i> Promotes Tamil
                                Culture and Traditions</p>

                            <p class="text-dark mb-0"><i class="fas fa-check-circle text-primary me-1"></i> Organizes Events
                                for Community Engagement</p>
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
                    <p class="text ps-4 mb-4 ">
                        STK Tamil School (Sussex Tamil Kudumbangal Tamil School) is an online institution that teaches Tamil
                        language, literature, and culture to students from Reception to Grade 4. It operates weekly via
                        Zoom, with volunteer teachers and an academic year from September to June. Students take final exams
                        in June through boards like BTEB and BTLEB and are also encouraged to participate in
                        school-organized events.
                    </p>

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
                                    <h4 class=" fs-1 mb-0 text-primary" style="font-weight: 600; font-size: 25px;">+</h4>
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
                        <div class="col-xl-5"><a href="{{ route('contacts') }}"
                                class="btn btn-primary rounded-pill py-3 px-5">Contact us</a></div>
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
                        <img src="{{ asset('assets/user_assets/images/commitee/c5.jpg') }}" class="img-fluid w-100 rounded"
                            alt="">

                    </div>
                    <h5 href="#" class="text-center mb-1">Jeyavel Paulraj</h5>
                    <p class="text-center">President</p>

                </div>
                <div class="blog-item p-4">
                    <div class="blog-img mb-2">
                        <img src="{{ asset('assets/user_assets/images/commitee/c7.jpg') }}" class="img-fluid w-100 rounded"
                            alt="">

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

    <!-- Testimonial End -->



    <!-- FAQ Start -->
    <div class="container-fluid faq py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="pb-5">
                        {{-- <h4 class="text-primary">FAQs</h4> --}}
                        <h1 class="display-4">Frequently Asked Questions</h1>
                    </div>
                    <div class="accordion bg-light rounded p-4" id="accordionExample">
                        <div class="accordion-item border-0 mb-4">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button text-dark fs-5 fw-bold rounded-top" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseTOne">
                                    How to register events?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body my-2">

                                    <p>Visit the Events page, select the event, fill out the form, and complete the payment.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 mb-4">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed text-dark fs-5 fw-bold rounded-top"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    Who can give feedback?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body my-2">

                                    <p>Only registered attendees who participated in the event can submit their feedback
                                        through the feedback section.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 mb-4">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed text-dark fs-5 fw-bold rounded-top"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                                    How to become a member?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body my-2">

                                    <p>You can apply for membership through the provided form in the Membership section of
                                        the website.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 mb-0">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed text-dark fs-5 fw-bold rounded-top"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                    aria-expanded="false" aria-controls="collapseFour">
                                    How to contact STK?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body my-2">

                                    <p>Visit the Contact page for phone, email details, or submit the inquiry form</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="faq-img RotateMoveRight rounded">
                        <img src="{{ asset('assets/user_assets/images/img/faq.webp') }}" class="img-fluid rounded w-100"
                            alt="Image">
                        <a class="faq-btn btn btn-primary rounded-pill text-white py-3 px-5"
                            href="{{ route('contacts') }}">Ask More Questions <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ End -->
@endsection
