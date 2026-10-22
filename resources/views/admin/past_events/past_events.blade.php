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
                            <h2>Past Events details</h2>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="button-group mt-3">
                            <a href="{{ route('past_event_create') }}" class="btn btn-success"
                                style="background-color: #0d6efd;">Add New Past
                                Events </a>

                        </div>
                    </div>
                </div>
            </div>
            <!-- ========== title-wrapper end ========== -->

            <!-- ========== form-elements-wrapper start ========== -->

        </div>
    </section>


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
                    <h6 class="mb-10">Past Events List</h6>
                    <!-- <p class="text-sm mb-20">
                                                                                                                                                                                                                                                        For basic styling—light padding and only horizontal
                                                                                                                                                                                                                                                        dividers—use the class table.
                                                                                                                                                                                                                                                      </p> -->
                    <div class="table-wrapper table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <h6 style="width:70px;">S.NO</h6>
                                    </th>
                                    <th class="lead-info">
                                        <h6>Event Name</h6>
                                    </th>
                                    <th class="lead-des">
                                        <h6 style="width:200px;">Event Description</h6>
                                    </th>

                                    <th class="lead-company">
                                        <h6> Event Image</h6>
                                    </th>
                                    <th>
                                        <h6 style="width:200px;">Event Date</h6>
                                    </th>
                                    <th>
                                        <h6 style="width:200px;">Question1</h6>
                                    </th>
                                    <th>
                                        <h6 style="width:200px;">Question2</h6>
                                    </th>
                                    <th>
                                        <h6 style="width:200px;">Question3</h6>
                                    </th>
                                    <th>
                                        <h6 style="width:200px;">Question4</h6>
                                    </th>
                                    <th>
                                        <h6 style="width:200px;">Question5</h6>
                                    </th>
                                    <th>
                                        <h6 style="width:200px;">Optional Questions</h6>
                                    </th>

                                    {{-- <th class="lead-company">
                                        <h6> Bulk Event Gallery Images</h6>
                                    </th> --}}
                                    <th>
                                        <h6>Action</h6>
                                    </th>
                                </tr>
                                <!-- end table row-->
                            </thead>
                            <tbody>
                                @if ($records->isEmpty())
                                    <tr>
                                        <td colspan="6" class="text-center fw-bold">No Past Events records</td>
                                    </tr>
                                @else
                                    @foreach ($records as $key => $rec)
                                        <tr>
                                            <td>
                                                {{ $records->firstItem() + $key }}
                                            </td>
                                            <td>
                                                {{ $rec->event_name }}
                                            </td>
                                            <td>
                                                {{ $rec->description }}
                                            </td>
                                            <td>
                                                <img src="{{ asset('storage/' . $rec->event_image) }}"
                                                    alt="{{ $rec->event_name }}"
                                                    style="width:300px;height:200px;object-fit:cover" class="img-fluid">
                                            </td>
                                            <td class="ps-3">{{ $rec->event_date }}
                                            </td>
                                            <td class="ps-3">{{ $rec->question1 }}</td>
                                            <td class="ps-3">{{ $rec->question2 }}</td>
                                            <td class="ps-3">{{ $rec->question3 }}</td>
                                            <td class="ps-3">{{ $rec->question4 }}</td>
                                            <td class="ps-3">{{ $rec->question5 }}</td>
                                            <td class="ps-3">
                                                @if ($rec->question6 != null)
                                                    Question: 6 </br>
                                                    {{ $rec->question6 }}</br>
                                                @endif
                                                @if ($rec->question7 != null)
                                                    Question: 7 </br>
                                                    {{ $rec->question7 }}</br>
                                                @endif
                                                @if ($rec->question8 != null)
                                                    Question: 8 </br>
                                                    {{ $rec->question8 }}</br>
                                                @endif
                                                @if ($rec->question9 != null)
                                                    Question: 9 </br>
                                                    {{ $rec->question9 }}</br>
                                                @endif
                                                @if ($rec->question10 != null)
                                                    Question: 10 </br>
                                                    {{ $rec->question10 }}</br>
                                                @endif
                                            </td>

                                            {{-- <td>
                                                @if (!empty(json_decode($rec->gallery_images)))
                                                    @foreach (json_decode($rec->gallery_images) as $image)
                                                        <img src="{{ asset('storage/' . $image) }}" alt="gallery image"
                                                            class="img-fluid"
                                                            style="width:100px;height:70px;object-fit:contain;" />
                                                    @endforeach
                                                @else
                                                    <p>No images available.</p>
                                                @endif
                                            </td> --}}
                                            <td>
                                                 <div class="action">
        <a href="{{ route('past_event_edit', $rec->id) }}" class="text-primary me-2">
            <i class="lni lni-pencil-alt"></i>
        </a>
        <a href="{{ route('past_event_delete', $rec->id) }}" class="text-danger">
            <i class="lni lni-trash-can"></i>
        </a>
    </div>

                                            </td>
                                        </tr>
                                    @endforeach
                                @endif

                                {{-- <tr>
                                    <td class="min-width">
                                        <div class="lead">
                                            <div class="lead-image">
                                                <img src="assets/images/lead/lead-1.png" alt="" />
                                            </div>
                                            <div class="lead-text">
                                                <p>Courtney Henry</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="min-width">
                                        <p><a href="#0">yourmail@gmail.com</a></p>
                                    </td>
                                    <td class="min-width">
                                        <p>(303)555 3343523</p>
                                    </td>
                                    <td class="min-width">
                                        <p>UIdeck digital agency</p>
                                    </td>
                                    <td>
                                        <div class="action">
                                            <button class="text-warning">
                                                <i class="lni lni-pencil"></i>
                                            </button>
                                            <button class="text-danger">
                                                <i class="lni lni-trash-can"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr> --}}
                                <!-- Pagination links -->

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
