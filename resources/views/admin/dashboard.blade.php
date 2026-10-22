@extends('Layouts/adminLayout')
@section('content')
    <!-- ========== section start ========== -->
    <section class="section">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title">
                            <h2>Welcome to Admin!</h2>
                        </div>
                    </div>
                    <!-- end col -->
                    <!-- <div class="col-md-6">
                                                                                                        <div class="breadcrumb-wrapper">
                                                                                                          <nav aria-label="breadcrumb">
                                                                                                            <ol class="breadcrumb">
                                                                                                              <li class="breadcrumb-item">
                                                                                                                <a href="#0">Dashboard</a>
                                                                                                              </li>
                                                                                                              <li class="breadcrumb-item active" aria-current="page">
                                                                                                                eCommerce
                                                                                                              </li>
                                                                                                            </ol>
                                                                                                          </nav>
                                                                                                        </div>
                                                                                                      </div> -->
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- ========== title-wrapper end ========== -->
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="icon-card mb-30">
                        <div class="icon purple">
                            <i class="fa-solid fa-calendar-days"></i>
                        </div>
                        <div class="content">
                            <h6 class="mb-10">Upcoming Events</h6>
                            <h3 class="text-bold mb-10">{{ $records->count() }} Active</h3>
                            {{-- <p class="text-sm text-success">
                                <i class="lni lni-arrow-up"></i>30 Past
                                <span class="text-gray">(30 days)</span>
                            </p> --}}
                        </div>
                    </div>
                    <!-- End Icon Cart -->
                </div>
                <!-- End Col -->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="icon-card mb-30">
                        <div class="icon success">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <div class="content">
                            <h6 class="mb-10">Registrations</h6>
                            <h3 class="text-bold mb-10">{{ $registration->count() }}+ </h3>
                            <p class="text-sm text-success">
                                <!-- <i class="lni lni-arrow-up"></i>  -->

                                <span class="text-gray">Participants</span>
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Cart -->
                </div>
                <!-- End Col -->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="icon-card mb-30">
                        <div class="icon primary">
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="content">
                            <h6 class="mb-10">Feedback Received </h6>
                            <h3 class="text-bold mb-10">{{ $feedback->count() }} </h3>
                            <p class="text-sm text-danger">
                                <!-- <i class="lni lni-arrow-down"></i> -2.00% -->
                                <span class="text-gray">Reviews</span>
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Cart -->
                </div>
                <!-- End Col -->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="icon-card mb-30">
                        <div class="icon orange">
                            <i class="fa-solid fa-credit-card"></i>
                        </div>
                        <div class="content">
                            <h6 class="mb-10">Payments Coming Soon</h6>
                            {{-- <h3 class="text-bold mb-10"></h3> --}}
                            {{-- ₹ 1,50,000 --}}
                            {{-- <p class="text-sm text-danger"> --}}
                                <!-- <i class="lni lni-arrow-down"></i> -25.00% -->
                                {{-- <span class="text-gray"> Earning</span> --}}
                            {{-- </p> --}}
                        </div>
                    </div>
                    <!-- End Icon Cart -->
                </div>
                <!-- End Col -->
            </div>

            <!-- End Row -->
        </div>
        <!-- end container -->
    </section>
    <!-- ========== section end ========== -->
    <!-- ========== tab components start ========== -->
    <section class="tab-components">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-12 fw-bold">Shortcut:</div>
                    <div class="col-md-12">
                        <div class="d-flex flex-column flex-md-row  align-items-center gap-3">
                            <div class="button-group mt-3">
                                <a href="{{ route('upcoming-create') }}" class="btn btn-success"
                                    style="background-color: #0d6efd;">Add New Upcoming
                                    Event
                                </a>

                            </div>
                            <div class="button-group mt-3">
                                <a href="{{ route('past_event_create') }}" class="btn btn-success"
                                    style="background-color: #0d6efd;">Add
                                    New Past Event
                                </a>

                            </div>

                            <div class="button-group mt-3">
                                <a href="{{ route('registration') }}" class="btn btn-success"
                                    style="background-color: #0d6efd;">View Registration Details
                                </a>

                            </div>

                            <div class="button-group mt-3">
                                <a href="{{ route('banner_create') }}" class="btn btn-success"
                                    style="background-color: #0d6efd;">New Banner

                                </a>

                            </div>

                            <div class="button-group mt-3">
                                <a href="{{ route('feedback') }}" class="btn btn-success"
                                    style="background-color: #0d6efd;">View Feedback

                                </a>

                            </div>


                        </div>

                    </div>




                    <!-- end col -->

                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- ========== title-wrapper end ========== -->



            <!-- ========== form-elements-wrapper start ========== -->

            <!-- ========== form-elements-wrapper end ========== -->
        </div>
        <!-- end container -->
    </section>
    <!-- ========== tab components end ========== -->
@endsection
