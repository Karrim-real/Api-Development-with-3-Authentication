<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-layout-mode="dark" data-body-image="img-1" data-preloader="disable">
@include('backend.layout.head')
<div class="auth-page-wrapper pt-5">
    <!-- auth page content -->
    <div class="auth-page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mt-sm-5 mb-4 text-white-50">
                        <div>
                            <a href="{{route('auth.login')}}" class="d-inline-block auth-logo">
                                <img src="{{asset('backend/assets/images/logo-light.png')}}" alt="" height="20">
                            </a>
                        </div>
                        <p class="mt-3 fs-15 fw-medium">Premium Admin & Dashboard Template</p>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mt-4 card-bg-fill">
                        <div class="card-body p-4 text-center">
                            <lord-icon src="https://cdn.lordicon.com/hzomhqxz.json" trigger="loop" colors="primary:#8c68cd,secondary:#4788ffs" style="width:180px;height:180px"></lord-icon>

                            <div class="mt-4 pt-2">
                                <h5>You are Logged Out</h5>
                                <p class="text-muted">Thank you for using <span class="fw-semibold">velzon</span> admin template</p>
                                <div class="mt-4">
                                    <a href="{{route('auth.login')}}" class="btn btn-primary w-100">Sign In</a>
                                </div>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end auth page content -->
    @include('backend.layout.footer')
