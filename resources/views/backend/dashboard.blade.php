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
                            <h4 class="mb-sm-0">Dashboard</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col">

                        <div class="h-100">
                            <div class="row mb-3 pb-1">
                                <div class="col-12">
                                    <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                        <div class="flex-grow-1">
                                            <h4 class="fs-16 mb-1">Good Morning, {{ auth()->user()->name }}!!</h4>
                                            <p class="text-muted mb-0">Here's what's happening with your store today.</p>
                                        </div>
                                        {{-- <div class="mt-3 mt-lg-0">
                                            <form action="javascript:void(0);">
                                                <div class="row g-3 mb-0 align-items-center">
                                                    <div class="col-sm-auto">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control dash-filter-picker"
                                                                data-provider="flatpickr" data-range-date="true"
                                                                data-date-format="d M, Y"
                                                                data-deafult-date="01 Jan 2022 to 31 Jan 2022">
                                                            <div
                                                                class="input-group-text bg-primary border-primary text-white">
                                                                <i class="ri-calendar-2-line"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-auto">
                                                        <button type="button" class="btn btn-soft-primary"><i
                                                                class="ri-add-circle-line align-middle me-1"></i> Add
                                                            Product</button>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-auto">
                                                        <button type="button"
                                                            class="btn btn-soft-primary btn-icon waves-effect waves-light layout-rightside-btn"><i
                                                                class="ri-pulse-line"></i></button>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </form>
                                        </div> --}}
                                    </div><!-- end card header -->
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->

                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <!-- card -->
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Total
                                                        Card</p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <h5 class="text-success fs-14 mb-0">
                                                        <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +16.24 %
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span
                                                            class="counter-value" data-target="559.25">0</span>k </h4>
                                                    <a href="index.html" class="text-decoration-underline">View net
                                                        earnings</a>
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-soft-primary rounded fs-3">
                                                        <i class="bx bx-dollar-circle text-primary"></i>
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
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Redems
                                                    </p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <h5 class="text-danger fs-14 mb-0">
                                                        <i class="ri-arrow-right-down-line fs-13 align-middle"></i> -3.57 %
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                                            class="counter-value" data-target="36894">0</span></h4>
                                                    <a href="index.html" class="text-decoration-underline">View all
                                                        orders</a>
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-soft-primary rounded fs-3">
                                                        <i class="bx bx-shopping-bag text-primary"></i>
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
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                        Unredems</p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <h5 class="text-success fs-14 mb-0">
                                                        <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +29.08 %
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                                            class="counter-value" data-target="183.35">0</span>M </h4>
                                                    <a href="index.html" class="text-decoration-underline">See details</a>
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-soft-primary rounded fs-3">
                                                        <i class="bx bx-user-circle text-primary"></i>
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
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> My
                                                        Balance</p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <h5 class="text-muted fs-14 mb-0">
                                                        +0.00 %
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span
                                                            class="counter-value" data-target="165.89">0</span>k </h4>
                                                    <a href="index.html" class="text-decoration-underline">Withdraw
                                                        money</a>
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-soft-primary rounded fs-3">
                                                        <i class="bx bx-wallet text-primary"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->
                            </div> <!-- end row-->

                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="card">
                                        <div class="card-header border-0 align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">Stastics</h4>
                                            <div>
                                                <button type="button" class="btn btn-soft-secondary btn-sm">
                                                    ALL
                                                </button>
                                                <button type="button" class="btn btn-soft-secondary btn-sm">
                                                    1M
                                                </button>
                                                <button type="button" class="btn btn-soft-secondary btn-sm">
                                                    6M
                                                </button>
                                                <button type="button" class="btn btn-soft-primary btn-sm">
                                                    1Y
                                                </button>
                                            </div>
                                        </div><!-- end card header -->

                                        <div class="card-header p-0 border-0 bg-soft-light">
                                            <div class="row g-0 text-center">
                                                <div class="col-6 col-sm-3">
                                                    <div class="p-3 border border-dashed border-start-0">
                                                        <h5 class="mb-1"><span class="counter-value"
                                                                data-target="7585">0</span></h5>
                                                        <p class="text-muted mb-0">Redems</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-6 col-sm-3">
                                                    <div class="p-3 border border-dashed border-start-0">
                                                        <h5 class="mb-1">$<span class="counter-value"
                                                                data-target="20.89">0</span>k</h5>
                                                        <p class="text-muted mb-0">Unredems</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-6 col-sm-3">
                                                    <div class="p-3 border border-dashed border-start-0">
                                                        <h5 class="mb-1"><span class="counter-value"
                                                                data-target="367">0</span></h5>
                                                        <p class="text-muted mb-0">Pending</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-6 col-sm-3">
                                                    <div class="p-3 border border-dashed border-start-0 border-end-0">
                                                        <h5 class="mb-1 text-success"><span class="counter-value"
                                                                data-target="18.92">0</span>%</h5>
                                                        <p class="text-muted mb-0">Conversation Ratio</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                        </div><!-- end card header -->

                                        <div class="card-body p-0 pb-2">
                                            <div class="w-100">
                                                <div id="customer_impression_charts"
                                                    data-colors='["--vz-secondary", "--vz-primary", "--vz-primary-rgb, 0.50"]'
                                                    class="apex-charts" dir="ltr"></div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->

                                <div class="col-xl-4">
                                    <!-- card -->
                                    <div class="card card-height-100">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">Sales by Locations</h4>
                                            <div class="flex-shrink-0">
                                                <button type="button" class="btn btn-soft-primary btn-sm">
                                                    Export Report
                                                </button>
                                            </div>
                                        </div><!-- end card header -->

                                        <!-- card body -->
                                        <div class="card-body">

                                            <div id="sales-by-locations"
                                                data-colors='["--vz-light", "--vz-secondary", "--vz-primary"]'
                                                style="height: 269px" dir="ltr"></div>

                                            <div class="px-2 py-2 mt-1">
                                                <p class="mb-1">Canada <span class="float-end">75%</span></p>
                                                <div class="progress mt-2" style="height: 6px;">
                                                    <div class="progress-bar progress-bar-striped bg-primary"
                                                        role="progressbar" style="width: 75%" aria-valuenow="75"
                                                        aria-valuemin="0" aria-valuemax="75"></div>
                                                </div>

                                                <p class="mt-3 mb-1">Greenland <span class="float-end">47%</span>
                                                </p>
                                                <div class="progress mt-2" style="height: 6px;">
                                                    <div class="progress-bar progress-bar-striped bg-primary"
                                                        role="progressbar" style="width: 47%" aria-valuenow="47"
                                                        aria-valuemin="0" aria-valuemax="47"></div>
                                                </div>

                                                <p class="mt-3 mb-1">Russia <span class="float-end">82%</span></p>
                                                <div class="progress mt-2" style="height: 6px;">
                                                    <div class="progress-bar progress-bar-striped bg-primary"
                                                        role="progressbar" style="width: 82%" aria-valuenow="82"
                                                        aria-valuemin="0" aria-valuemax="82"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end col -->
                            </div>

                            <div class="row">


                                <div class="col-xl-12">
                                    <div class="card card-height-100">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">Top Redems</h4>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown card-header-dropdown">
                                                    <a class="text-reset dropdown-btn" href="index.html#"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="text-muted">Report<i
                                                                class="mdi mdi-chevron-down ms-1"></i></span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="index.html#">Download Report</a>
                                                        <a class="dropdown-item" href="index.html#">Export</a>
                                                        <a class="dropdown-item" href="index.html#">Import</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end card header -->

                                        <div class="card-body">
                                            <div class="table-responsive table-card">
                                                <table
                                                    class="table table-centered table-hover align-middle table-nowrap mb-0">
                                                    <tbody>
                                                        @forelse ($TopOrders as $orderItem)
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 me-2">
                                                                            <img src="{{ asset('backend/assets/images/companies/img-1.png') }}"
                                                                                alt="" class="avatar-sm p-2" />
                                                                        </div>
                                                                        <div>
                                                                            <h5 class="fs-14 my-1 fw-medium">
                                                                                <a href="#"
                                                                                    class="text-reset">{{ $orderItem->orderItems->cards->denominations->title }}</a>
                                                                            </h5>
                                                                            <span class="text-muted">#{{number_format($orderItem->total,2)}}</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="text-muted">{{$orderItem->buyer_email}}</span>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-0">{{$orderItem->quantity}}</p>
                                                                    <span class="text-muted">Quantity</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-muted">#{{number_format($orderItem->total,2)}}</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 mb-0">{{$orderItem->total / 100}}%<i
                                                                            class="ri-bar-chart-fill text-success fs-16 align-middle ms-2"></i>
                                                                    </h5>
                                                                </td>
                                                            </tr><!-- end -->
                                                        @empty
                                                            No Data Available
                                                        @endforelse
                                                    </tbody>
                                                </table><!-- end table -->
                                            </div>

                                        </div> <!-- .card-body-->
                                    </div> <!-- .card-->
                                </div> <!-- .col-->
                            </div> <!-- end row-->

                            <div class="row">


                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">Recent Invoices</h4>
                                            <div class="flex-shrink-0">
                                                <button type="button" class="btn btn-soft-info btn-sm">
                                                    <i class="ri-file-list-3-line align-middle"></i> Generate Report
                                                </button>
                                            </div>
                                        </div><!-- end card header -->

                                        <div class="card-body">
                                            <div class="table-responsive table-card">
                                                <table
                                                    class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                                    <thead class="text-muted table-light">
                                                        <tr>
                                                            <th scope="col">Order ID</th>
                                                            <th scope="col">Customer Email</th>
                                                            <th scope="col">Product</th>
                                                            <th scope="col">Denomination</th>
                                                            <th scope="col">Quantity</th>
                                                            <th scope="col">Amount</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse ($orders as $item)
                                                            <tr>
                                                                <td>
                                                                    <a href=""
                                                                        class="fw-medium link-primary">#{{ $item->reference }}</a>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 me-2">
                                                                            <img src="{{ asset('backend/assets/images/users/avatar-1.jpg') }}"
                                                                                alt=""
                                                                                class="avatar-xs rounded-circle" />
                                                                        </div>
                                                                        <div class="flex-grow-1">{{ $item->buyer_email }}
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>{{ $item->orderItems->cards->denominations->title }}
                                                                </td>
                                                                <td>{{ number_format($item->orderItems->cards->denominations->amount, 2) }}
                                                                </td>
                                                                <td>{{ $item->quantity }}</td>
                                                                <td>
                                                                    <span
                                                                        class="text-success">#{{ number_format($item->total, 2) }}</span>
                                                                </td>
                                                                <td>{{ $item->created_at->format('D, M, Y') }}</td>
                                                                <td>
                                                                    <span class="badge badge-soft-success">Paid</span>
                                                                </td>


                                                            </tr><!-- end tr -->
                                                        @empty
                                                            No Order Available
                                                        @endforelse
                                                    </tbody><!-- end tbody -->
                                                </table><!-- end table -->
                                            </div>
                                        </div>
                                    </div> <!-- .card-->
                                </div> <!-- .col-->
                            </div> <!-- end row-->

                        </div> <!-- end .h-100-->

                    </div> <!-- end col -->

                </div>

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    @endsection
