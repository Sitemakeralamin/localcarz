<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>


        <meta charset="utf-8" />
                <title>{{ config('app.name') }}</title>
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
                <meta content="" name="author" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />

                <!-- App favicon -->
                <link rel="shortcut icon" href="{{asset('/dashboard')}}/images/favicon.ico">



         <!-- App css -->
         <link href="{{asset('/dashboard')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
         <link href="{{asset('/dashboard')}}/css/icons.min.css" rel="stylesheet" type="text/css" />
         <link href="{{asset('/dashboard')}}/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body id="body">
        <!-- leftbar-tab-menu -->
        <div class="leftbar-tab-menu">
            <div class="main-icon-menu">
                <a href="#" class="logo logo-metrica d-block text-center">
                    <span>
                        <img src="{{asset('/dashboard')}}/images/logo-sm.png" alt="logo-small" class="logo-sm">
                    </span>
                </a>
                <div class="main-icon-menu-body">
                    <div class="position-reletive h-100" data-simplebar style="overflow-x: hidden;">
                        <ul class="nav nav-tabs" role="tablist" id="tab-menu">
                            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard" data-bs-trigger="hover">
                                <a href="#MetricaDashboard" id="dashboard-tab" class="nav-link">
                                    <i class="ti ti-smart-home menu-icon"></i>
                                </a><!--end nav-link-->
                            </li><!--end nav-item-->
                        </ul><!--end nav-->
                    </div><!--end /div-->
                </div><!--end main-icon-menu-body-->
                <div class="pro-metrica-end">
                    <a href="" class="profile">
                        <img src="{{asset('/dashboard')}}/images/users/user-4.jpg" alt="profile-user" class="rounded-circle thumb-sm">
                    </a>
                </div><!--end pro-metrica-end-->
            </div>
            <!--end main-icon-menu-->

            <div class="main-menu-inner">
                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="#" class="logo">
                        <h4>
                            {{ Auth::user()->name }}
                            <!-- <img src="{{asset('/dashboard')}}/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">
                            <img src="{{asset('/dashboard')}}/images/logo.png" alt="logo-large" class="logo-lg logo-light"> -->
                        </h4>
                    </a><!--end logo-->
                </div><!--end topbar-left-->
                <!--end logo-->
                <div class="menu-body navbar-vertical tab-content" data-simplebar>
                    <div id="MetricaDashboard" class="main-icon-menu-pane tab-pane" role="tabpanel"
                        aria-labelledby="dasboard-tab">
                        <div class="title-box">
                            <h6 class="menu-title">Dashboard</h6>
                        </div>

                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Analytics</a>
                            </li><!--end nav-item-->

                        </ul><!--end nav-->
                    </div><!-- end Dashboards -->

                </div>
                <!--end menu-body-->
            </div><!-- end main-menu-inner-->
        </div>
        <!-- end leftbar-tab-menu-->

        <!-- Top Bar Start -->
        <!-- Top Bar Start -->
        @include('layouts.topbar')
        <!-- Top Bar End -->
        <!-- Top Bar End -->

        <div class="page-wrapper">

            <!-- Page Content-->
           @yield('content')
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        <!-- Javascript  -->
        <!-- vendor js -->

        <script src="{{asset('/dashboard')}}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('/dashboard')}}/libs/simplebar/simplebar.min.js"></script>
        <script src="{{asset('/dashboard')}}/libs/feather-icons/feather.min.js"></script>

        <script src="{{asset('/dashboard')}}/libs/apexcharts/apexcharts.min.js"></script>
        <script src="{{asset('/dashboard')}}/js/pages/analytics-index.init.js"></script>
        <!-- App js -->
        <script src="{{asset('/dashboard')}}/js/app.js"></script>

    </body>
    <!--end body-->
</html>
