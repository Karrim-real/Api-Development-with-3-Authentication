@section('title', '| Cards')
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
                                <h4 class="mb-sm-0">Gift-Cards</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Gift-Cards</a></li>
                                        <li class="breadcrumb-item active">Lists</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row g-4 mb-3">
                        <div class="col-sm-auto">
                            <div>
                                <a href="{{route('card.create')}}" class="btn btn-primary"><i class="ri-add-line align-bottom me-1"></i> Add New</a>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="d-flex justify-content-sm-end gap-2">
                                {{-- <div class="search-box ms-2">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <i class="ri-search-line search-icon"></i>
                                </div> --}}

                                <select class="form-control w-md" data-choices data-choices-search-false>
                                    <option value="All">All</option>
                                    <option value="Today">Today</option>
                                    <option value="Yesterday" selected>Yesterday</option>
                                    <option value="Last 7 Days">Last 7 Days</option>
                                    <option value="Last 30 Days">Last 30 Days</option>
                                    <option value="This Month">This Month</option>
                                    <option value="Last Year">Last Year</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        @forelse ($cards as $item)
                            <div class="col-xxl-3 col-sm-6 project-card">
                                <div class="card card-height-100">
                                    <div class="card-body">
                                        <div class="d-flex flex-column h-100">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <p class="text-muted mb-4">Updated {{$item->updated_at->diffForHumans()}}</p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div class="d-flex gap-1 align-items-center">
                                                        <button type="button" class="btn avatar-xs mt-n1 p-0 favourite-btn">
                                                            <span class="avatar-title bg-transparent fs-15">
                                                                <i class="ri-star-fill"></i>
                                                            </span>
                                                        </button>
                                                        <div class="dropdown">
                                                            <button class="btn btn-link text-muted p-1 mt-n2 py-0 text-decoration-none fs-15" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                                <i data-feather="more-horizontal" class="icon-sm"></i>
                                                            </button>

                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="{{route('card.show', $item->id)}}"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a>
                                                                <a class="dropdown-item" href="{{route('card.edit', $item->id)}}"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="{{route('card.delete', $item->id)}}" data-bs-toggle="modal" data-bs-target="#removeProjectModal" id="deleteLink"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex mb-2">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar-sm">
                                                        <span class="avatar-title bg-soft-warning rounded p-2">
                                                            <img src="{{asset('backend/assets/images/brands/slack.png')}}" alt="" class="img-fluid p-1">
                                                        </span>
                                                    </div> <button class="btn {{$item->redeem_status == 0 ? 'btn-info' : 'btn-warning'}} btn-sm">{{($item->redeem_status == 0 ? 'Not Redem' : 'Redeem')}}</button>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="mb-1 fs-15"><a href="apps-projects-overview.html" class="text-dark">{{$item->title}}</a></h5>
                                                    <p class="text-muted text-truncate-two-lines mb-3">#{{$item->denominations->amount}}</p>
                                                </div>
                                            </div>
                                            <div class="mt-auto">
                                                <div class="d-flex mb-2">
                                                    <div class="flex-grow-1">
                                                        <div>GiftCards</div>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div><i class="ri-list-check align-bottom me-1 text-muted"></i> <button class="btn {{$item->status == 1 ? 'btn-success' : 'btn-danger'}} btn-sm">{{($item->status ==  1 ? 'Available' : 'Sold')}}</button></div>
                                                    </div>
                                                </div>
                                                <div class="progress progress-sm animated-progress">
                                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100" style="width: 34%;"></div><!-- /.progress-bar -->
                                                </div><!-- /.progress -->
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end card body -->
                                    <div class="card-footer bg-transparent border-top-dashed py-2">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <div class="avatar-group">
                                                    <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Add Members">
                                                        <div class="avatar-xxs">
                                                            @if ($item->status == 1)
                                                                <div class="avatar-title rounded-circle bg-success">AC</div>
                                                            @else
                                                            <div class="avatar-title rounded-circle bg-danger">UN</div>
                                                            @endif
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="text-muted">
                                                    <i class="ri-calendar-event-fill me-1 align-bottom"></i> {{$item->created_at->format("d. M, Y")}}
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <!-- end card footer -->
                                </div>
                                <!-- end card -->
                            </div>
                        @empty
                           <h4> No Gift-Cards Avaliable</h4>
                        @endforelse
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row g-0 text-center text-sm-start align-items-center mb-4">
                        <div class="col-sm-6">
                            {{-- <div>
                                <p class="mb-sm-0 text-muted">Showing <span class="fw-semibold">1</span> to <span class="fw-semibold">10</span> of <span class="fw-semibold text-decoration-underline">12</span> entries</p>
                            </div> --}}
                        </div>
                        <!-- end col -->
                        <div class="col-sm-6">
                            <ul class="pagination pagination-separated justify-content-center justify-content-sm-end mb-sm-0">
                        {{$cards->links()}}

                                {{-- <li class="page-item disabled">
                                    <a href="apps-projects-list.html#" class="page-link">Previous</a>
                                </li>
                                <li class="page-item active">
                                    <a href="apps-projects-list.html#" class="page-link">1</a>
                                </li>
                                <li class="page-item ">
                                    <a href="apps-projects-list.html#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="apps-projects-list.html#" class="page-link">3</a>
                                </li>
                                <li class="page-item">
                                    <a href="apps-projects-list.html#" class="page-link">4</a>
                                </li>
                                <li class="page-item">
                                    <a href="apps-projects-list.html#" class="page-link">5</a>
                                </li>
                                <li class="page-item">
                                    <a href="apps-projects-list.html#" class="page-link">Next</a>
                                </li> --}}
                            </ul>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

    <!-- removeProjectModal -->
    <div id="removeProjectModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mt-2 text-center">
                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                            <h4>Are you Sure ?</h4>
                            <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this Gift-Card ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                        <a type="button" class="btn w-sm btn-danger" href="" id="deleteBtn">Yes, Delete It!</a>
                        {{-- <button type="button" class="btn w-sm btn-danger" id="remove-project"></button> --}}
                    </div>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
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
@section('script')
<script>
    $(function(){
        let linkId;
       $('#deleteLink').click(function (e) {
        e.preventDefault();
        linkId = $(this).attr('href')
        console.log(linkId);
       });

       $('#deleteBtn').click(function (e) {
        e.preventDefault();
        // linkId = $(this).attr('href')
        console.log('clcik');
        $.ajax({
            type: "GET",
            url: linkId,

            success: function (response) {
                console.log(response);
                location.reload();
            }
        });
       });
    })
</script>
@endsection
@endsection
