@section('title', '| Edit Giftcard')

@extends('backend.layout.master')
@section('main-content')

     <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Edit Giftcard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Giftcard</a></li>
                                        <li class="breadcrumb-item active">Edit Giftcard</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <form action="{{route('card.update', $card->id)}}" method="POST">
                        {{ csrf_field() }}
                        @method('PUT')

                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    @include('errors.errormessages')
                                    <div class="mb-3">
                                        <label class="form-label" for="project-title-input">Title</label>
                                        <input type="text" required name="title" value="{{$card->title}}" class="form-control" id="project-title-input" placeholder="Enter project title">
                                    </div>
                                    {{-- <div class="mb-3">
                                        <label class="form-label" for="project-title-input">Giftcard Amount</label>
                                        <input type="number" required value="{{$denomination->amount}}" name="amount" class="form-control" id="project-title-input" placeholder="Enter project title">
                                    </div> --}}
                                    <div class="md-3">
                                        <label for="choices-privacy-status-input" class="form-label">Denomination</label>
                                        <select class="form-select" name="denomination_id" data-choices data-choices-search-false id="choices-privacy-status-input">
                                            <option value="{{$card->denomination_id}}">{{$card->denominations->title}}</option>
                                            @forelse ($denominations as $item)
                                            <option value="{{$item->id}}">{{$item->title}}</option>
                                            @empty
                                            <option value="" selected disabled>No Denomination Availabe</option>
                                            @endforelse

                                        </select>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->

                            <!-- end card -->
                            <div class="text-end mb-4">
                                <a href="{{route('card.index')}}" type="button" class="btn btn-dark w-sm">Back</a>
                                {{-- <button type="submit" class="btn btn-dark w-sm">Back</button> --}}
                                <button type="submit" class="btn btn-primary w-sm">Update</button>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Privacy</h5>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <label for="choices-privacy-status-input" class="form-label">Status</label>
                                        <select class="form-select" name="status" data-choices data-choices-search-false id="choices-privacy-status-input">
                                            @if ($card->status == 1)
                                            <option value="1" selected>Active</option>
                                            @else
                                            <option value="0" selected>Inactive</option>

                                            @endif
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div>
                                        <label for="choices-privacy-status-input" class="form-label">Redeem Status</label>
                                        <select class="form-select" name="redeem_status" data-choices data-choices-search-false id="choices-privacy-status-input">
                                            @if ($card->redeem_status == 1)
                                            <option value="1" selected>Redeem</option>
                                            @else
                                            <option value="0" selected>Available</option>

                                            @endif
                                            <option value="1">Redeem</option>
                                            <option value="0">Available</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->


                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </form>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer border-top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Velzon.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

@endsection
