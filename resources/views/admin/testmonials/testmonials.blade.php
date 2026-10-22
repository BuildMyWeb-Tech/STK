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
                            <h2>Testmonials Details</h2>

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
                                <h6 class="text-medium mb-30">Testmonial List</h6>
                                {{-- <p class="text-sm mb-20">User Feedback for Events</p> --}}
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table top-selling-table text-center align-middle">
                                <thead>
                                    <tr>
                                        <th>
                                            <h6 class="text-sm text-medium mb-0">Testimonial</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium mb-0">Status</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium mb-0">Actions</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($records->isEmpty())
                                        <tr>
                                            <td colspan="3" class="text-center">No records found</td>
                                        </tr>
                                    @else
                                        @foreach ($records as $rec)
                                            <tr>
                                                <td>
                                                    <p class="text-sm text-capitalize mb-0">{{ $rec->feed_back }}</p>
                                                </td>
                                                <td>
                                                    @if ($rec->status == 1)
                                                        <p class="fw-bold text-success mb-0">Approved</p>
                                                    @elseif ($rec->status == 0)
                                                        <p class="fw-bold text-danger mb-0">Rejected</p>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <a href="{{ route('admin-testmonials_approve', $rec->id) }}"
                                                            class="btn btn-success btn-sm me-1">✔</a>
                                                        <a href="{{ route('admin-testmonials_delete', $rec->id) }}"
                                                            class="btn btn-danger btn-sm ms-1">✖</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>

                            <div class="d-flex justify-content-center">
                                {{ $records->links('pagination::bootstrap-5') }}
                            </div>
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
