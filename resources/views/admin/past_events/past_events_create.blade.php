@extends('Layouts/adminLayout')
@section('content')
    <section class="tab-components">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title">
                            <h2>Past Events details</h2>
                        </div>
                    </div>

                </div>
            </div>
            <!-- ========== title-wrapper end ========== -->

            <!-- ========== form-elements-wrapper start ========== -->
            <div class="form-elements-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{ route('past_event_store') }}" id="form" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <!-- Input style start -->
                            <div class="card-style mb-30">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-style-1">
                                            <label>Event Name</label>
                                            <input type="text" name="event_name"
                                                placeholder="STK Pongal Celebration - 2025"
                                                class="form-control @error('event_name') is-invalid @enderror"
                                                value="{{ old('event_name') }}" />
                                            @error('event_name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="input-style-1">
                                    <label>Date</label>
                                    <input type="date" name="event_date" value="{{ old('event_date') }}"
                                        class="form-control @error('event_date') is-invalid @enderror" />
                                    @error('event_date')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold"> Event Poster Images</label>
                                    <input type="file" accept="image/*" name="event_image"
                                        class="form-control @error('event_image') is-invalid @enderror mb-2"
                                        value="{{ old('event_image') }}" />
                                    @error('event_image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Bulk Image Upload Fields -->
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Bulk Event Gallery Images</label>
                                    <input type="file" accept="image/*" name="gallery_images[]" id="data"
                                        class="form-control @error('gallery_images') is-invalid @enderror mb-2" multiple
                                        value="{{ old('gallery_images') }}" />
                                    @error('gallery_images')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Image Upload Fields End -->
                                <div class="input-style-1">
                                    <label>Event Description</label>
                                    <textarea placeholder="A joyful harvest festival with games, music, and food." rows="5" name="description"
                                        class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
<!-- Checkbox to enable feedback -->
<div class="">
    <label>
        <input type="checkbox" name="feedback_enabled" value="1"
            {{ old('feedback_enabled', $past->feedback_enabled ?? false) ? 'checked' : '' }}
            style="margin-right: 8px; transform: scale(1.2);" />
        Enable Feedback
    </label>
</div>

<!-- Feedback Close Date + Questions -->
<div id="feedback-fields" style="margin-top: 10px;">
    <!-- Feedback Close Date -->
    <div id="feedback-close-date" class="input-style-1">
        <label>Feedback Close Date</label>
        <input type="date" name="feedback_close_date"
            value="{{ old('feedback_close_date', $past->feedback_close_date ?? '') }}"
            class="form-control @error('feedback_close_date') is-invalid @enderror" />
        @error('feedback_close_date')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Feedback Questions --}}
    @for ($i = 1; $i <= 10; $i++)
        <div class="mb-3">
            <label class="form-label fw-bold">Question {{ $i }}</label>
            <input type="text" name="question{{ $i }}"
                class="form-control @error('question' . $i) is-invalid @enderror mb-2"
                value="{{ old('question' . $i) }}" />
            @error('question' . $i)
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    @endfor
</div>


                                <!-- Submit Button -->
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success btn-lg animated bounceIn">Save &
                                        Publish</button>

                                    <a href="{{ route('past_event') }}"
                                        class="btn btn-danger btn-lg animated bounceIn">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        document.getElementById('form').onsubmit = function(event) {
            // event.preventDefault();

            const files = document.getElementById('data').files;
            console.log('Selected files:', files);
        };
      document.addEventListener('DOMContentLoaded', function () {
        const checkbox = document.querySelector('input[name="feedback_enabled"]');
        const feedbackFields = document.getElementById('feedback-fields');

        function toggleFeedbackFields() {
            feedbackFields.style.display = checkbox.checked ? 'block' : 'none';
        }

        checkbox.addEventListener('change', toggleFeedbackFields);
        toggleFeedbackFields(); // Initial call on page load
    });
    </script>
@endsection