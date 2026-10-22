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
                            <h2>Upcoming Events Details</h2>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="button-group mt-3">
                            <a href="{{ route('upcoming-create') }}" class="btn btn-success"
                                style="background-color: #0d6efd;">Add New
                                Upcoming Events </a>

                        </div>
                    </div>
                    <!-- end col -->

                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- ========== title-wrapper end ========== -->

            <!-- ========== form-elements-wrapper start ========== -->

            <!-- ========== form-elements-wrapper end ========== -->
        </div>
        <!-- end container -->
    </section>
    <!-- ========== tab components end ========== -->

    <!-- ========== tables-wrapper start ========== -->
    <div class="tables-wrapper">
        <div class="row">
            <div class="col-lg-12">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        {{ session()->get('success') }}
                    </div>
                @endif
                <div class="card-style mb-30">
                    {{-- <h6 class="mb-10"> Event Lists </h6> --}}

                    <div class="table-wrapper table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <h6 style="width: 70px;">S.NO</h6>
                                    </th>

                                    <th class="lead-info">
                                        <h6>Event Name</h6>
                                    </th>
                                    <th class="lead-email">
                                        <h6>Venue</h6>
                                    </th>
                                    <th class="lead-phone">
                                        <h6>Date</h6>
                                    </th>
                                    <th class="lead-company">
                                        <h6>Time</h6>
                                    </th>
                                    <th class="lead-phone">
                                        <h6>Adults (£)
                                        </h6>
                                    </th>
                                    <th class="lead-company">
                                        <h6>Full-time Students (£)</h6>
                                    </th>
                                    <th class="lead-phone">
                                        <h6>Young Adults (£)</h6>
                                    </th>
                                    <th class="lead-company">
                                        <h6>Kids (£)</h6>
                                    </th>
                                    <th class="lead-phone">
                                        <h6>Food Choice</h6>
                                    </th>
                                    <th class="lead-company">
                                        <h6>Upload Event Images</h6>
                                    </th>
                                    <th>
                                        <h6 style="width: 100px;">Action</h6>
                                    </th>
                                </tr>
                                <!-- end table row-->
                            </thead>
                            <tbody>
                                @if (empty($records))
                                    <tr>
                                        <td colspan="6" class="text-center">No records found</td>
                                    </tr>
                                @else
                                    @foreach ($records as $key => $rec)
                                        <tr>
                                            <td>{{ $records->firstItem() + $key }}</td>
                                            <td>{{ $rec->event_name }}</td>
                                            <td>{{ $rec->venue }}</td>
                                            <td>{{ $rec->event_date }}</td>
                                            <td>{{ \Carbon\Carbon::parse($rec->start_time)->format('g:i A') }}</br>
                                                {{ \Carbon\Carbon::parse($rec->end_time)->format('g:i A') }}


                                            </td>

                                            <td>{{ (int) $rec->adults_price }}</td>
                                            <td>{{ (int) $rec->students_price }}</td>
                                            <td>{{ (int) $rec->young_adults_price }}</td>
                                            <td>{{ (int) $rec->kids_price }}</td>
                                            <td>{{ implode(', ', $rec->food_choice ?? []) }}</td>
                                            <td><img src="{{ asset('/storage/' . $rec->event_image) }}"
                                                    alt="{{ $rec->event_name }}" class="img-fluid" />
                                            </td>
                                            <td>
                                                <div class="action d-flex justify-content-center">
                                                    <a href="{{ route('upcoming-edit', $rec->id) }}" class="text-warning">
                                                        <i class="lni lni-pencil"></i>
                                                    </a>
                                                    <a href="{{ route('upcoming-delete', $rec->id) }}" class="text-danger">
                                                        <i class="lni lni-trash-can"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif


                            </tbody>
                        </table>

                        {{ $records->links('pagination::bootstrap-5') }}
                        <!-- end table -->
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
