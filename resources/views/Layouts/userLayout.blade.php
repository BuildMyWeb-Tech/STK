<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sussex Tamil Kudumbangal </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="icon" href="{{ asset('assets/user_assets/images/logo.jpg') }}" type="image/png" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" /> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="{{ asset('assets/user_assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user_assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user_assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/user_assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/user_assets/css/style.css') }}" rel="stylesheet">
    @yield('style')
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only"></span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    {{-- <div class="container-fluid topbar bg-light px-5 d-none d-lg-block">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-flex flex-wrap">
                    <a href="#" class="text-muted small me-4"><i
                            class="fas fa-smile text-primary me-2"></i>Welcome To Sussex Tamil Kudumbangal </a>
                    <a href="tel:+447752211935" target="_blank" class="text-muted small me-4"><i
                            class="fas fa-phone-alt text-primary me-2"></i>+44 775 2211 935</a>
                    <a href="mailto:info@sussextamilkudumbangal.org" target="_blank" class="text-muted small me-0"><i
                            class="fas fa-envelope text-primary me-2"></i> info@sussextamilkudumbangal.org</a>

                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <div class="team-icon d-none d-xl-flex justify-content-center me-3">
                        <a class="btn btn-square btn-light rounded-circle mx-1"
                            href="https://www.facebook.com/share/1Av1v4cSAD/" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i
                                class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i
                                class="fas fa-phone-alt"></i></a>
                        <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-light rounded-circle mx-1" href="mailto:sussextamils@gmail.com"
                            target="_blank"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Topbar End -->



    <!-- Navbar & Hero start -->
    <div class="container-fluid nav-bar sticky-top px-4 py-2 py-lg-0">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="" class="navbar-brand p-0">

                <img src="{{ asset('assets/user_assets/images/logo.jpg') }}" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="{{ route('home') }}"
                        class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                    <div class="nav-item dropdown ">
                        <p class="nav-link dropdown-toggle {{ Route::is('upcoming', 'past') ? 'active' : '' }}"
                            data-bs-toggle="dropdown">Our
                            Events</p>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route('upcoming') }}"
                                class="dropdown-item {{ request()->routeIs('upcoming') ? 'active' : '' }}">Upcoming
                                Events</a>
                            <a href="{{ route('past') }}"
                                class="dropdown-item {{ request()->routeIs('past') ? 'active' : '' }}">Past Events</a>


                        </div>
                    </div>
                    <a href="{{ route('about') }}"
                        class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                    <a href="{{ route('commitee') }}"
                        class="nav-item nav-link {{ request()->routeIs('commitee') ? 'active' : '' }}">Committee</a>



                    <a href="{{ route('memberships') }}"
                        class="nav-item nav-link {{ request()->routeIs('memberships') ? 'active' : '' }}">Membership</a>
                    {{-- <a href="{{ route('gallery') }}" class="nav-item nav-link">Gallery</a> --}}

                    <a href="{{ route('sponsorships') }}"
                        class="nav-item nav-link {{ request()->routeIs('sponsorships') ? 'active' : '' }}">Sponsorship</a>
                    <a href="{{ route('contacts') }}"
                        class="nav-item nav-link {{ request()->routeIs('contacts') ? 'active' : '' }}">Contact Us</a>
                    @guest

                        <a href="{{ route('login') }}"
                            class="nav-item nav-link {{ request()->routeIs('login') ? 'active' : '' }}"> <i
                                class="bi bi-box-arrow-right"></i></a>
                    @else
                        {{-- <a href="{{ Auth::user()->role === 'admin' ? route('admin') : route('home') }}"
                            class="nav-item nav-link">
                            <span>{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</span>
                        </a> --}}
                        <a href="{{ route('logout') }}" class="nav-item nav-link"><i
                                class="bi bi-box-arrow-left"></i></a>



                        {{-- <span>{{ Auth::user()->name }}</span> --}}
                    @endguest
                </div>

                <a href="{{ route('upcoming') }}"
                    class="btn btn-primary rounded-pill py-2 px-4 flex-shrink-0">Register
                    Now!</a>
            </div>
        </nav>
    </div>
    <!-- Navbar & Hero End -->


    <!-- Navbar & Hero End -->
    @yield('content')
    <!-- Footer Start -->
    <div class="container-fluid footer  wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <div class="footer-item">
                            <h4 class=" mb-4">About Us</h4>
                            <p class="mb-3">Sussex Tamil Kudumbangal (STK) is a community-driven organization
                                committed to preserving Tamil culture through events, charity work, and family
                                engagement.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4"style="color: #22813d;">Quick Links</h4>
                        <a href="{{ route('home') }}"><i class="fas fa-angle-right me-2"></i> Home</a>
                        <a href="{{ route('past') }}"><i class="fas fa-angle-right me-2"></i> Events</a>
                        <a href="{{ route('about') }}"><i class="fas fa-angle-right me-2"></i> About Us</a>
                        <a href="{{ route('commitee') }}"><i class="fas fa-angle-right me-2"></i> Committee</a>
                        <a href="{{ route('contacts') }}"><i class="fas fa-angle-right me-2"></i> Contact</a>
                        <!-- <a href="#"><i class="fas fa-angle-right me-2"></i> Our Team</a>
                                                                <a href="#"><i class="fas fa-angle-right me-2"></i> Contact Us</a> -->
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4" style="color: #22813d;">Contact Info</h4>
                        <a href="https://www.google.com/maps/search/?api=1&query=123+Community+Hall+Road,+Brighton,+Sussex,+UK"
                            target="_blank"><i class="fa fa-map-marker-alt me-2"></i> Sussex, United Kingdom</a>
                        <a href="mailto:sussextamils@gmail.com" target="_blank"><i class="fas fa-envelope me-2"></i>
                            sussextamils@gmail.com</a>

                        <a href="tel:+447752211935" target="_blank"><i class="fas fa-phone me-2"></i> +44 775 2211
                            935</a>
                        <!-- <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +012 345 67890</a> -->

                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <div class="d-flex align-items-center">
                            <a class="btn btn-light btn-md-square me-2"
                                href="https://www.facebook.com/share/1Av1v4cSAD/" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-light btn-md-square me-2" href=""><i
                                    class="fab fa-instagram"></i></a>
                            <a class="btn btn-light btn-md-square me-2" href=""><i
                                    class="fas fa-phone-alt"></i></a>
                            <a class="btn btn-light btn-md-square me-0" href=""><i
                                    class="fab fa-youtube"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-start mb-md-0">
                    <span class="text-body"><a href="#" class="border-bottom text-white"><i
                                class="fas fa-copyright text-light me-2"></i>Sussex Tamil Kudumbangal</a>, All right
                        reserved.</span>
                </div>
                <div class="col-md-6 text-center text-md-end text-body">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    Designed By <a class="border-bottom text-white" href="https://buildmyweb.info/"
                        target="_blank">BuildMyWeb</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/user_assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/user_assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/user_assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/user_assets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/user_assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/user_assets/lib/lightbox/js/lightbox.min.js') }}"></script>


    <!-- Template Javascript -->
    <script src="{{ asset('assets/user_assets/js/main.js') }}"></script>
    @yield('scripts')
</body>

</html>
