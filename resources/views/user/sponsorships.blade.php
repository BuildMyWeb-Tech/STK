@extends('Layouts/userLayout')

@section('content')
    <!-- Sponsor Start -->
    <div class="container-fluid testimonial bg-light py-5">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h4 class="text-primary">Our Proud Sponsors</h4>
            <h1 class="display-4">Empowering Events Through Support</h1>
        </div>
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-6">
                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <a href="https://allibhavan.com/?gad_source=1&gclid=Cj0KCQjw2ZfABhDBARIsAHFTxGy4pxC_Vi_NoyciVkHPeoQs-zqPRrF2WtgXXCaiwWLGiLFquPdixocaAlH3EALw_wcB"
                                target="_blank">
                                <img src="{{ asset('assets/user_assets/images/sponsors/s3.jpg') }}"
                                    class="img-fluid w-100 rounded" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <a href="https://lifelineprotect.co.uk/" target="_blank">
                                <img src="{{ asset('assets/user_assets/images/sponsors/splogo.png') }}"
                                    class="img-fluid w-100 rounded" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <a href="https://velbrighton.co.uk/" target="_blank">
                                <img src="{{ asset('assets/user_assets/images/sponsors/vel.jpg') }}"
                                    class="img-fluid w-100 rounded" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <a href="" target="_blank">
                                <img src="{{ asset('assets/user_assets/images/sponsors/us_logo.jpg') }}"
                                    class="img-fluid w-100 rounded" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <a href="https://www.buses.co.uk/" target="_blank">
                                <img src="{{ asset('assets/user_assets/images/sponsors/sp.png') }}"
                                    class="img-fluid w-100 rounded" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sponsor End -->
@endsection
