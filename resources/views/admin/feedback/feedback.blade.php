@extends('Layouts/adminLayout')
@section('content')
    <!-- ========== section start ========== -->
    <section class="section">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title">
                            <h2>Feedback Details</h2>

                        </div>
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->
            </div>
            <!-- ========== title-wrapper end ========== -->

            <div class="row">
                <div class="col-lg-12">
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <div class="card-style mb-30">
                        <div class="title d-flex flex-wrap justify-content-between align-items-center">
                            <div class="left">
                                <h6 class="text-medium mb-30">Feedback List</h6>
                                <p class="text-sm mb-20">User Feedback for Events</p>
                            </div>
                            <a href="{{ route('download-feedback') }}" class="btn btn-primary">Download</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table top-selling-table">
                                <thead>
                                    <tr>
                                        <th>
                                            <h6 class="text-sm text-medium">S.NO</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium">Event Name</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium">Question1</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium">Question2</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium">Question3</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium">Question4</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium">Question5</h6>
                                        </th>
                                        <th>
                                            <h6>Optional Questions</h6>
                                        </th>
                                        <th>
                                            <h6>Question 11</h6>
                                        </th>
                                        <th>
                                            <h6>Question 12</h6>
                                        </th>

                                        <th>
                                            <h6 class="text-sm text-medium">Actions</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($records->isEmpty())
                                        <tr>
                                            <td colspan="11" class="text-center">No records found</td>
                                        </tr>
                                    @else
                                        @foreach ($records as $key => $rec)
                                            <tr>
                                                <td>{{ $records->firstItem() + $key }}</td>
                                                <td>
                                                    <p class="text-black text-capitalize">
                                                        {{ $rec->past_events->event_name }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-black text-capitalize">{{ $rec->past_events->question1 }}
                                                    </p>
                                                    <p class="text-sm text-capitalize">{{ $rec->question1 }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-black text-capitalize">
                                                        {{ $rec->past_events->question2 }}</p>
                                                    <p class="text-sm text-capitalize">{{ $rec->question2 }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-black text-capitalize">
                                                        {{ $rec->past_events->question3 }}</p>
                                                    <p class="text-sm text-capitalize">{{ $rec->question3 }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-black text-capitalize">
                                                        {{ $rec->past_events->question4 }} </p>
                                                    <p class="text-sm text-capitalize">{{ $rec->question4 }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-black text-capitalize">
                                                        {{ $rec->past_events->question5 }}
                                                    </p>
                                                    <p class="text-sm">{{ $rec->question5 }}</p>
                                                </td>
                                                <td>
                                                    @if ($rec->question6 != null)
                                                        <p class="text-black text-capitalize">
                                                            {{ $rec->past_events->question6 }} </p> </br>
                                                        <p class="text-sm"> {{ $rec->question6 }} </p> </br>
                                                    @endif
                                                    @if ($rec->question7 != null)
                                                        <p class="text-black text-capitalize">
                                                            {{ $rec->past_events->question7 }} </p> </br>
                                                        <p class="text-sm"> {{ $rec->question7 }} </p>
                                                        </br>
                                                    @endif
                                                    @if ($rec->question8 != null)
                                                        <p class="text-black text-capitalize">
                                                            {{ $rec->past_events->question8 }} </p> </br>
                                                        <p class="text-sm"> {{ $rec->question8 }} </p>
                                                        </br>
                                                    @endif
                                                    @if ($rec->question9 != null)
                                                        <p class="text-black text-capitalize">
                                                            {{ $rec->past_events->question9 }} </p> </br>
                                                        <p class="text-sm"> {{ $rec->question9 }} </p>
                                                        </br>
                                                    @endif
                                                    @if ($rec->question10 != null)
                                                        <p class="text-black text-capitalize">
                                                            {{ $rec->past_events->question10 }} </p> </br>
                                                        <p class="text-sm"> {{ $rec->question10 }} </p>
                                                        </br>
                                                    @endif
                                                    @if (
                                                        $rec->question6 == null &&
                                                            $rec->question7 == null &&
                                                            $rec->question8 == null &&
                                                            $rec->question9 == null &&
                                                            $rec->question10 == null)
                                                        <p class="text-sm">-</p>
                                                    @endif
                                                </td>
                                                <td>
                                                    <p class="text-black text-capitalize">
                                                        What were the highlights of this event ? You may wish
                                                        to tell us about the positive aspects. </p> </br>


                                                    <p class="text-sm"> {{ $rec->question11 }} </p>
                                                </td>
                                                <td>
                                                    <p class="text-black text-capitalize">
                                                        How can we improve future events ? You may wish to
                                                        share areas that need improvement. </p> </br>
                                                    <p class="text-sm"> {{ $rec->question12 }} </p>
                                                </td>
                                                <td>
                                                    <div class="action justify-content-end">
                                                        {{-- <a href="{{ route('feedback_approve', $rec->id) }}"
                                                            class="btn btn-success btn-sm">✔</a> --}}
                                                        <a href="{{ route('feedback_reject', $rec->id) }}"
                                                            class="btn btn-danger btn-sm ms-2">✖</a>
                                                        {{-- <button class="btn btn-warning btn-sm">🗑</button> --}}
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                            {{ $records->links('pagination::bootstrap-5') }}
                        </div>
                        {{-- <div class="button-group mt-3">
                            <button class="btn btn-success">Approve</button>
                            <button class="btn btn-warning">Reject</button>
                            <button class="btn btn-danger">Delete</button>
                        </div> --}}
                    </div>
                </div>
            </div>



        </div>
        <!-- end container -->
    </section>
    <!-- ========== section end ========== -->
@endsection
