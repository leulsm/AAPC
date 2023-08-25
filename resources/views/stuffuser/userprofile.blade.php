<!DOCTYPE html>
<html lang="en">

<head>
    <title>Stuff</title>

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
    <style>
        .notificationupdatepassword {
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            display: none;
        }
    </style>
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
                        <div class=""><a href="#" class="h5 ml-5 ">AAPC
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
                                        <a href="{{ route('stuffuser.userprofile') }}">
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
                    {{-- sidebar nav --}}
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
                                            <a href="{{ route('stuffuser.userprofile') }}"><i
                                                    class="ti-user"></i>View Profile</a>
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

                           

                            <div class="pcoded-navigation-label">Request</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="{{ route('stuffuser') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext">Send Request</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">Sent Request</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>BC</b></span>
                                        <span class="pcoded-mtext">Requests</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="{{ route('stuffuser.viewrequest') }}"
                                                class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">View Requests</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
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
                                            <h5 class="m-b-10">Profile</h5>
                                            <p class="m-b-0">stuff profile page</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="{{ route('stuffuser') }}"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="{{ route('stuffuser') }}">Stuff</a>
                                            </li>
                                            <li class="breadcrumb-item"><a
                                                    href="{{ route('stuffuser.userprofile') }}">Profile</a>
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
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">

                                            <div class="col-lg-4 col-xlg-3 col-md-5">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <center class="m-t-30"> <img
                                                                src="{{ asset('staffuser/assets/images/profile-avatar-account-male.png') }}"
                                                                class="img-circle" width="150" />
                                                            <h4 class="card-title m-t-10">{{ Auth::user()->name }}
                                                            </h4>
                                                            <h6 class="card-subtitle">{{ Auth::user()->email }}</h6>

                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Column -->
                                            <!-- Column -->
                                            <div class="col-lg-8 col-xlg-9 col-md-7">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <form class="form-horizontal form-material">
                                                            <div class="form-group">
                                                                <label class="col-md-12">Full Name</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" placeholder="Johnathan Doe"
                                                                        class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="example-email"
                                                                    class="col-md-12">Email</label>
                                                                <div class="col-md-12">
                                                                    <input type="email"
                                                                        placeholder="johnathan@admin.com"
                                                                        class="form-control form-control-line"
                                                                        name="example-email" id="example-email">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-12">Phone No</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" placeholder="123 456 7890"
                                                                        class="form-control form-control-line">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <div class="col-sm-12">
                                                                    <button class="btn btn-success">Update
                                                                        Profile</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <h4 class="mb-4">Update Password</h4>
                                                        <form class="form-horizontal form-material" method="post"
                                                            {{-- action="{{ route('password.update') }}"> --}}
                                                            action="">
                                                            @csrf
                                                            @method('put')
                                                            <div class="form-group">
                                                                <label class="col-md-12">Old Password</label>
                                                                <div class="col-md-12">
                                                                    <input type="password" name="current_password"
                                                                        id="current_password"
                                                                        placeholder="old password"
                                                                        class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">New
                                                                    Password</label>
                                                                <div class="col-md-12">
                                                                    <input type="password" placeholder="new password"
                                                                        class="form-control form-control-line"
                                                                        name="password" id="password">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Confirm New Password</label>
                                                                <div class="col-md-12">
                                                                    <input type="password" id="password_confirmation"
                                                                        name="password_confirmation" value="password"
                                                                        class="form-control form-control-line">
                                                                </div>
                                                            </div>


                                                            <div class="form-group">
                                                                <div class="col-sm-12">
                                                                    <button class="btn btn-success"
                                                                        type="submit">Update
                                                                        Password</button>

                                                                    @if (session('status') === 'password-updated')
                                                                        {{-- <p x-data="{ show: true }" x-show="show"
                                                                            x-transition x-init="setTimeout(() => show = false, 2000)"
                                                                            class="text-sm text-gray-600 dark:text-gray-400">
                                                                            {{ __('Saved.') }}</p> --}}
                                                                        <div class="notificationupdatepassword">
                                                                            UPDATED SUCCESSFULY
                                                                        </div>
                                    
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                                <div id="styleSelector"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Required Jquery -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var notificationupdatepassword = document.querySelector(".notificationupdatepassword");

            if (notificationupdatepassword) {
                notificationupdatepassword.style.display = "block";

                setTimeout(function() {
                    notificationupdatepassword.style.display = "none";
                }, 3000); // Change duration (in milliseconds) as per your preference
            }
        });
    </script>
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
</body>

</html>
