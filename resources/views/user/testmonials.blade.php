@extends('Layouts/userLayout')
@section('content')
    <!-- Contact Start -->
    <div class="container-fluid contact bg-light py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="text-center mx-auto  wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <!-- <h4 class="text-primary">Upcoming Events</h4> -->
                    <h1 class="display-5 mb-2">We Value Your Testmonials</h1>
                    <p class="mb-0">Kindly take a few minutes to share your
                        testmonials — your input helps us grow and improve!
                    </p>
                </div>

                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                    <form action="{{ route('add_testmonial') }}" method="POST">
                        @csrf
                        <div class="row g-3">

                            <div class="col-lg-12">
                                <div class="form-floating">
                                    <textarea class="form-control @error('feed_back') is-invalid @enderror" name="feed_back" placeholder="Feed back?"
                                        style="height: 100px">{{ old('feed_back') }}</textarea>
                                    <label>Overall Testmonial</label>
                                    @error('feed_back')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary w-100 py-3">Submit Your Testmonial</button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
