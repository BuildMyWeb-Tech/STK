@extends('Layouts/adminLayout')
@section('content')
    <!-- ========== tab components start ========== -->
    <section class="tab-components">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title">
                            <h2>Event Creation Form</h2>
                        </div>
                    </div>

                    <!-- end col -->

                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- ========== title-wrapper end ========== -->

            <!-- ========== form-elements-wrapper start ========== -->
            <div class="form-elements-wrapper">

                <form action="{{ route('upcoming-store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-style mb-30">
                                <div class="row">
                                    <!-- Event Name -->
                                    <div class="col-md-6">
                                        <div class="input-style-1">
                                            <label>Event Name</label>
                                            <input type="text" name="event_name"
                                                placeholder="STK Pongal Celebration - 2025" value="{{ old('event_name') }}"
                                                class="form-control @error('event_name') is-invalid @enderror" />
                                            @error('event_name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Venue -->
                                    <div class="col-md-6">
                                        <div class="input-style-1">
                                            <label>Venue</label>
                                            <input type="text" name="venue" placeholder="Enter Venue"
                                                value="{{ old('venue') }}"
                                                class="form-control @error('venue') is-invalid @enderror" />
                                            @error('venue')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Event Date -->
                                    <div class="col-md-6">
                                        <div class="input-style-1">
                                            <label>Date</label>
                                            <input type="date" name="event_date" value="{{ old('event_date') }}"
                                                class="form-control @error('event_date') is-invalid @enderror" />
                                            @error('event_date')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Start Time -->
                                    <div class="col-md-6">
                                        <div class="input-style-1">
                                            <label>Start Time</label>
                                            <input type="time" name="start_time" value="{{ old('start_time') }}"
                                                class="form-control @error('start_time') is-invalid @enderror" />
                                            @error('start_time')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- End Time -->
                                    <div class="col-md-6">
                                        <div class="input-style-1">
                                            <label>End Time</label>
                                            <input type="time" name="end_time" value="{{ old('end_time') }}"
                                                class="form-control @error('end_time') is-invalid @enderror" />
                                            @error('end_time')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="input-style-1">
                                            <label>Adults (£)</label>
                                            <input type="number" name="adults_price" value="{{ old('adults_price') }}"
                                                class="form-control @error('adults_price') is-invalid @enderror" />
                                            @error('adults_price')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>


                                    <!-- Prices -->
                                    <div class="row">


                                        <div class="col-md-6">
                                            <div class="input-style-1">
                                                <label>Full-time Students (£)</label>
                                                <input type="number" name="students_price"
                                                    value="{{ old('students_price') }}"
                                                    class="form-control @error('students_price') is-invalid @enderror" />
                                                @error('students_price')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="input-style-1">
                                                <label>Young Adults (£)</label>
                                                <input type="number" name="young_adults_price"
                                                    value="{{ old('young_adults_price') }}"
                                                    class="form-control @error('young_adults_price') is-invalid @enderror" />
                                                @error('young_adults_price')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="input-style-1">
                                                <label>Kids (£)</label>
                                                <input type="number" name="kids_price" value="{{ old('kids_price') }}"
                                                    class="form-control @error('kids_price') is-invalid @enderror" />
                                                @error('kids_price')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Food Choice -->
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Food Choice</label><br>
                                        <input type="checkbox" id="veg" name="food_choice[]" value="Veg"
                                            @if (in_array('Veg', old('food_choice', []))) checked @endif
                                            class="form-check-input @error('food_choice') is-invalid @enderror">
                                        <label for="veg" style="padding-right: 20px;">Vegetarian</label>

                                        <input type="checkbox" id="nonveg" name="food_choice[]" value="Non-Veg"
                                            @if (in_array('Non-Veg', old('food_choice', []))) checked @endif
                                            class="form-check-input @error('food_choice') is-invalid @enderror">
                                        <label for="nonveg">Non - Vegetarian</label>
                                        @error('food_choice')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Image Upload -->
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Upload Event Images</label>
                                        <input type="file" name="event_image"
                                            class="form-control mb-2 @error('event_image') is-invalid @enderror"
                                            value="{{ old('event_image') }}" />
                                        @error('event_image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Event Description -->
                                    <div class="input-style-1">
                                        <label>Event Description</label>
                                        <textarea name="event_description" rows="5"
                                            class="form-control @error('event_description') is-invalid @enderror">{{ old('event_description') }}</textarea>
                                        @error('event_description')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Submit Buttons -->
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success btn-lg animated bounceIn">Save &
                                            Publish</button>
                                        <a href="{{ route('upcoming-home') }}"
                                            class="btn btn-danger btn-lg animated bounceIn">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <!-- ========== form-elements-wrapper end ========== -->
        </div>
        <!-- end container -->
    </section>
    <!-- ========== tab components end ========== -->
@endsection
