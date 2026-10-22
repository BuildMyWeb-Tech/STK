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
                            <h2>Contact Enquiries Details</h2>

                        </div>
                    </div>
                    <!-- end col -->
                    <!-- <div class="col-md-6">
                                                                        <div class="breadcrumb-wrapper">
                                                                          <nav aria-label="breadcrumb">
                                                                            <ol class="breadcrumb">
                                                                              <li class="breadcrumb-item">
                                                                                <a href="#0">Dashboard</a>
                                                                              </li>
                                                                              <li class="breadcrumb-item active" aria-current="page">
                                                                                eCommerce
                                                                              </li>
                                                                            </ol>
                                                                          </nav>
                                                                        </div>
                                                                      </div> -->
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
                                <h6 class="text-medium mb-30">Contact Enquiries List</h6>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table top-selling-table">
                                <thead>
                                    <tr>
                                        <th>
                                            <h6 class="text-sm text-medium">S.NO</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium">Name</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium">Email</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium">Date Received</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium">Phone Number</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium">Enquiry Type</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium">Message</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium">Actions</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($records->isEmpty())
                                        <tr>
                                            <td colspan="7" class="text-center">No records found</td>
                                        </tr>
                                    @else
                                        @foreach ($records as $key => $rec)
                                            <tr>
                                                <td>{{ $records->firstItem() + $key }}</td>
                                                <td>
                                                    <p class="text-sm">{{ $rec->full_name }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-sm">{{ $rec->email }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-sm">{{ $rec->email }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-sm">{{ $rec->phone }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-sm">{{ $rec->type }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-sm">{{ $rec->message }}
                                                    </p>
                                                </td>
                                                <td>
                                                    @if ($rec->status == 1)
                                                        <a href="{{ route('contact_respond', $rec->id) }}"
                                                            class="btn btn-primary btn-sm mb-3">Respond</a>
                                                    @endif
                                                    <a href="{{ route('contact_delete', $rec->id) }}"
                                                        class="btn btn-danger btn-sm mb-2">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end container -->
    </section>
    <!-- ========== section end ========== -->
@endsection
