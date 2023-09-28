@section('title', '| Edit denominations')

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
                                <h4 class="mb-sm-0">Invoice Details</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Invoices</a></li>
                                        <li class="breadcrumb-item active">Invoice Details</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row justify-content-center">
                        <div class="col-xxl-9">
                            <div class="card" id="demo">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card-header border-bottom-dashed p-4">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <img src="{{asset('backend/assets/images/logo-dark.png')}}" class="card-logo card-logo-dark" alt="logo dark" height="17">
                                                    <img src="{{asset('backend/assets/images/logo-light.png')}}" class="card-logo card-logo-light" alt="logo light" height="17">
                                                    <div class="mt-sm-5 mt-4">
                                                        <h6 class="text-muted text-uppercase fw-semibold">Address</h6>
                                                        <p class="text-muted mb-1" id="address-details">Abule Egba, Alagbado</p>
                                                        <p class="text-muted mb-0" id="zip-code"><span>Iyana Ipaja</span> Lagos</p>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 mt-sm-0 mt-3">
                                                    <h6><span class="text-muted fw-normal">Legal Registration No:</span><span id="legal-register-no">987654</span></h6>
                                                    <h6><span class="text-muted fw-normal">Email:</span><span id="email">demonezer@test.com</span></h6>
                                                    <h6><span class="text-muted fw-normal">Website:</span> <a href="{{route('home')}}" class="link-primary" target="_blank" id="website">{{config('app.name')}}</a></h6>
                                                    <h6 class="mb-0"><span class="text-muted fw-normal">Contact No: </span><span id="contact-no"> +2348131915690</span></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end card-header-->
                                    </div><!--end col-->
                                    <div class="col-lg-12">
                                        <div class="card-body p-4">
                                            <div class="row g-3">
                                                <div class="col-lg-3 col-6">
                                                    <p class="text-muted mb-2 text-uppercase fw-semibold">Invoice No</p>
                                                    <h5 class="fs-14 mb-0">#<span id="invoice-no">{{$order->reference}}</span></h5>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-3 col-6">
                                                    <p class="text-muted mb-2 text-uppercase fw-semibold">Date</p>
                                                    <h5 class="fs-14 mb-0"><span id="invoice-date">{{$order->created_at->format('d, M, Y')}}</span> <small class="text-muted" id="invoice-time">{{$order->created_at->format('h: m: s')}}</small></h5>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-3 col-6">
                                                    <p class="text-muted mb-2 text-uppercase fw-semibold">Delivery Status</p>
                                                    <span class="badge badge-soft-success fs-11" id="payment-status">Delivered</span>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-3 col-6">
                                                    <p class="text-muted mb-2 text-uppercase fw-semibold">Total Amount</p>
                                                    <h5 class="fs-14 mb-0">#<span id="total-amount">{{number_format($order->total,2)}}</span></h5>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end card-body-->
                                    </div><!--end col-->
                                    <div class="col-lg-12">
                                        <div class="card-body p-4 border-top border-top-dashed">
                                            <div class="row g-3">
                                                <div class="col-6">
                                                    <h6 class="text-muted text-uppercase fw-semibold mb-3">Sender Address</h6>
                                                    <p class="fw-medium mb-2" id="billing-name">{{config('app.name')}}</p>
                                                    <p class="text-muted mb-1" id="billing-address-line-1">Abule-Egba, Alagbado, Lagos</p>
                                                    <p class="text-muted mb-1"><span>Phone: +</span><span id="billing-phone-no">2348131915690</span></p>
                                                    <p class="text-muted mb-0"><span>Tax: </span><span id="billing-tax-no">12-3456789</span> </p>
                                                </div>
                                                <!--end col-->
                                                <div class="col-6">
                                                    <h6 class="text-muted text-uppercase fw-semibold mb-3">Receiver Inform</h6>
                                                    <p class="fw-medium mb-2" id="shipping-name">David Nichols</p>
                                                    <p class="text-muted mb-1" id="shipping-address-line-1">{{$order->buyer_email}}</p>
                                                    <p class="text-muted mb-1"><span>Phone: +</span><span id="shipping-phone-no">234812345609</span></p>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end card-body-->
                                    </div><!--end col-->
                                    <div class="col-lg-12">
                                        <div class="card-body p-4">
                                            <div class="table-responsive">
                                                <table class="table table-borderless text-center table-nowrap align-middle mb-0">
                                                    <thead>
                                                        <tr class="table-active">
                                                            <th scope="col" style="width: 50px;">#</th>
                                                            <th scope="col">Product Name</th>
                                                            <th scope="col">Denomination (#)</th>
                                                            <th scope="col">Card Pin</th>
                                                            <th scope="col" class="text-end">Amount (#)</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="products-list">
                                                        @forelse ($orderLists as $item)
                                                        <tr>
                                                            <th scope="row">{{$item->reference}}</th>
                                                            <td class="text-start">
                                                                <span class="fw-medium">{{$item->cards->denominations->title}}</span>
                                                            </td>
                                                            <td>{{number_format($item->cards->denominations->amount,2)}}</td>
                                                            <td><span class="fw-bold">{{$item->cards->code}}</span></td>
                                                            <td class="text-end">{{number_format($item->cards->denominations->amount,2)}}</td>
                                                        </tr>
                                                        @empty

                                                        @endforelse

                                                    </tbody>
                                                </table><!--end table-->
                                            </div>
                                            <div class="border-top border-top-dashed mt-2">
                                                <table class="table table-borderless table-nowrap align-middle mb-0 ms-auto" style="width:250px">
                                                    <tbody>
                                                        <tr>
                                                            <td>Denomination</td>
                                                            <td class="text-end">{{number_format($item->cards->denominations->amount,2)}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Quantity</td>
                                                            <td class="text-end">{{$order->quantity}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vat Charge</td>
                                                            <td class="text-end">#0.00</td>
                                                        </tr>
                                                        <tr class="border-top border-top-dashed fs-15">
                                                            <th scope="row">Total Amount</th>
                                                            <th class="text-end">#{{number_format($order->total, 2)}}</th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!--end table-->
                                            </div>
                                            <div class="mt-3">
                                                <h6 class="text-muted text-uppercase fw-semibold mb-3">Payment Details:</h6>
                                                <p class="text-muted mb-1">Payment Method: <span class="fw-medium" id="payment-method">Bank Tranfer</span></p>
                                                <p class="text-muted mb-1">Account Name: <span class="fw-medium" id="card-holder-name">{{config('app.name')}}</span></p>
                                                <p class="text-muted mb-1">Account Number: <span class="fw-medium" id="card-number">8131915690</span></p>
                                                <p class="text-muted mb-1">Bank Type: <span class="fw-medium" id="card-number">Opay</span></p>
                                                <p class="text-muted">Total Amount: <span class="fw-medium" id="">$ </span><span id="card-total-amount">{{number_format($order->total,2)}}</span></p>
                                            </div>
                                            <div class="mt-4">
                                                <div class="alert alert-primary">
                                                    <p class="mb-0"><span class="fw-semibold">NOTES:</span>
                                                        <span id="note">All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or
                                                            credit card or direct payment online. If account is not paid within 7
                                                            days the credits details supplied as confirmation of work undertaken
                                                            will be charged the agreed quoted fee noted above.
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="hstack gap-2 justify-content-end d-print-none mt-4">
                                                <a href="javascript:window.print()" class="btn btn-soft-primary"><i class="ri-printer-line align-bottom me-1"></i> Print</a>
                                                <a href="" download="{{$order->reference}}" class="btn btn-primary"><i class="ri-download-2-line align-bottom me-1"></i> Download</a>
                                            </div>
                                        </div>
                                        <!--end card-body-->
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                </div><!-- container-fluid -->
            </div><!-- End Page-content -->

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
        </div><!-- end main content-->

@endsection
