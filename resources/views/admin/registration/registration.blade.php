@extends('Layouts/adminLayout')
@section('content')
    <!-- ========== tables-wrapper start ========== -->
    <div class="tables-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-style mb-30">
                    <div class="d-flex justify-content-between flex-wrap ">
                        <h6 class="mb-10">Registration Lists</h6>
                        <a href="{{ route('download-registrations') }}" class="btn btn-primary">Download</a>
                    </div>
                    <div class="table-wrapper table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <h6>S.NO</h6>
                                    </th>
                                    <th class="lead-info">
                                        <h6> Name</h6>
                                    </th>
                                    <th class="lead-info">
                                        <h6>Event Name</h6>
                                    </th>

                                    <th class="lead-email">
                                        <h6>Phone No</h6>
                                    </th>
                                    {{-- <th class="lead-phone">
                                        <h6>Payment </h6>
                                    </th> --}}
                                    <th class="">
                                        <h6 style="width: 100px;">Adults</h6>
                                    </th>
                                    <th class="">
                                        <h6 style="width: 100px;">Full-time Students
                                        </h6>
                                    </th>
                                    <th class="">
                                        <h6 style="width: 120px;">Young Adults</br>(13 to 18)</h6>
                                    </th>
                                    <th class="">
                                        <h6 style="width: 120px;">Kids(Above 5)</h6>
                                    </th>
                                    <th class="">
                                        <h6 style="width: 120px;">Young Kids </br>(Under 5)</h6>
                                    </th>
                                    <th class="">
                                        <h6 style="width: 120px;">Total</h6>
                                    </th>
                                    <th class="lead-company">
                                        <h6> Food Choice</h6>
                                    </th>
                                    <th class="">
                                        <h6 style="width: 120px;">Volunteers</h6>
                                    </th>
                                    <th class="">
                                        <h6 style="width: 120px;">Photo/Video</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(STK)
                                        </h6>
                                    </th>
                                    <th class="">
                                        <h6 style="width: 120px;">Photo/Video
                                            </br><span>(Private)</span></h6>
                                    </th>
                                    <th class="lead-company">
                                        <h6>Social media Sharing
                                        </h6>
                                    </th>
                                    <th>
                                        <h6>Action</h6>
                                    </th>
                                </tr>
                                <!-- end table row-->
                            </thead>
                            <tbody>
                                @foreach ($records as $key => $rec)
                                    <tr>
                                        <td>{{ $records->firstItem() + $key }}</td>
                                        <td>{{ $rec->first_name . ' ' . $rec->last_name }}</td>

                                        <td>{{ $rec->upcoming_event->event_name }}</td>
                                        <td>{{ $rec->phone }}</td>
                                        {{-- <td style="padding-left:10px;">{{ (int) $rec->payment }}</td> --}}
                                        <td style="padding-left:10px;">{{ $rec->adults }}</td>
                                        <td style="padding-left:10px;">{{ $rec->full_time_students }}</td>
                                        <td style="padding-left:10px;">{{ $rec->young_adults }}</td>
                                        <td style="padding-left:15px;">{{ $rec->kids }}</td>
                                        <td style="padding-left:15px;">{{ $rec->young_kids }}</td>
                                        <td>{{ (int) $rec->total }}</td>
                                        <td>{{ $rec->food_choice }}</td>
                                        <td style="padding-left:10px;">{{ $rec->volunteers ? 'YES' : 'NO' }}</td>
                                        <td style="padding-left:10px;">{{ $rec->photo_video_stk ? 'YES' : 'NO' }}</td>
                                        <td style="padding-left:10px;">{{ $rec->photo_video_private ? 'YES' : 'NO' }}</td>
                                        <td style="padding-left:10px;">{{ $rec->social_media_sharing ? 'YES' : 'NO' }}</td>

                                        <td>
                                            <div class="action">
                                                {{-- <button class="text-warning">
                                                    <i class="lni lni-pencil"></i>
                                                </button> --}}
                                                <a href="{{ route('registration-delete', $rec->id) }}" class="text-danger">
                                                    <i class="lni lni-trash-can"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                <!-- end table row -->
                            </tbody>
                        </table>
                        <!-- end table -->
                        {{ $records->links('pagination::bootstrap-5') }}
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->


    </div>
    <!-- ========== tables-wrapper end ========== -->
@endsection
