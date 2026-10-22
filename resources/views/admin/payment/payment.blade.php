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
                            <h2>Payment Details</h2>

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
                    <div class="card-style mb-30">
                        <div class="title d-flex flex-wrap justify-content-between align-items-center">
                            <div class="left">
                                <h6 class="text-medium mb-30">Payment List</h6>
                                {{-- <p class="text-sm mb-20">Total Payment Received Per Event</p> --}}
                            </div>
                            {{-- <div class="right">
                                <div class="select-style-1">
                                    <div class="select-position select-sm">
                                        <select class="light-bg">
                                            <option value="">Yearly</option>
                                            <option value="">Monthly</option>
                                            <option value="">Weekly</option>
                                        </select>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <div class="table-responsive">
                            <table class="table top-selling-table">
                                <thead>
                                    <p class="text-center text-primary h4">Payments Coming Soon! </p>
                                    {{-- <tr>
                                        <th>
                                            <h6 class="text-sm text-medium">User Name</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium">Event Name</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium">Payment ID</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium">Amount Paid</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium">Payment Status</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium">Date</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium">Actions</h6>
                                        </th>
                                    </tr> --}}
                                </thead>
                                {{-- <tbody>
                                    <tr>
                                        <td>
                                            <p class="text-sm">John Doe</p>
                                        </td>
                                        <td>
                                            <p class="text-sm">Music Concert</p>
                                        </td>
                                        <td>
                                            <p class="text-sm">PAY123456</p>
                                        </td>
                                        <td>
                                            <p class="text-sm">$100</p>
                                        </td>
                                        <td>
                                            <p class="text-sm text-success">Success</p>
                                        </td>
                                        <td>
                                            <p class="text-sm">2025-02-20</p>
                                        </td>
                                        <td>
                                            <div class="action justify-content-end">
                                                <a class="btn btn-primary btn-sm me-3">View Receipt</a>
                                                <a class="btn btn-danger btn-sm me-3">Refund</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-sm">Jane Smith</p>
                                        </td>
                                        <td>
                                            <p class="text-sm">Tech Conference</p>
                                        </td>
                                        <td>
                                            <p class="text-sm">PAY654321</p>
                                        </td>
                                        <td>
                                            <p class="text-sm">$200</p>
                                        </td>
                                        <td>
                                            <p class="text-sm text-danger">Failed</p>
                                        </td>
                                        <td>
                                            <p class="text-sm">2025-02-19</p>
                                        </td>
                                        <td>
                                            <div class="action justify-content-end">
                                                <a class="btn btn-primary btn-sm me-3" disabled>View Receipt</a>
                                                <a class="btn btn-danger btn-sm me-3" disabled>Refund</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-sm">Mike Johnson</p>
                                        </td>
                                        <td>
                                            <p class="text-sm">Business Summit</p>
                                        </td>
                                        <td>
                                            <p class="text-sm">PAY789012</p>
                                        </td>
                                        <td>
                                            <p class="text-sm">$150</p>
                                        </td>
                                        <td>
                                            <p class="text-sm text-warning">Pending</p>
                                        </td>
                                        <td>
                                            <p class="text-sm">2025-02-18</p>
                                        </td>
                                        <td>
                                            <div class="action justify-content-end">
                                                <a class="btn btn-primary btn-sm me-3" disabled>View Receipt</a>
                                                <a class="btn btn-danger btn-sm me-3" disabled>Refund</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody> --}}
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
