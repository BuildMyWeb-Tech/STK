@extends('Layouts/userLayout')
@section('content')
<!-- Contact Start -->
<div class="container-fluid contact bg-light py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h1 class="display-5 mb-2">{{ $records->event_name }}</h1>
                <p class="mb-0 fw-bold"><span class="text-primary">Event Date:</span>
                    <span>{{ $records->event_date }}</span>
                </p>
            </div>

            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                <form action="{{ route('add_feedback') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <input type="hidden" name="past_event_id" value="{{ $records->id }}">

                        <h2 class="text-xl font-bold text-purple-700">1. Your Rating</h2>

                        @for ($i = 1; $i <= 10; $i++)
                            @php
                                $question = 'question' . $i;
                                $questionText = $records->$question;
                            @endphp

                            @if ($questionText)
                                <div class="col-lg-12 mt-3">
                                    <label>{{ $questionText }}</label>
                                    <select class="form-control mt-2 @error($question) is-invalid @enderror"
                                            name="{{ $question }}"
                                            style="background-color: white;">
                                        <option value="" disabled selected>Select an option</option>
                                        <option value="Very Good" {{ old($question) == 'Very Good' ? 'selected' : '' }}>5 - Very Good</option>
                                        <option value="Good" {{ old($question) == 'Good' ? 'selected' : '' }}>4 - Good</option>
                                        <option value="Average" {{ old($question) == 'Average' ? 'selected' : '' }}>3 - Average</option>
                                        <option value="Need Improvement" {{ old($question) == 'Need Improvement' ? 'selected' : '' }}>2 - Need Improvement</option>
                                        <option value="Not Satisfied" {{ old($question) == 'Not Satisfied' ? 'selected' : '' }}>1 - Not Satisfied</option>
                                    </select>
                                    @if ($errors->has($question))
                                        <div class="invalid-feedback">
                                            {{ $errors->first($question) }}
                                        </div>
                                    @endif
                                </div>
                            @endif
                        @endfor

                        <!-- Highlights Textarea -->
                        <div class="col-lg-12">
                            <label class="mb-2">2. What were the highlights of this event? You may wish to tell us about the positive aspects.</label>
                            <div class="form-group">
                                <textarea class="form-control @error('question11') is-invalid @enderror" name="question11" style="height: 100px">{{ old('question11') }}</textarea>
                                @error('question11')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Improvement Suggestions Textarea -->
                        <div class="col-lg-12">
                            <label class="mb-2">3. How can we improve future events? You may wish to share areas that need improvement.</label>
                            <div class="form-group">
                                <textarea class="form-control @error('question12') is-invalid @enderror" name="question12" style="height: 100px">{{ old('question12') }}</textarea>
                                @error('question12')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-12 mt-4">
                            <button type="submit" class="btn btn-primary w-100 py-3">Submit Your Feedback</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection
