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
<!-- Option 1: Include in HTML -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        @stack('styles')
    </head>

    <body id="body">
        <!-- leftbar-tab-menu -->
        <div class="leftbar-tab-menu">
            <div class="main-icon-menu">
                <a href="#" class="logo logo-metrica d-block text-center">
                    <span>
                        <img src="{{asset('/dashboard')}}/images/localcarz.png" height="50" width="80%" alt="logo" class="auth-logo">
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
                                <a class="nav-link" href="#">Video Test Drives</a>
                            </li><!--end nav-item-->

                            <li class="nav-item">

                                <a class="nav-link" href="#">Badges</a>
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#inventory" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="inventory">
                                Inventory
                            </a>
                            <div class="collapse " id="inventory">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="crm-contacts.html">Existing Inventory</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="crm-opportunities.html">Sold Inventory</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="crm-leads.html">Inventory Analysis</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="crm-customers.html">Inventory Exports</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end sidebarCRM-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('dealer.lead') }}">Leads & Contacts</a>
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#">Social Media</a>
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#">Tools</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#">Reports</a>
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#">Website</a>
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#">Settings</a>
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
        @include('dealer.layouts.topbar')
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{asset('/dashboard')}}/libs/simple-datatables/umd/simple-datatables.js"></script>
    <script src="{{asset('/dashboard')}}/js/pages/datatable.init.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(function () {
            var fileupload = $("#FileUpload1");
            var filePath = $("#spnFilePath");
            var button = $("#btnFileUpload");
            button.click(function () {
                fileupload.click();
            });
            fileupload.change(function () {
                var fileName = $(this).val().split('\\')[$(this).val().split('\\').length - 1];
                filePath.html("<b>Selected File: </b>" + fileName);
            });
        });
    </script>

</body>
    <!--end body-->
</html>
