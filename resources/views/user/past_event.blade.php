@extends('Layouts/userLayout')

@section('content')
    <!-- Past Events Start -->

    <div class="container-fluid blog pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Past Events</h4>
                <h1 class="display-5 mb-4">Memories of Shared Moments</h1>
                <p class="mb-0">Cherished gatherings that celebrate culture and community.</p>
            </div>

            <div class="row g-4 justify-content-center">
                @if ($past_event->isEmpty())
                    <div>
                        <p class="fw-bold text-center">No Past Events</p>
                    </div>
                @else
                    @foreach ($past_event as $past)
                        <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-light rounded p-4">

                                <div class="project-img">
                                    <img src="{{ asset('storage/' . $past->event_image) }}" class="img-fluid w-100 rounded"
                                        alt="Image">
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

    <div class="text-center">
        <a class="btn btn-primary rounded-pill py-2 px-4"
            href="{{ route('gallery', $past->id) }}">View Gallery</a>

        @if ($past->feedback_enabled && $past->feedback_close_date && now()->lt($past->feedback_close_date))
            <a class="btn rounded-pill py-2 px-4"
                style="color:white;background:blue;" href="{{ route('feedback_user', $past->id) }}"
                onmouseover="this.style.background='green';"
                onmouseout="this.style.background='blue';">Share Feedback</a>
        @endif

        <p class="d-none" id="date">{{ $past->created_at }}</p>
    </div>




                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </div>
   
    <!-- Past Events End -->
@endsection
