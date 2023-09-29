@section('title', '| Denominations')
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
                            <h4 class="mb-sm-0">Invoice List</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Invoices</a></li>
                                    <li class="breadcrumb-item active">Invoice List</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <p class="text-uppercase fw-medium text-muted mb-0">Invoices Sent</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <h5 class="text-success fs-14 mb-0">
                                            <i class="ri-arrow-right-up-line fs-13 align-middle"></i> {{count($NumberOfOrders)/100}} %
                                        </h5>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value"
                                                data-target="{{count($NumberOfOrders)}}">0</span></h4>
                                        <span class="badge bg-warning me-1">{{count($NumberOfOrders)}}</span> <span class="text-muted">Invoices
                                            sent</span>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-light rounded fs-3">
                                            <i data-feather="file-text" class="text-primary icon-dual-primary"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <p class="text-uppercase fw-medium text-muted mb-0">Paid Invoices</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <h5 class="text-danger fs-14 mb-0">
                                            <i class="ri-arrow-right-down-line fs-13 align-middle"></i> +8.09 %
                                        </h5>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value"
                                                data-target="409.66">0</span>k</h4>
                                        <span class="badge bg-warning me-1">1,958</span> <span class="text-muted">Paid by
                                            clients</span>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-light rounded fs-3">
                                            <i data-feather="check-square" class="text-primary icon-dual-primary"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <p class="text-uppercase fw-medium text-muted mb-0">Unpaid Invoices</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <h5 class="text-danger fs-14 mb-0">
                                            <i class="ri-arrow-right-down-line fs-13 align-middle"></i> +9.01 %
                                        </h5>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value"
                                                data-target="136.98">0</span>k</h4>
                                        <span class="badge bg-warning me-1">338</span> <span class="text-muted">Unpaid by
                                            clients</span>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-light rounded fs-3">
                                            <i data-feather="clock" class="text-primary icon-dual-primary"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <p class="text-uppercase fw-medium text-muted mb-0">Cancelled Invoices</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <h5 class="text-success fs-14 mb-0">
                                            <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +7.55 %
                                        </h5>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value"
                                                data-target="84.20">0</span>k</h4>
                                        <span class="badge bg-warning me-1">502</span> <span class="text-muted">Cancelled by
                                            clients</span>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-light rounded fs-3">
                                            <i data-feather="x-octagon" class="text-primary icon-dual-primary"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div> <!-- end row-->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card" id="invoiceList">
                            <div class="card-header border-0">
                                <div class="d-flex align-items-center">
                                    <h5 class="card-title mb-0 flex-grow-1">Invoices</h5>
                                    <div class="flex-shrink-0">
                                        <div class="d-flex gap-2 flex-wrap">
                                            <button class="btn btn-danger" id="remove-actions"
                                                onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                            <a href="{{route('card.create')}}" class="btn btn-primary"><i
                                                    class="ri-add-line align-bottom me-1"></i> Create Invoice</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body bg-soft-light border border-dashed border-start-0 border-end-0">
                                <form>
                                    <div class="row g-3">
                                        <div class="col-xxl-5 col-sm-12">
                                            <div class="search-box">
                                                <input type="text" class="form-control search bg-light border-light"
                                                    placeholder="Search for customer, email, country, status or something...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-3 col-sm-4">
                                            <input type="text" class="form-control bg-light border-light"
                                                id="datepicker-range" placeholder="Select date">
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-3 col-sm-4">
                                            <div class="input-light">
                                                <select class="form-control" data-choices data-choices-search-false
                                                    name="choices-single-default" id="idStatus">
                                                    <option value="">Status</option>
                                                    <option value="all" selected>All</option>
                                                    <option value="Unpaid">Unpaid</option>
                                                    <option value="Paid">Paid</option>
                                                    <option value="Cancel">Cancel</option>
                                                    <option value="Refund">Refund</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-xxl-1 col-sm-4">
                                            <button type="button" class="btn btn-primary w-100" onclick="SearchData();">
                                                <i class="ri-equalizer-fill me-1 align-bottom"></i> Filters
                                            </button>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </form>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div class="table-responsive table-card">
                                        <table class="table align-middle table-nowrap" id="invoiceTable">
                                            <thead class="text-muted">

                                                <tr>
                                                    <th class="sort text-uppercase" data-sort="invoice_id">ID</th>

                                                    <th class="sort text-uppercase" data-sort="email">Email</th>
                                                    <th class="sort text-uppercase" data-sort="date">Date</th>
                                                    <th class="sort text-uppercase" data-sort="invoice_amount">Quantity</th>
                                                    {{-- <th class="sort text-uppercase" data-sort="invoice_amount">Denomination</th> --}}
                                                    <th class="sort text-uppercase" data-sort="invoice_amount">Total Amount (&#8358;)</th>
                                                    <th class="sort text-uppercase" data-sort="status">Payment Status</th>
                                                    <th class="sort text-uppercase" data-sort="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all" id="invoice-list-data">
                                                @forelse ($orders as $item)

                                                <tr>

                                                    <td class="id"><a href="{{route('order.show', $item->id)}}" class="fw-medium link-primary">{{$item->reference}}</a>
                                                    </td>

                                                    <td class="email">{{$item->buyer_email}}</td>
                                                    <td class="date">{{$item->created_at->format('d, M, Y')}}</td>
                                                    <td class="invoice_amount">{{$item->quantity}}</td>
                                                    {{-- <td class="invoice_amount">{{$item->orderItems}}</td> --}}
                                                    <td class="invoice_amount">&#8358;{{number_format($item->total,2)}}</td>
                                                    <td class="status"><span
                                                            class="badge badge-soft-success
                                                        text-uppercase">
                                                            Approved
                                                            </span>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a type="button" class="dropdown-item"
                                                                        href="{{route('order.show', $item->id)}}"><i
                                                                            class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        View</a></li>
                                                                <li><a type="button" class="dropdown-item" type="link"
                                                                        href="{{$item->id}}"><i
                                                                            class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Edit</a></li>

                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteOrder" href="{{$item->id}}">
                                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                        Delete
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>

                                                @empty
                                                    No Data Available
                                                @endforelse
                                            </tbody>
                                        </table>
                                       <br>
                                    <div class="d-flex justify-content-end mt-3">
                                        <div class="pagination-wrap hstack gap-2">
                                           {{$orders->links()}}
                                        </div>
                                    </div>
                                    <br>

                                </div>

                                <!-- Modal -->
                                <div class="modal fade flip" id="deleteOrder" tabindex="-1"
                                    aria-labelledby="deleteOrderLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-body p-5 text-center">
                                                <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                                    colors="primary:#405189,secondary:#f06548"
                                                    style="width:90px;height:90px"></lord-icon>
                                                <div class="mt-4 text-center">
                                                    <h4>You are about to delete a order ?</h4>
                                                    <p class="text-muted fs-15 mb-4">Deleting your order will remove all of
                                                        your information from our database.</p>
                                                    <div class="hstack gap-2 justify-content-center remove">
                                                        <button
                                                            class="btn btn-link link-success fw-medium text-decoration-none"
                                                            id="deleteRecord-close" data-bs-dismiss="modal"><i
                                                                class="ri-close-line me-1 align-middle"></i> Close</button>
                                                        <button class="btn btn-danger" id="delete-record">Yes, Delete
                                                            It</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end modal -->
                            </div>
                        </div>

                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

            </div><!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer border-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © Velzon.
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
    <!-- list.js min js -->
    <script src="{{ asset('backend/assets/libs/list.js/list.min.js') }}"></script>

    <!--list pagination js-->
    {{-- <script src="{{ asset('backend/assets/libs/list.pagination.js/list.pagination.min.js') }}"></script> --}}

    <!-- invoicelist init js -->
    {{-- <script src="{{ asset('backend/assets/js/pages/invoiceslist.init.js') }}"></script> --}}

    <!-- Sweet Alerts js -->
    <script src="{{ asset('backend/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
@endsection
@endsection
