@extends('Layouts/userLayout')

@section('content')
    <!-- Gallery Start -->
    <div class="container-fluid gallery pb-5 pt-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">{{ $records->event_name }}
                </h4>
                <h4 class="text-seconday">{{ $records->date }}
                </h4>

                <!-- <h1 class="display-5 mb-4">Cherished Memories Captured Forever</h1> -->
                <p class="mb-4">{{ $records->description }}</p>

            </div>
            <div class="row g-4">
                @if (empty(json_decode($records->gallery_images)))
                    <div class="text-center fw-bold">
                        No images found!
                    </div>
                @else
                    @foreach (json_decode($records->gallery_images) as $image)
                        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="gallery-item">
                                <img src="{{ asset('storage/' . $image) }}" class="img-fluid rounded w-100 h-100"
                                    alt="">
                                <div class="search-icon">
                                    <a href="{{ asset('storage/' . $image) }}"
                                        class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery"><i
                                            class=" fa fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>

        </div>
    </div>
    <!-- Gallery End -->
@endsection
