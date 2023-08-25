<!DOCTYPE html>
<html lang="en">

<head>
    <title>Single Request</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords"
        content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="staffuser/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{ asset('staffuser/assets/pages/waves/css/waves.min.css') }}" type="text/css"
        media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('staffuser/assets/css/bootstrap/css/bootstrap.min.css') }}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('staffuser/assets/icon/themify-icons/themify-icons.css') }}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('staffuser/assets/icon/icofont/css/icofont.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('staffuser/assets/icon/font-awesome/css/font-awesome.min.css') }}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('staffuser/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('staffuser/assets/css/jquery.mCustomScrollbar.css') }}">

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
                        <div class=""><a href="#" class="h5 ml-5 ">AAPC
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
                                    <img src="{{ asset('staffuser/assets/images/profile-avatar-account-male.png') }}"
                                        class="img-radius" alt="User-Profile-Image">
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
                                    {{-- <li class="waves-effect waves-light">
                                        <a href="auth-lock-screen.html">
                                            <i class="ti-lock"></i> Lock Screen
                                        </a>
                                    </li> --}}
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
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-80 img-radius"
                                        src="{{ asset('staffuser/assets/images/profile-avatar-account-male.png') }}"
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
                                            {{-- <a href="auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Logout</a> --}}
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
                            <div class="p-15 p-b-0">
                                <div class="pcoded-navigation-label">Request</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="">
                                        <a href="{{ route('stuffuser') }}" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                            <span class="pcoded-mtext">Request Form</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="pcoded-navigation-label">Sent Request</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(1)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i
                                                    class="ti-layout-grid2-alt"></i><b>BC</b></span>
                                            <span class="pcoded-mtext">Requests</span>
                                            {{-- <span class="pcoded-mcaret"></span> --}}
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="active">
                                                <a href="{{ route('stuffuser.viewrequest') }}"
                                                    class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">View Requests</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="{{ route('stuffuser.statustable') }}"
                                                    class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">View Status</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                </ul>


                            </div>
                    </nav>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Request Form Inputs</h5>
                                            <p class="m-b-0">Fill the form carfully.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a
                                                    href="{{ route('stuffuser.viewrequest') }}">View Request</a>
                                            </li>
                                            {{-- <li class="breadcrumb-item"><a href="#!">Basic Form Inputs</a> --}}
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
                                                        <h5>Maintenance Request's</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-striped" id="table-2">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-center pt-3">
                                                                            <div
                                                                                class="custom-checkbox custom-checkbox-table custom-control">
                                                                                <input type="checkbox"
                                                                                    data-checkboxes="mygroup"
                                                                                    data-checkbox-role="dad"
                                                                                    class="custom-control-input"
                                                                                    id="checkbox-all">
                                                                                <label for="checkbox-all"
                                                                                    class="custom-control-label">&nbsp;</label>
                                                                            </div>
                                                                        </th>
                                                                        <th>First Name</th>
                                                                        <th>Last Name</th>
                                                                        <th>Position</th>
                                                                        <th>Registered Date</th>
                                                                        <th>Detail</th>
                                                                        <th>Edit</th>
                                                                        <th>Delete</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="text-center pt-2">
                                                                            <div
                                                                                class="custom-checkbox custom-control">
                                                                                <input type="checkbox"
                                                                                    data-checkboxes="mygroup"
                                                                                    class="custom-control-input"
                                                                                    id="checkbox-1">
                                                                                <label for="checkbox-1"
                                                                                    class="custom-control-label">&nbsp;</label>
                                                                            </div>
                                                                        </td>
                                                                        <td>User 1</td>
                                                                        <td class="align-middle">
                                                                            dddd
                                                                            {{-- <div class="progress progress-xs">
                                                                                <div class="progress-bar width-per-70"></div>
                                                                            </div> --}}
                                                                        </td>
                                                                        <td>
                                                                            {{-- <img alt="image" src="assets/img/users/user-5.png" width="35"> --}}
                                                                            Expert
                                                                        </td>
                                                                        <td>2018-01-20</td>
                                                                        {{-- <td>
                                                                            <div class="badge badge-success badge-shadow">Active</div>
                                                                        </td> --}}
                                                                        <td><a href="{{ route('stuffuser.singlerequestpage') }}"
                                                                                class="btn btn-primary">Detail</a></td>
                                                                        <td><a href="{{ route('stuffuser.editrequest') }}"
                                                                                class="btn btn-success">Edit</a></td>
                                                                        <td><a href="#"
                                                                                class="btn btn-danger">Delete</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center pt-2">
                                                                            <div
                                                                                class="custom-checkbox custom-control">
                                                                                <input type="checkbox"
                                                                                    data-checkboxes="mygroup"
                                                                                    class="custom-control-input"
                                                                                    id="checkbox-2">
                                                                                <label for="checkbox-2"
                                                                                    class="custom-control-label">&nbsp;</label>
                                                                            </div>
                                                                        </td>
                                                                        <td>User 2</td>
                                                                        <td class="align-middle">
                                                                            eeee
                                                                            {{-- <div class="progress progress-xs">
                                                                                <div class="progress-bar width-per-60"></div>
                                                                            </div> --}}
                                                                        </td>
                                                                        <td>
                                                                            Director
                                                                            {{-- <img alt="image" src="assets/img/users/user-1.png" width="35">
                                                                            <img alt="image" src="assets/img/users/user-3.png" width="35">
                                                                            <img alt="image" src="assets/img/users/user-4.png" width="35"> --}}
                                                                        </td>
                                                                        <td>2018-04-10</td>
                                                                        {{-- <td>
                                                                            <div class="badge badge-info badge-shadow">Verified</div>
                                                                        </td> --}}
                                                                        <td><a href="#"
                                                                                class="btn btn-primary">Detail</a></td>
                                                                        <td><a href="#"
                                                                                class="btn btn-success">Edit</a></td>
                                                                        <td><a href="#"
                                                                                class="btn btn-danger">Delete</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center pt-2">
                                                                            <div
                                                                                class="custom-checkbox custom-control">
                                                                                <input type="checkbox"
                                                                                    data-checkboxes="mygroup"
                                                                                    class="custom-control-input"
                                                                                    id="checkbox-3">
                                                                                <label for="checkbox-3"
                                                                                    class="custom-control-label">&nbsp;</label>
                                                                            </div>
                                                                        </td>
                                                                        <td>User 3</td>
                                                                        <td class="align-middle">
                                                                            fffff
                                                                            {{-- <div class="progress progress-xs">
                                                                                <div class="progress-bar bg-warning width-per-70"></div>
                                                                            </div> --}}
                                                                        </td>
                                                                        <td>
                                                                            Employee
                                                                            {{-- <img alt="image" src="assets/img/users/user-1.png" width="35">
                                                                            <img alt="image" src="assets/img/users/user-2.png" width="35"> --}}
                                                                        </td>
                                                                        <td>2018-01-29</td>
                                                                        {{-- <td>
                                                                            <div class="badge badge-warning badge-shadow">Inactive</div>
                                                                        </td> --}}
                                                                        <td><a href="#"
                                                                                class="btn btn-primary">Detail</a></td>
                                                                        <td><a href="#"
                                                                                class="btn btn-success">Edit</a></td>
                                                                        <td><a href="#"
                                                                                class="btn btn-danger">Delete</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center pt-2">
                                                                            <div
                                                                                class="custom-checkbox custom-control">
                                                                                <input type="checkbox"
                                                                                    data-checkboxes="mygroup"
                                                                                    class="custom-control-input"
                                                                                    id="checkbox-4">
                                                                                <label for="checkbox-4"
                                                                                    class="custom-control-label">&nbsp;</label>
                                                                            </div>
                                                                        </td>
                                                                        <td>User 4</td>
                                                                        <td class="align-middle">
                                                                            gggg
                                                                            {{-- <div class="progress progress-xs">
                                                                                <div class="progress-bar bg-success width-per-40"></div>
                                                                            </div> --}}
                                                                        </td>
                                                                        <td>
                                                                            Expert
                                                                            {{-- <img alt="image" src="assets/img/users/user-2.png" width="35">
                                                                            <img alt="image" src="assets/img/users/user-5.png" width="35">
                                                                            <img alt="image" src="assets/img/users/user-4.png" width="35">
                                                                            <img alt="image" src="assets/img/users/user-1.png" width="35"> --}}
                                                                        </td>
                                                                        <td>2018-01-16</td>
                                                                        {{-- <td>
                                                                            <div class="badge badge-success badge-shadow">Active</div>
                                                                        </td> --}}
                                                                        <td><a href="#"
                                                                                class="btn btn-primary">Detail</a></td>
                                                                        <td><a href="#"
                                                                                class="btn btn-success">Edit</a></td>
                                                                        <td><a href="#"
                                                                                class="btn btn-danger">Delete</a></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
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
    <script type="text/javascript" src="{{ asset('staffuser/assets/js/jquery/jquery.min.js') }} "></script>
    <script type="text/javascript" src="{{ asset('staffuser/assets/js/jquery-ui/jquery-ui.min.js') }} "></script>
    <script type="text/javascript" src="{{ asset('staffuser/assets/js/popper.js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('staffuser/assets/js/bootstrap/js/bootstrap.min.js') }} "></script>
    <!-- waves js -->
    <script src="{{ asset('staffuser/assets/pages/waves/js/waves.min.js') }}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ asset('staffuser/assets/js/jquery-slimscroll/jquery.slimscroll.js') }}">
    </script>

    <!-- Custom js -->
    <script src="{{ asset('staffuser/assets/js/pcoded.min.js') }}"></script>
    <script src="{{ asset('staffuser/assets/js/vertical/vertical-layout.min.js') }}"></script>
    <script src="{{ asset('staffuser/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('staffuser/assets/js/script.js') }}"></script>
</body>

</html>
