@extends('Layouts/userLayout')

@section('content')
    <!-- Contact Start -->
    <div class="container-fluid contact bg-light py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="contact-item">
                        <div class="pb-5">
                            <h4 class="text-primary">Get in Touch</h4>
                            <h1 class="display-4 mb-4">We're Here to Help!</h1>
                            <p class="mb-0">Whether you have a general inquiry or a business-related question, feel free to
                                reach out. We're happy to assist you!
                            </p>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-primary btn-lg-square rounded-circle p-4"><i class="fa fa-home text-white"></i>
                            </div>
                            <div class="ms-4">
                                <h4>Address</h4>
                                <p class="mb-0">Sussex Tamil Kudumbangal, UK
                                </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-primary btn-lg-square rounded-circle p-2"><i
                                    class="fa fa-phone-alt text-white"></i></div>
                            <div class="ms-4">
                                <h4>Mobile</h4>
                                <p class="mb-0">+44 1234 567890</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-primary btn-lg-square rounded-circle p-2"><i
                                    class="fa fa-envelope-open text-white"></i></div>
                            <div class="ms-4">
                                <h4>Email</h4>
                                <p class="mb-0">info@sussextamilkudumbangal.org</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                    <form method="POST" action="{{ route('addcontact') }}">
                        @csrf
                        <div class="row g-3">
                            <h1 class="display-4 mb-4">Send Us a Message</h1>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('full_name') is-invalid @enderror"
                                        name="full_name" id="name" placeholder="Full Name"
                                        value="{{ old('full_name') }}">
                                    <label for="name">Full Name <span style="color: #e22223;">*</span></label>
                                    @error('full_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" id="email" placeholder="Email Address"
                                        value="{{ old('email') }}">
                                    <label for="email">Email Address <span style="color: #e22223;">*</span> </label>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control @error('phone') is-invalid @enderror"
                                        id="phone" name="phone" placeholder="Phone Number"
                                        value="{{ old('phone') }}">
                                    <label for="phone">Phone Number <span style="color: #e22223;">*</span> </label>
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <select class="form-control @error('type') is-invalid @enderror" id="enquiry-type"
                                        style="background-color: white;" name="type">
                                        <option value="" disabled selected>Select an option</option>
                                        <option value="general" {{ old('type') == 'general' ? 'selected' : '' }}>General
                                        </option>
                                        <option value="business" {{ old('type') == 'business' ? 'selected' : '' }}>Business
                                        </option>
                                    </select>
                                    <label for="enquiry-type">Enquiry Type <span style="color: #e22223;">*</span></label>
                                    @error('type')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control @error('message') is-invalid @enderror" name="message" placeholder="Leave a message here"
                                        id="message" style="height: 160px" maxlength="300">{{ old('message') }}</textarea>
                                    <label for="message">Message <span style="color: #e22223;">*</span></label>
                                    @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Enquiry</button>
                            </div>
                        </div>
                    </form>
                </div>

                {{-- <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded h-100">
                        <iframe class="rounded-top w-100" style="height: 500px; margin-bottom: -6px;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317716.6064618896!2d-0.431244892094902!3d51.52860701174157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2sin!4v1739957404667!5m2!1sen!2sin"
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>

                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <script>
        @if (session()->has('success'))
            alert("{{ session('success') }}");
        @endif
    </script> --}}
    <script>
        @if (session()->has('success'))
            const title = "Success";
            const body = "{{ session('success') }}";

            Swal.fire({
                title: title,
                text: body,
                icon: 'success',
                confirmButtonText: 'OK'
            });
        @endif
    </script>
@endsection
