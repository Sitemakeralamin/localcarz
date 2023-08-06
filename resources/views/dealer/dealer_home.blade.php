@extends('dealer.layouts.app')

@section('content')
<div class="page-content-tab">

    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Localcarz</a>
                            </li><!--end nav-item-->
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Dashboard</h4>
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-3">
                <div class="card report-card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col">
                                <p class="text-dark mb-1 fw-semibold">Projects</p>
                                <h4 class="my-1">77</h4>
                                <p class="mb-0 text-truncate text-muted"><span class="text-success"><i class="mdi mdi-checkbox-marked-circle-outline me-1"></i></span>26 Project Complete</p>
                            </div>
                            <div class="col-auto align-self-center">
                                <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                    <i data-feather="layers" class="align-self-center text-muted icon-sm"></i>
                                </div>
                            </div>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div> <!--end col-->
            <div class="col-md-6 col-lg-3">
                <div class="card report-card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col">
                                <p class="text-dark mb-1 fw-semibold">Tasks</p>
                                <h4 class="my-1">41</h4>
                                <p class="mb-0 text-truncate text-muted"><span class="badge badge-soft-success">Active</span> Weekly Avg.Sessions</p>
                            </div>
                            <div class="col-auto align-self-center">
                                <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                    <i data-feather="check-square" class="align-self-center text-muted icon-sm"></i>
                                </div>
                            </div>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div> <!--end col-->
            <div class="col-md-6 col-lg-3">
                <div class="card report-card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col">
                                <p class="text-dark mb-1 fw-semibold">Total Hours</p>
                                <h4 class="my-1">801:30</h4>
                                <p class="mb-0 text-truncate text-muted"><span class="text-muted">01:33</span> /
                                    <span class="text-muted">9:30</span>  Duration</p>
                            </div>
                            <div class="col-auto align-self-center">
                                <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                    <i data-feather="clock" class="align-self-center text-muted icon-sm"></i>
                                </div>
                            </div>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div> <!--end col-->
            <div class="col-md-6 col-lg-3">
                <div class="card report-card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col">
                                <p class="text-dark mb-1 fw-semibold">Budget</p>
                                <h4 class="my-1">$24100</h4>
                                <p class="mb-0 text-truncate text-muted"><span class="text-dark">$14k</span> Total used budgets</p>
                            </div>
                            <div class="col-auto align-self-center">
                                <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                    <i data-feather="dollar-sign" class="align-self-center text-muted icon-sm"></i>
                                </div>
                            </div>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div> <!--end col-->
        </div><!--end row-->


    </div><!-- container -->


     <!--end Rightbar-->

    <!--Start Footer-->
    <!-- Footer Start -->
    {{-- <footer class="footer text-center text-sm-start">
        &copy; <script>
            document.write(new Date().getFullYear())
        </script> Metrica <span class="text-muted d-none d-sm-inline-block float-end">Crafted with <i
                class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
    </footer> --}}
    <!-- end Footer -->
    <!--end footer-->
</div>
@endsection
