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
                            <h2>Banner Details</h2>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="button-group mt-3">
                            <a href="{{ route('banner_create') }}" class="btn btn-success"
                                style="background-color: #0d6efd;">Add New
                                Banner</a>

                        </div>
                    </div>
                    <!-- end col -->

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

                    <div class="card-style mt-30">
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
                                            <h6 class="text-sm text-medium">Event Description</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium">Banner Image</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium">Past Event Name</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium">Actions</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($records as $key => $rec)
                                        <tr>
                                            <td>{{ $records->firstItem() + $key }}</td>
                                            <td>{{ $rec->event_name }}</td>
                                            <td>{{ $rec->description }}</td>
                                            <td><img src="{{ asset('storage/' . $rec->event_image) }}" class="img-fluid"
                                                    style="width: 200px;" alt="img"></td>
                                            {{-- <td>{{ $rec->pastEvents->event_name }}</td> --}}

                                            <td>
                                                <div class="action d-flex justify-content-evenly">
                                                    <a href="{{ route('banner_edit', $rec->id) }}" class="text-warning">
                                                        <i class="lni lni-pencil"></i>
                                                    </a>
                                                    <form action="{{ route('banner_deletes', $rec->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-danger"
                                                            onclick="return confirm('Are you sure you want to delete this banner?')">
                                                            <i class="lni lni-trash-can"></i></button>
                                                    </form>
                                                    {{-- <a href="{{ route('banner-delete', $rec->id) }}" class="text-danger ">

                                                    </a> --}}
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                            {{ $records->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>


            <!-- ========== form-elements-wrapper start ========== -->

            <!-- ========== form-elements-wrapper end ========== -->
        </div>
        <!-- end container -->
    </section>
    <!-- ========== tab components end ========== -->
@endsection
