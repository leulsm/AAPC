<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Stuff</title>

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
                        <h1 class="page-head-line">User Request Page</h1>
                        <h1 class="page-subhead-line">Please fill the form and send to the coresponding divition. </h1>

                    </div>              
    <div class="col-12 col-md-6 col-lg-10">
        <div class="card">
            <div class="card-header">
                <h4>Request form</h4>
            </div>
            <div class="card-body">
                <div class=" row d-flex">
                    
                    <div class="form-group col-12 col-md-6 col-lg-6"">
                        <label>First Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-12 col-md-6 col-lg-6">
                        <label>Last name</label>
                        <input type="text" class="form-control">
                    </div>

                </div>
               <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Departement</label>
                    <select class="form-control">
                        <option>Software</option>
                        <option>Hardware</option>
                        <option>Database</option>
                    </select>
                </div>
               
                
                <div class="form-group">
                    <label class="d-block">Checkbox</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Checkbox 1
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="defaultCheck3">
                        <label class="form-check-label" for="defaultCheck3">
                            Checkbox 2
                        </label>
                    </div>
                </div>
                
                <div class="form-group">
                    <label>Datetime Local</label>
                    <input type="datetime-local" class="form-control">
                </div>
                
                <div class="form-group">
                    <label>File</label>
                    <input type="file" class="form-control">
                </div>
              
               
                <div class="form-group">
                    <label class="d-block">Radio</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Radio 1
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                        <label class="form-check-label" for="exampleRadios2">
                            Radio 2
                        </label>
                    </div>
                </div>
        
               
            </div>
            <div class="form-group">
                    <label>Textarea</label>
                    <textarea class="form-control"></textarea>
            </div>

            <div class="card-footer text-right">
                <button class="btn  mr-1" type="submit">Submit</button>
                <button class="btn " type="reset">Reset</button>
            </div>
        </div>
        
        </div>
    </div>
           </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
        &copy; 2014 AAPV | Design By : AI
    </div>
    {{-- <a href="http://www.binarytheme.com/" target="_blank">AI</a> --}}
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
