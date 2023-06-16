<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Previous requests</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="advance-admin/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="advance-admin/assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="advance-admin/assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="advance-admin/assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div id="wrapper">
        @include('stuff.headernavbar');
        <!-- /. NAV TOP  -->
        @include('stuff.sidenavbar')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Previous Request Table</h1>
                        <h1 class="page-subhead-line">Please fill the form and send to the coresponding divition. </h1>

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Multi Select</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="table-2">
                                            <thead>
                                                <tr>
                                                    <th class="text-center pt-3">
                                                        <div class="custom-checkbox custom-checkbox-table custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                                                                class="custom-control-input" id="checkbox-all">
                                                            <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                                        </div>
                                                    </th>
                                                    <th>First Name</th>
                                                   
                                                    <th>Position</th>
                                                    <th>Registered Date</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center pt-2">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                                id="checkbox-1">
                                                            <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td>User 1</td>
                                                    {{-- <td class="align-middle">
                                                        dddd --}}
                                                        {{-- <div class="progress progress-xs">
                                                            <div class="progress-bar width-per-70"></div>
                                                        </div> --}}
                                                    {{-- </td> --}}
                                                    <td>
                                                        {{-- <img alt="image" src="assets/img/users/user-5.png" width="35"> --}}
                                                        Expert
                                                    </td>
                                                    <td>2018-01-20</td>
                                                    <td>
                                                        <div class="badge badge-success badge-shadow">Active</div>
                                                    </td>
                                                    <td><a href="#" class="btn btn-primary">Delete</a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center pt-2">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                                id="checkbox-2">
                                                            <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td>User 2</td>
                                                    {{-- <td class="align-middle">
                                                        eeee --}}
                                                        {{-- <div class="progress progress-xs">
                                                            <div class="progress-bar width-per-60"></div>
                                                        </div> --}}
                                                    {{-- </td> --}}
                                                    <td>
                                                        Director
                                                        {{-- <img alt="image" src="assets/img/users/user-1.png" width="35">
                                                        <img alt="image" src="assets/img/users/user-3.png" width="35">
                                                        <img alt="image" src="assets/img/users/user-4.png" width="35"> --}}
                                                    </td>
                                                    <td>2018-04-10</td>
                                                    <td>
                                                        <div class="badge badge-info badge-shadow">Verified</div>
                                                    </td>
                                                    <td><a href="#" class="btn btn-primary">Delete</a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center pt-2">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                                id="checkbox-3">
                                                            <label for="checkbox-3" class="custom-control-label">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td>User 3</td>
                                                    {{-- <td class="align-middle">
                                                        fffff --}}
                                                        {{-- <div class="progress progress-xs">
                                                            <div class="progress-bar bg-warning width-per-70"></div>
                                                        </div> --}}
                                                    {{-- </td> --}}
                                                    <td>
                                                        Employee
                                                        {{-- <img alt="image" src="assets/img/users/user-1.png" width="35">
                                                        <img alt="image" src="assets/img/users/user-2.png" width="35"> --}}
                                                    </td>
                                                    <td>2018-01-29</td>
                                                    <td>
                                                        <div class="badge badge-warning badge-shadow">Inactive</div>
                                                    </td>
                                                    <td><a href="#" class="btn btn-primary">Delete</a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center pt-2">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                                id="checkbox-4">
                                                            <label for="checkbox-4" class="custom-control-label">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td>User 4</td>
                                                    {{-- <td class="align-middle">
                                                        gggg --}}
                                                        {{-- <div class="progress progress-xs">
                                                            <div class="progress-bar bg-success width-per-40"></div>
                                                        </div> --}}
                                                    {{-- </td> --}}
                                                    <td>
                                                        Expert
                                                        {{-- <img alt="image" src="assets/img/users/user-2.png" width="35">
                                                        <img alt="image" src="assets/img/users/user-5.png" width="35">
                                                        <img alt="image" src="assets/img/users/user-4.png" width="35">
                                                        <img alt="image" src="assets/img/users/user-1.png" width="35"> --}}
                                                    </td>
                                                    <td>2018-01-16</td>
                                                    <td>
                                                        <div class="badge badge-success badge-shadow">Active</div>
                                                    </td>
                                                    <td><a href="#" class="btn btn-primary">Delete</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
   
                </div>
                <!-- /. ROW  -->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="advance-admin/assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="advance-admin/assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="advance-admin/assets/js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="advance-admin/assets/js/custom.js"></script>
    


</body>
</html>
