<!DOCTYPE html>
<html lang="en">

<head>
    <title>Approve</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords"
        content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('staffuser/assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{ asset('staffuser/assets/pages/waves/css/waves.min.css') }}" type="text/css"
        media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('staffuser/assets/css/bootstrap/css/bootstrap.min.css') }}">
    <!-- waves.css -->
    <link rel="stylesheet"
        href="{{ asset('staffuser/assets/pages/waves/css/waves.min.css" type="text/css" media="all') }}">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('staffuser/assets/icon/themify-icons/themify-icons.css') }}">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="{{ asset('staffuser/assets/css/font-awesome-n.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('staffuser/assets/css/font-awesome.min.css') }}">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('staffuser/assets/css/jquery.mCustomScrollbar.css') }}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('staffuser/assets/css/style.css') }}">
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            {{-- upper top navbar --}}
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close"><i
                                                class="ti-close input-group-text"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn"><i
                                                class="ti-search input-group-text"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=""><a href="#" class="h4 pl-5">AAPC
                                {{-- <img class="img-fluid" src="{{asset('staffuser/assets/images/logo.png')}}" alt="Theme-Logo" /> --}}
                            </a></div>

                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()"
                                    class="waves-effect waves-light">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <i class="ti-bell"></i>
                                    <span class="badge bg-c-red"></span>
                                </a>
                                <ul class="show-notification">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius"
                                                src="{{ asset('staffuser/assets/images/avatar-2.jpg') }}"
                                                alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                    elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius"
                                                src="{{ asset('staffuser/assets/images/avatar-4.jpg') }}"
                                                alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                    elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius"
                                                src="{{ asset('staffuser/assets/images/avatar-3.jpg') }}"
                                                alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                    elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="user-profile header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <img src="{{ asset('staffuser/assets/images/avatar-4.jpg') }}" class="img-radius"
                                        alt="User-Profile-Image">
                                    <span>{{ Auth::user()->name }}</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li class="waves-effect waves-light">
                                        <a href="#!">
                                            <i class="ti-settings"></i> Settings
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="user-profile.html">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="email-inbox.html">
                                            <i class="ti-email"></i> My Messages
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="auth-lock-screen.html">
                                            <i class="ti-lock"></i> Lock Screen
                                        </a>
                                    </li>

                                    <li class="waves-effect waves-light">
                                        <a href="auth-normal-sign-in.html">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf

                                                <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                    this.closest('form').submit();">

                                                </x-dropdown-link>
                                            </form>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    {{-- sidebar nav --}}
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-80 img-radius"
                                        src="{{ asset('staffuser/assets/images/avatar-4.jpg') }}"
                                        alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span id="more-details">{{ Auth::user()->name }}<i
                                                class="fa fa-caret-down"></i></span>
                                    </div>
                                </div>
                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                                            <a href="#!"><i class="ti-settings"></i>Settings</a>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <a href="route('logout')"
                                                    onclick="event.preventDefault();this.closest('form').submit();"><i
                                                        class="ti-layout-sidebar-left"></i>Logout

                                                </a>
                                            </form>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                            {{-- <div class="p-15 p-b-0">
                                <form class="form-material">
                                    <div class="form-group form-primary">
                                        <input type="text" name="footer-email" class="form-control">
                                        <span class="form-bar"></span>
                                        <label class="float-label"><i class="fa fa-search m-r-10"></i>Search Friend</label>
                                    </div>
                                </form>
                            </div> --}}
                            <div class="pcoded-navigation-label">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="{{ route('directoruser') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext">Home</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>


                            <div class="pcoded-navigation-label">Request</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>BC</b></span>
                                        <span class="pcoded-mtext">New Requests</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="active">
                                            <a href="{{route('directoruser.softrequest')}}" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Software Department</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="button.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Hardware Department</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        {{-- doctor telaye asfaw book telayen kedmkut--}}
                                        <li class="">
                                            <a href="accordion.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Network Department</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>


                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="{{ route('directoruser.oldrequests') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext">Old Request</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    {{-- @include('directoruser.home'); --}}
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">New Maintenance Request</h5>
                                            <p class="m-b-0">Software Department.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">New Request</a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Software Department</a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Approve</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <!-- Page body start -->
                                    <div class="page-body">


                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Assign Technician</h5>
                                                        {{-- <h5>Maintenance Request's</h5> --}}
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <address>
                                                                            <strong>Billed To:</strong><br>
                                                                            Sarah Smith<br>
                                                                            6404 Cut Glass Ct,<br>
                                                                            Wendell,<br>
                                                                            NC, 27591, USA
                                                                        </address>
                                                                    </div>
                                                                    <div class="col-md-6 text-md-right">
                                                                        <address>
                                                                            <strong>Shipped To:</strong><br>
                                                                            Keith Johnson<br>
                                                                            197 N 2000th E<br>
                                                                            Rexburg, ID,<br>
                                                                            Springfield Center, USA
                                                                        </address>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <address>
                                                                            <strong>Payment
                                                                                Method:</strong><br>
                                                                            Visa ending **** 5687<br>
                                                                            test@example.com
                                                                        </address>
                                                                    </div>
                                                                    <div class="col-md-6 text-md-right">
                                                                        <address>
                                                                            <strong>Order Date:</strong><br>
                                                                            June 26, 2018<br><br>
                                                                        </address>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="section-title">Select Technician</div>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <select class="form-control select2">
                                                                        <option>Technician 1</option>
                                                                        <option>Technician 2</option>
                                                                        <option>Technician 3</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2"></div>
                                                            <div class="col-sm-6 card">
                                                                <div class="card-body">
                                                                    <label for="">Name:</label>
                                                                    <label for="">Technician 1    </label>
                                                                    <label for="">work assigned on:</label>
                                                                    <label for="">1</label>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="row"> --}}
                                                    <div class="text-md-right">
                                                        <button class="btn btn-success">Confirm</button>
                                                    </div>
                                                    {{-- </div> --}}
                                                </div>
                                                <!-- Basic Form Inputs card end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page body end -->
                                </div>
                            </div>
                            <!-- Main-body end -->
                            <div id="styleSelector">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Required Jquery -->
    <script type="text/javascript" src="{{ asset('staffuser/assets/js/jquery/jquery.min.js ') }}"></script>
    <script type="text/javascript" src="{{ asset('staffuser/assets/js/jquery-ui/jquery-ui.min.js ') }}"></script>
    <script type="text/javascript" src="{{ asset('staffuser/assets/js/popper.js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('staffuser/assets/js/bootstrap/js/bootstrap.min.js ') }}"></script>
    <!-- waves js -->
    <script src="{{ asset('staffuser/assets/pages/waves/js/waves.min.js') }}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ asset('staffuser/assets/js/jquery-slimscroll/jquery.slimscroll.js') }}">
    </script>

    <!-- slimscroll js -->
    <script src="{{ asset('staffuser/assets/js/jquery.mCustomScrollbar.concat.min.js ') }}"></script>

    <!-- menu js -->
    <script src="{{ asset('staffuser/assets/js/pcoded.min.js') }}"></script>
    <script src="{{ asset('staffuser/assets/js/vertical/vertical-layout.min.js ') }}"></script>

    <script type="text/javascript" src="{{ asset('staffuser/assets/js/script.js') }} "></script>

    {{-- ------------ --}}
    {{-- <script src="{{ asset('Admin_template/assets/js/app.min.js')}}"></script>
    <!-- JS Libraies -->
    <script src="{{ asset('Admin_template/assets/bundles/cleave-js/dist/cleave.min.js')}}"></script>
    <script src="{{ asset('Admin_template/assets/bundles/cleave-js/dist/addons/cleave-phone.us.js')}}"></script>
    <script src="{{ asset('Admin_template/assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js')}}"></script>
    <script src="{{ asset('Admin_template/assets/bundles/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{ asset('Admin_template/assets/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
    <script src="{{ asset('Admin_template/assets/bundles/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
    <script src="{{ asset('Admin_template/assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{ asset('Admin_template/assets/bundles/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{ asset('Admin_template/assets/bundles/jquery-selectric/jquery.selectric.min.js')}}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('Admin_template/assets/js/page/forms-advanced-forms.js')}}"></script>
    <!-- Template JS File -->
    <script src="{{ asset('Admin_template/assets/js/scripts.js')}}"></script>
    <!-- Custom JS File -->
    <script src="{{ asset('Admin_template/assets/js/custom.js')}}"></script> --}}
</body>

</html>
