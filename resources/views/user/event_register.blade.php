@extends('Layouts/userLayout')
@section('content')
    <!-- Contact Start -->
    <div class="container-fluid contact bg-light py-5">
        <div class="container py-5">
            <div class="row g-5">

                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                    <form action="{{ route('event_add_register') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <h1 class="text-3xl text-center font-bold text-blue-700">{{ $record->event_name }}</h1>
                            <p class="text-lg text-center text-gray-700 mt-2"><b>Date :
                                </b>{{ \Carbon\Carbon::parse($record->event_date)->format('jS M Y') }},
                                {{ \Carbon\Carbon::parse($record->event_date)->format('l') }}</p>
                            <p class="text-lg text-center text-gray-700"><b>Time : </b>
                                {{ \Carbon\Carbon::parse($record->start_time)->format('g:i A') }}
                                to
                                {{ \Carbon\Carbon::parse($record->end_time)->format('g:i A') }}
                                UK Time</p>
                            <p class="text-lg text-center text-gray-700"><b>Venue : </b>{{ $record->venue }}. </p>
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col-md-6"><b>Adults : </b> £{{ (int) $record->adults_price }}</div>
                                    <div class="col-md-6 "><b>Full-time Students : </b> £{{ (int) $record->students_price }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mt-2"><b>Young Adults : </b>
                                        £{{ (int) $record->young_adults_price }}
                                    </div>
                                    <div class="col-md-6 mt-2"><b>Kids : </b> £{{ (int) $record->kids_price }}</div>
                                </div>
                            </div>


                            <h2 class="text-2xl font-bold text-center mt-4 text-blue-700">Registration Form Details </h2>


                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="first_name" name="first_name"
                                        placeholder="First Name" value="{{ old('first_name') }}">
                                    <label for="first_name">First Name - முதல் பெயர்</label>
                                    @error('first_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="last_name" name="last_name"
                                        placeholder="Last Name" value="{{ old('last_name') }}">
                                    <label for="last_name">Last Name - குடும்பப் பெயர்</label>
                                    @error('last_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="phone" class="form-control" name="phone" id="phone"
                                        placeholder="Phone" value="{{ old('phone') }}">
                                    <label for="phone">Mobile Phone - கைப்பேசி எண்</label>
                                    @error('phone')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="adults" name="adults"
                                        placeholder="Enter Adults" value="{{ old('adults') }}">
                                    <label for="adults">Adults - பெரியவர்</label>
                                    @error('adults')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="student" name="full_time_students"
                                        placeholder="Enter Full time Students" value="{{ old('full_time_students') }}">
                                    <label for="student">Full time Students - முழுநேர மாணவர்கள்</label>
                                    @error('full_time_students')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="young_adults" name="young_adults"
                                        placeholder="Enter Young Adults" value="{{ old('young_adults') }}">
                                    <label for="young_adults">Young Adults(Age 13 - 18) - இளம் பெரியவர்கள்(வயது 13
                                        -18)</label>
                                    @error('young_adults')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 col-xl-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="kids" name="kids"
                                        placeholder="Enter Kids" value="{{ old('kids') }}">
                                    <label for="kids">Kids (Age 5 - 12) - சிறார்கள் (வயது 5 - 12)</label>
                                    @error('kids')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 col-xl-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="young_kids" name="young_kids"
                                        placeholder="Enter Young Kids" value="{{ old('young_kids_price') }}">
                                    <label for="young_kids">Kids under 5 - வயது 5க்குக் கீழ் உள்ள சிறார் மற்றும் குழந்தைகள்
                                        [Free]</label>
                                    @error('young_kids_price')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mt-4">
                                <input type="checkbox" id="consentSTK" class="mr-2" name="photo_video_stk"
                                    value="1" style="margin-right: 10px;"
                                    {{ old('photo_video_stk') ? 'checked' : '' }}><span>Consent for Photo/Video to STK
                                    Team.</span>
                                <label for="consentSTK">I give consent to take a photograph/video of myself & my family
                                    members during the STK event, which may be used on the STK's social media pages (also by
                                    members of the STK group to use on their pages).</label>
                            </div>

                            <div class="mt-4">
                                <input type="checkbox" id="consentPrivate" name="photo_video_private" class="mr-2"
                                    value="1" style="margin-right: 10px;"
                                    {{ old('photo_video_private') ? 'checked' : '' }}><span>Consent for Photo/Video for
                                    Private (Youtubers / Content Creators...) </span>
                                <label for="consentPrivate">I give consent to take a photograph/video of myself & my family
                                    members during the STK event, which may be used on the YouTubers / Content
                                    Creators.</label>
                            </div>

                            <div class="mt-4">
                                @php
                                    $food = $record->food_choice ?? [];
                                    $hasVeg = in_array('Veg', $food);
                                    $hasNonVeg = in_array('Non-Veg', $food);
                                @endphp
                                <p class="text-sm text-gray-600">
                                    @if($hasVeg && !$hasNonVeg)
                                        Only Vegetarian food is to be served in this celebration.
                                    @elseif($hasNonVeg && !$hasVeg)
                                        Only Non-Vegetarian food is to be served in this celebration.
                                    @endif
                                    Please note that Vegan food is not available. The food may contain or come into contact
                                    with common allergens, such as dairy, eggs, wheat, soybeans, tree nuts, peanuts, or
                                    wheat.</p>
                                <label for="foodChoice" class="text-red-700 font-bold">Select Your Food Choice:</label>
                                <select id="foodChoice" name="food_choice" class="form-control  col-lg-6 col-xl-4"
                                    value="{{ old('food_choice') }}">
                                    <option value="" disabled selected>Select</option>
                                    @if($hasVeg)
                                        <option value="vegetarian" {{ old('food_choice') == 'vegetarian' ? 'selected' : '' }}>
                                            Vegetarian</option>
                                    @endif
                                    @if($hasNonVeg)
                                        <option value="non-vegetarian"
                                            {{ old('food_choice') == 'non-vegetarian' ? 'selected' : '' }}>Non Vegetarian
                                        </option>
                                    @endif
                                </select>
                                @error('food_choice')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>





                            <div class="mt-2">
                                <h2 class="text-xl font-bold  text-purple-700 mt-6">Important Information</h2>
                                <p class="text-sm text-gray-600">Are you a Youtuber (or) Social Media Content Creator (or)
                                    planning to put the event videos in public social media websites?</p>
                                <input type="radio" id="youtuberYes" name="social_media_sharing" value="1"
                                    class="mr-2" {{ old('social_media_sharing') == '1' ? 'checked' : '' }}>
                                <label for="youtuberYes" style="margin-right: 20px;">Yes</label>
                                <input type="radio" id="youtuberNo" name="social_media_sharing" value="0"
                                    class="ml-4 mr-2"{{ old('social_media_sharing') == '0' ? 'checked' : '' }}>
                                <label for="youtuberNo">No</label>
                                @error('social_media_sharing')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <p class="text-sm text-gray-600 mt-2">If you have selected 'Yes' above, then please reach out
                                to Event Committee through email (<a href="mailto:sussextamils@gmail.com"
                                    class="text-green-700">sussextamils@gmail.com</a>) or STK Whatsapp number (<a
                                    href="tel:+447752211935" class="text-green-700"> +44 7752211935</a>) to get the list
                                of STK members who did not give consent on Photo/Video. This way you can avoid taking photos
                                and videos of the respective STK members to respect their privacy. Thanks for understanding.
                            </p>


                            <div class="mt-2">
                                <h2 class="text-xl font-bold text-purple-700 mt-6">Volunteer Choice</h2>
                                <p class="text-sm text-gray-600">Would you like to volunteer to provide any assistance
                                    during the event activities on the day?</p>
                                <input type="radio" id="volunteerYes" name="volunteers" value="1"
                                    class="mr-2">
                                <label for="volunteerYes" style="margin-right: 20px;">Yes</label>
                                <input type="radio" id="volunteerNo" name="volunteers" value="0"
                                    class="ml-4 mr-2">
                                <label for="volunteerNo">No</label>
                                @error('volunteers')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 160px"
                                        name="description">{{ old('description') }}</textarea>
                                    <label for="message">Comments</label>
                                </div>
                                @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input class="form-control" name="upcoming_events_id" hidden
                                        value="{{ $record->id }}" />
                                </div>
                            </div>

                            <div class="col-lg-12 col-xl-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="total" name="total"
                                        placeholder="Total" readonly value="0">
                                    <label for="total">Total Amount in GBP - £ </label>
                                </div>
                            </div>

                            <div class="col-lg-12 col-xl-12">
                                <div class="mt-2 bank">
                                    <h5 style="color: blue;">Bank transfer details:</h5>
                                    <p style="color: black;">Please use your NAME as a payment reference while transferring
                                        the money</p>
                                    <p style="color: black;">Sort code : <span
                                            class="text-success fw-bold">30-99-50</span></p>
                                    <p style="color: black;">Acc no : <span class="text-success fw-bold">29935063</span>
                                    </p>
                                    <p style="color: black;">Acc holder name : <span class="text-success fw-bold">Sussex
                                            Tamil Kudumbangal</span> </p>
                                    <p style="color: black;" class="fw-bold">NOTE : <span class="text-danger">Kindly type
                                            your Full Name
                                            in the Reference section
                                            while transferring
                                            the
                                            entry fee. If there is not enough space type First name and Initial.
                                        </span></p>
                                    <p style="color: blue;">Once paid, kindly inform in the 'STK Functions and Event"
                                        WhatsApp group and
                                        mention your Reference as well. STK committee member will confirm the receipt
                                        within 72 hrs. If you have not received a confirmation message even after 72
                                        hrs,
                                        please contact STK Admin.</p>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary w-100 py-3">Submit Registration</button>
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
    <script>
        let adults = null;
        let student = null;
        let young_adults = null;
        let children = null;
        let total = document.getElementById('total')
        let bank = document.querySelector('.bank');



        function amt() {
            // let total = 0;/
            if (adults != null && adults != '') {
                total.value = adults * parseInt(@json($record->adults_price))
            } else if (adults == '') {
                total.value = 0
            }
            if (student != null && student != '') {
                total.value = parseInt(total.value) + student * parseInt(@json($record->students_price))
            } else if (student == '') {
                total.value = parseInt(total.value)
            }

            if (young_adults != null && young_adults != '') {
                total.value = parseInt(total.value) + young_adults * parseInt(@json($record->young_adults_price))
            } else if (young_adults == '') {
                total.value = parseInt(total.value)
            }

            if (children != null && children != '') {
                total.value = parseInt(total.value) + children * parseInt(@json($record->kids_price))
            } else if (children == '') {
                total.value = parseInt(total.value)
            }

            if (total.value > 0) {
                console.log(total.value)
                bank.style.display = 'block';
            } else {
                bank.style.display = 'none';
            }


            console.log('adults: ', adults, ', student: ', student, ", young adults: ", young_adults, ", kids: ",
                children)
        }
        document.getElementById('adults').addEventListener('input', (e) => {
            adults = e.target.value;
            amt()
        });

        document.getElementById('student').addEventListener('input', (e) => {
            student = e.target.value;
            amt()
        });
        document.getElementById('young_adults').addEventListener('input', (e) => {
            young_adults = e.target.value;
            amt()
        });
        document.getElementById('kids').addEventListener('input', (e) => {
            children = e.target.value;
            amt()
        });

        adults = document.getElementById('adults').value;
        student = document.getElementById('student').value;
        young_adults = document.getElementById('young_adults').value;
        children = document.getElementById('kids').value;
        amt();
    </script>
@endsection
