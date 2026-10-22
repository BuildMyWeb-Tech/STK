@extends('Layouts/adminLayout')
@section('content')
    <!-- ========== tab components start ========== -->
    <section class="tab-components">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-9">
                        <div class="title">
                            <h2>Home Page Banner</h2>
                        </div>
                    </div>

                </div>
                <!-- end row -->
            </div>
            <!-- ========== title-wrapper end ========== -->

            <!-- ========== form-elements-wrapper start ========== -->
            <div class="form-elements-wrapper">
                <div class="row">
                    <div class="col-lg-6">

                        <!-- input style start -->
                        <form class="card-style mb-30" method="POST" action="{{ route('banner_update', $banner->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <h6 class="mb-25">Banner </h6>
                            <div class="input-style-1">
                                <label>Event Name</label>
                                <input type="text" name="event_name" placeholder="STK Pongal Celebration - 2025"
                                    class="form-control @error('event_name') is-invalid @enderror"
                                    value="{{ $banner->event_name }}" />
                                @error('event_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="card-style mb-30">
                                <div class="input-style-1">
                                    <label>Event Description</label>
                                    <textarea placeholder="A joyful harvest festival with games, music, and food." rows="5" name="description"
                                        class="form-control @error('description') is-invalid @enderror">{{ $banner->description }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>



                            </div>
                            <!-- Image Upload Fields -->
                            <div class="mb-3">
                                <label class="form-label fw-bold"> Event Poster Images</label>
                                <img src="{{ asset('storage/' . $banner->event_image) }}" alt="image"
                                    style="width:100px;">
                                <input type="file" accept="image/*" name="event_image"
                                    class="form-control @error('event_image') is-invalid @enderror mb-2"
                                    value="{{ old('event_image') }}" />
                                @error('event_image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Image Upload Fields End -->

                            <div class="mb-3">
                                <label class="col-form-label" for="category_id">Past Event Name</label>
                                <select name="event_id" class="form-control  @error('event_id') is-invalid @enderror">
                                    <option value="">Select Past Event</option>
                                    @foreach ($records as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $banner->event_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->event_name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('event_id')
                                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-success btn-lg animated bounceIn me-5">Submit</button>

                                <a href="{{ route('banner') }}" class="btn btn-success btn-lg animated bounceIn">Cancel</a>
                            </div>


                            <!-- end input -->
                        </form>
                        <!-- end card -->
                        <!-- ======= input style end ======= -->

                    </div>

                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- ========== form-elements-wrapper end ========== -->
        </div>
        <!-- end container -->
    </section>
    <!-- ========== tab components end ========== -->
@endsection
