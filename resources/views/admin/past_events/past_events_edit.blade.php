@extends('Layouts/adminLayout')
@section('content')
    <section class="tab-components">
        <div class="container-fluid">
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title">
                            <h2>Past Events Details</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-elements-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <form id="form" action="{{ route('past_event_update', $record->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-style mb-30">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-style-1">
                                            <label>Event Name</label>
                                            <input type="text" name="event_name"
                                                placeholder="STK Pongal Celebration - 2025"
                                                class="form-control @error('event_name') is-invalid @enderror"
                                                value="{{ old('event_name', $record->event_name) }}" />
                                            @error('event_name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                            <!-- Event Date Input -->
<div class="input-style-1">
    <label>Date</label>
    <input type="date" name="event_date"
        class="form-control @error('event_date') is-invalid @enderror"
        value="{{ old('event_date', $record->event_date) }}" />
    @error('event_date')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- Show Existing Event Image -->
@if (!empty($record->event_image))
    <div class="mb-3">
        <label class="form-label fw-bold">Existing Event Poster:</label><br>
        <img src="{{ asset('uploads/pastevents/' . $record->event_image) }}"
             alt="Event Poster" style="max-width: 200px; margin-bottom: 10px;">
    </div>
@endif

<!-- Upload New Event Image -->
<div class="mb-3">
    <label class="form-label fw-bold">Upload New Event Poster Image</label>
    <input type="file" accept="image/*" name="event_image"
        class="form-control @error('event_image') is-invalid @enderror mb-2" />
    @error('event_image')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- Show Existing Gallery Images -->
@if (!empty($record->gallery_images))
    @php
        $galleryImages = json_decode($record->gallery_images);
    @endphp
    @if ($galleryImages && is_array($galleryImages))
        <div class="mb-3">
            <label class="form-label fw-bold">Existing Gallery Images:</label><br>
            <div style="display: flex; flex-wrap: wrap; gap: 10px;">
                @foreach ($galleryImages as $image)
                    <img src="{{ asset('uploads/pastevents/gallery/' . $image) }}"
                         alt="Gallery Image"
                         style="max-width: 150px; border-radius: 8px;">
                @endforeach
            </div>
        </div>
    @endif
@endif

<!-- Upload New Bulk Gallery Images -->
<div class="mb-3">
    <label class="form-label fw-bold">Upload New Bulk Gallery Images</label>
    <input type="file" accept="image/*" name="gallery_images[]" id="data"
        class="form-control @error('gallery_images') is-invalid @enderror mb-2" multiple />
    @error('gallery_images')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

                                <div class="input-style-1">
                                    <label>Event Description</label>
                                    <textarea placeholder="A joyful harvest festival with games, music, and food." rows="5" name="description"
                                        class="form-control @error('description') is-invalid @enderror">{{ old('description', $record->description) }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Feedback Section -->
                                <div class="">
                                    <label>
                                        <input type="checkbox" name="feedback_enabled" value="1"
                                            {{ old('feedback_enabled', $record->feedback_enabled ?? false) ? 'checked' : '' }}
                                            style="margin-right: 8px; transform: scale(1.2);" />
                                        Enable Feedback
                                    </label>
                                </div>

                                <div id="feedback-fields" style="margin-top: 10px;">
                                    <div id="feedback-close-date" class="input-style-1">
                                        <label>Feedback Close Date</label>
                                        <input type="date" name="feedback_close_date"
                                            class="form-control @error('feedback_close_date') is-invalid @enderror"
                                            value="{{ old('feedback_close_date', $record->feedback_close_date) }}" />
                                        @error('feedback_close_date')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    @for ($i = 1; $i <= 10; $i++)
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Question {{ $i }}</label>
                                            <input type="text" name="question{{ $i }}"
                                                class="form-control @error('question' . $i) is-invalid @enderror mb-2"
                                                value="{{ old('question' . $i, $record->{'question' . $i} ?? '') }}" />
                                            @error('question' . $i)
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    @endfor
                                </div>

                                <!-- Buttons -->
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success btn-lg animated bounceIn">Save & Publish</button>
                                    <a href="{{ route('past_event') }}" class="btn btn-danger btn-lg animated bounceIn">Cancel</a>
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
        document.addEventListener('DOMContentLoaded', function () {
            const checkbox = document.querySelector('input[name="feedback_enabled"]');
            const feedbackFields = document.getElementById('feedback-fields');

            function toggleFeedbackFields() {
                feedbackFields.style.display = checkbox.checked ? 'block' : 'none';
            }

            checkbox.addEventListener('change', toggleFeedbackFields);
            toggleFeedbackFields(); // On load
        });

        document.getElementById('form').onsubmit = function(event) {
            const files = document.getElementById('data').files;
            console.log('Selected files:', files);
        };
    </script>
@endsection
