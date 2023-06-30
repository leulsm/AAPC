@extends('admin.layouts.template')
@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-0">
                        <div class="card-body">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">All <span
                                            class="badge badge-white">10</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Draft <span class="badge badge-primary">2</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Pending <span
                                            class="badge badge-primary">3</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Trash <span class="badge badge-primary">0</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Posts</h4>
                        </div>
                        <div class="card-body">
                            <div class="float-left">
                                <select class="form-control selectric">
                                    <option>Action For Selected</option>
                                    <option>Move to Draft</option>
                                    <option>Move to Pending</option>
                                    <option>Delete Permanently</option>
                                </select>
                            </div>
                            <div class="float-right">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="clearfix mb-3"></div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tr>
                                        <th class="pt-2">
                                            <div class="custom-checkbox custom-checkbox-table custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                                                    class="custom-control-input" id="checkbox-all">
                                                <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th>Author</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Created At</th>
                                        <th>Views</th>
                                        <th>Status</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup"
                                                    class="custom-control-input" id="checkbox-2">
                                                <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#">
                                                <img alt="image"
                                                    src="{{ asset('dashboard_asset/assets/img/users/user-3.png') }}"
                                                    class="rounded-circle" width="35" data-toggle="title"
                                                    title="">
                                                <span class="d-inline-block ml-1">Cara Stevens</span>
                                            </a>
                                        </td>
                                        <td>Post Title 1
                                            <div class="table-links">
                                                <a href="#">View</a>
                                                <div class="bullet"></div>
                                                <a href="#">Edit</a>
                                                <div class="bullet"></div>
                                                <a href="#" class="text-danger">Trash</a>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#">Science</a>
                                        </td>
                                        <td>10-02-2019</td>
                                        <td>3,587</td>
                                        <td>
                                            <div class="badge badge-warning">Pending</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup"
                                                    class="custom-control-input" id="checkbox-3">
                                                <label for="checkbox-3" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#">
                                                <img alt="image" src="{{ asset('dashboard_asset/assets/img/user.png') }}"
                                                    class="rounded-circle" width="35" data-toggle="title"
                                                    title="">
                                                <span class="d-inline-block ml-1">Sarah Smith</span>
                                            </a>
                                        </td>
                                        <td>Post Title 2
                                            <div class="table-links">
                                                <a href="#">View</a>
                                                <div class="bullet"></div>
                                                <a href="#">Edit</a>
                                                <div class="bullet"></div>
                                                <a href="#" class="text-danger">Trash</a>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#">Software Developer</a>
                                        </td>
                                        <td>10-05-2018</td>
                                        <td>4,785</td>
                                        <td>
                                            <div class="badge badge-primary">Published</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup"
                                                    class="custom-control-input" id="checkbox-4">
                                                <label for="checkbox-4" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#">
                                                <img alt="image"
                                                    src="{{ asset('dashboard_asset/assets/img/users/user-3.png') }}"
                                                    class="rounded-circle" width="35" data-toggle="title"
                                                    title="">
                                                <span class="d-inline-block ml-1">Rizal Fakhri</span>
                                            </a>
                                        </td>
                                        <td>Post Title 3
                                            <div class="table-links">
                                                <a href="#">View</a>
                                                <div class="bullet"></div>
                                                <a href="#">Edit</a>
                                                <div class="bullet"></div>
                                                <a href="#" class="text-danger">Trash</a>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#">Web Developer</a>
                                        </td>
                                        <td>25-06-2018</td>
                                        <td>1,458</td>
                                        <td>
                                            <div class="badge badge-primary">Published</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup"
                                                    class="custom-control-input" id="checkbox-5">
                                                <label for="checkbox-5" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#">
                                                <img alt="image"
                                                    src="{{ asset('dashboard_asset/assets/img/users/user-4.png') }}"
                                                    class="rounded-circle" width="35" data-toggle="title"
                                                    title="">
                                                <span class="d-inline-block ml-1">Hasan Basri</span>
                                            </a>
                                        </td>
                                        <td>Post Title 4
                                            <div class="table-links">
                                                <a href="#">View</a>
                                                <div class="bullet"></div>
                                                <a href="#">Edit</a>
                                                <div class="bullet"></div>
                                                <a href="#" class="text-danger">Trash</a>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#">Social Service</a>
                                        </td>
                                        <td>11-02-2017</td>
                                        <td>5,250</td>
                                        <td>
                                            <div class="badge badge-danger">Draft</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup"
                                                    class="custom-control-input" id="checkbox-1">
                                                <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#">
                                                <img alt="image"
                                                    src="{{ asset('dashboard_asset/assets/img/users/user-5.png') }}"
                                                    class="rounded-circle" width="35" data-toggle="title"
                                                    title="">
                                                <span class="d-inline-block ml-1">Hasan Basri</span>
                                            </a>
                                        </td>
                                        <td>Post Title 5
                                            <div class="table-links">
                                                <a href="#">View</a>
                                                <div class="bullet"></div>
                                                <a href="#">Edit</a>
                                                <div class="bullet"></div>
                                                <a href="#" class="text-danger">Trash</a>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#">Politics</a>
                                        </td>
                                        <td>25-05-2018</td>
                                        <td>952</td>
                                        <td>
                                            <div class="badge badge-warning">Pending</div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="float-right">
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ********************************************** --}}
    <section class="section">
        <div class="section-body">
            {{-- <div class="row">
                <div class="col-xl-8 col-md-12 col-lg-8">
                    {{-- <div class="card">
                        <div class="card-header">
                            <h4>Revenue Chart</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-inline text-center">
                                <li class="list-inline-item p-r-30"><i data-feather="arrow-up-circle"
                                        class="col-green"></i>
                                    <h5 class="m-b-0">$675</h5>
                                    <p class="text-muted font-14 m-b-0">Weekly Earnings</p>
                                </li>
                                <li class="list-inline-item p-r-30"><i data-feather="arrow-down-circle"
                                        class="col-orange"></i>
                                    <h5 class="m-b-0">$1,587</h5>
                                    <p class="text-muted font-14 m-b-0">Monthly Earnings</p>
                                </li>
                                <li class="list-inline-item p-r-30"><i data-feather="arrow-up-circle"
                                        class="col-green"></i>
                                    <h5 class="mb-0 m-b-0">$45,965</h5>
                                    <p class="text-muted font-14 m-b-0">Yearly Earnings</p>
                                </li>
                            </ul>
                            <div id="revenue"></div>
                        </div>
                    </div> --}}
            {{-- </div> --}}
            {{-- <div class="col-xl-4 col-md-12 col-lg-4">
                    <div class="card l-bg-orange">
                        <div class="card-body">
                            <div class="text-white">
                                <div class="row">
                                    <div class="col-md-6 col-lg-5">
                                        <h4 class="mb-0 font-26">$1,235</h4>
                                        <p class="mb-2">Avg Sales Per Month</p>
                                        <p class="mb-0">
                                            <span class="font-20">+11.25% </span>Increase
                                        </p>
                                    </div>
                                    <div class="col-md-6 col-lg-7">
                                        <div class="sparkline-bar p-t-50"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card l-bg-cyan">
                        <div class="card-body">
                            <div class="text-white">
                                <div class="row">
                                    <div class="col-md-6 col-lg-5">
                                        <h4 class="mb-0 font-26">758</h4>
                                        <p class="mb-2">Avg new Cust Per Month</p>
                                        <p class="mb-0">
                                            <span class="font-20">+25.11%</span> Increase
                                        </p>
                                    </div>
                                    <div class="col-md-6 col-lg-7">
                                        <div class="sparkline-line-chart2 p-t-50"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div> --}}
            {{-- <div class="row">
                <div class="col-12 col-sm-12 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Summary</h4>
                            <div class="card-header-action">
                                <a href="#summary-chart" data-tab="summary-tab" class="btn active">Chart</a>
                                <a href="#summary-text" data-tab="summary-tab" class="btn">Text</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="summary">
                                <div class="summary-info" data-tab-group="summary-tab" id="summary-text">
                                    <h4>$3,157</h4>
                                    <div class="text-muted">Total Earning Today</div>
                                    <div class="d-block mt-2">
                                        <a href="#">View All</a>
                                    </div>
                                </div>
                                <div class="summary-chart active" data-tab-group="summary-tab" id="summary-chart">
                                    <canvas id="myChart" height="180"></canvas>
                                </div>
                                <div class="summary-item">
                                    <h6 class="mt-3">Recent Purchase <span class="text-muted">(4 Items)</span></h6>
                                    <ul class="list-unstyled list-unstyled-border">
                                        <li class="media">
                                            <img alt="image" src="assets/img/users/user-1.png"
                                                class="mr-3 user-img-radious-style user-list-img" width="40">
                                            <div class="media-body">
                                                <div class="media-right">$112</div>
                                                <div class="media-title"><a href="#">Sarah Smith</a></div>
                                                <div class="text-small text-muted">From <a href="#">London</a>
                                                    <div class="bullet"></div> Monday
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <a href="#">
                                                <img alt="image" src="assets/img/users/user-2.png"
                                                    class="mr-3 user-img-radious-style user-list-img" width="40">
                                            </a>
                                            <div class="media-body">
                                                <div class="media-right">$225</div>
                                                <div class="media-title"><a href="#">Ashton Cox</a></div>
                                                <div class="text-small text-muted">From <a href="#">India</a>
                                                    <div class="bullet"></div> Sunday
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <a href="#">
                                                <img alt="image" src="assets/img/users/user-3.png"
                                                    class="mr-3 user-img-radious-style user-list-img" width="40">
                                            </a>
                                            <div class="media-body">
                                                <div class="media-right">$479</div>
                                                <div class="media-title"><a href="#">John Doe</a></div>
                                                <div class="text-muted text-small">From <a href="#">China</a>
                                                    <div class="bullet"></div> Friday
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <a href="#">
                                                <img alt="image" src="assets/img/users/user-4.png"
                                                    class="mr-3 user-img-radious-style user-list-img" width="40">
                                            </a>
                                            <div class="media-body">
                                                <div class="media-right">$669</div>
                                                <div class="media-title"><a href="#">Airi Satou</a></div>
                                                <div class="text-small text-muted">From <a href="#">Shilanka</a>
                                                    <div class="bullet"></div> Tuesday
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Statistics</h4>
                            <div class="card-header-action">
                                <a href="#" class="btn active">Week</a>
                                <a href="#" class="btn">Month</a>
                                <a href="#" class="btn">Year</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="myChart2" height="180"></canvas>
                            <div class="statistic-details mt-1">
                                <div class="statistic-details-item">
                                    <div class="text-small text-muted"><span class="text-primary"><i
                                                class="fas fa-caret-up"></i></span> 12%</div>
                                    <div class="detail-value">$125</div>
                                    <div class="detail-name">Today</div>
                                </div>
                                <div class="statistic-details-item">
                                    <div class="text-small text-muted"><span class="text-danger"><i
                                                class="fas fa-caret-down"></i></span> 33%</div>
                                    <div class="detail-value">$3,564</div>
                                    <div class="detail-name">This Week</div>
                                </div>
                                <div class="statistic-details-item">
                                    <div class="text-small text-muted"><span class="text-primary"><i
                                                class="fas fa-caret-up"></i></span>19%</div>
                                    <div class="detail-value">$14,687</div>
                                    <div class="detail-name">This Month</div>
                                </div>
                                <div class="statistic-details-item">
                                    <div class="text-small text-muted"><span class="text-primary"><i
                                                class="fas fa-caret-up"></i></span>29%</div>
                                    <div class="detail-value">$88,568</div>
                                    <div class="detail-name">This Year</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <div class="card-header">
                            <h4>Popular Browser</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col mb-4 mb-lg-0 text-center">
                                    <div class="browser browser-chrome"></div>
                                    <div class="mt-2 font-weight-bold">Chrome</div>
                                    <div class="text-small text-muted"><span class="text-primary"><i
                                                class="fas fa-caret-up"></i></span> 38%</div>
                                </div>
                                <div class="col mb-4 mb-lg-0 text-center">
                                    <div class="browser browser-firefox"></div>
                                    <div class="mt-2 font-weight-bold">Firefox</div>
                                    <div class="text-small text-muted"><span class="text-primary"><i
                                                class="fas fa-caret-up"></i></span> 22%</div>
                                </div>
                                <div class="col mb-4 mb-lg-0 text-center">
                                    <div class="browser browser-safari"></div>
                                    <div class="mt-2 font-weight-bold">Safari</div>
                                    <div class="text-small text-muted"><span class="text-danger"><i
                                                class="fas fa-caret-down"></i></span> 27%</div>
                                </div>
                                <div class="col mb-4 mb-lg-0 text-center">
                                    <div class="browser browser-opera"></div>
                                    <div class="mt-2 font-weight-bold">Opera</div>
                                    <div class="text-small text-muted">9%</div>
                                </div>
                                <div class="col mb-4 mb-lg-0 text-center">
                                    <div class="browser browser-internet-explorer"></div>
                                    <div class="mt-2 font-weight-bold">IE</div>
                                    <div class="text-small text-muted"><span class="text-primary"><i
                                                class="fas fa-caret-up"></i></span> 4%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-statistic-2">
                        <div class="card-icon shadow-primary bg-cyan">
                            <i class="fas fa-hiking"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4 class="pull-right">New Clients</h4>
                            </div>
                            <div class="card-body pull-right">
                                10,225
                            </div>
                        </div>
                        <div class="card-chart">
                            <canvas id="chart-1" height="80"></canvas>
                        </div>
                    </div>
                </div>


                <div class="col-8 col-sm-8 col-lg-7">
                    <div class="card author-box card-primary">
                        <div class="card-body">
                            <div class="author-box-left">
                                <img alt="image" src="{{ asset('dashboard_asset/assets/img/users/user-1.png') }}"
                                    class="rounded-circle author-box-picture">
                                <div class="clearfix"></div>
                                <a href="#" class="btn btn-primary mt-3 follow-btn"
                                    data-follow-action="alert('follow clicked');"
                                    data-unfollow-action="alert('unfollow clicked');">Follow</a>
                            </div>

                            <div class="mb-2 mt-3">
                                <div class="text-small font-weight-bold">Follow Sarah On</div>
                            </div>
                            <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="btn btn-social-icon mr-1 btn-twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="btn btn-social-icon mr-1 btn-github">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="btn btn-social-icon mr-1 btn-instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <div class="w-100 d-sm-none"></div>
                            <div class="float-right mt-sm-0 mt-3">
                                <a href="#" class="btn">View Posts <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    {{-- ************************* --}}
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-8 col-md-8 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Photos</h4>
                        </div>
                        <div class="card-body">
                            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{ asset('dashboard_asset/assets/img/aa.jpg') }}"
                                            alt="First slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>AAPC</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100"
                                            src="{{ asset('dashboard_asset/assets/img/hardware_maintenance.jpeg') }}"
                                            alt="Second slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Hardware</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100"
                                            src="{{ asset('dashboard_asset/assets/img/datacenter_service.jpeg') }}"
                                            alt="Third slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Software</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- here --}}
                <div class="col-4 col-md-4 col-lg-5">
                    <div class="card">
                        <div class="card-header">
                            <h4>Services</h4>
                        </div>
                        <div class="card-body">
                            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100"
                                            src="{{ asset('dashboard_asset/assets/img/hardware_service.jpeg') }}"
                                            alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100"
                                            src="{{ asset('dashboard_asset/assets/img/aapc.jpg') }}" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100"
                                            src="{{ asset('dashboard_asset/assets/img/hardware_service.jpeg') }}"
                                            alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleFade" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleFade" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- **************** --}}


        <div class="row">
            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-bg">
                        <div class="p-t-20 d-flex justify-content-between">
                            <div class="col">
                                <h6 class="mb-0">New Booking</h6>
                                <span class="font-weight-bold mb-0 font-20">1,562</span>
                            </div>
                            <i class="fas fa-address-card card-icon col-orange font-30 p-r-30"></i>
                        </div>
                        <canvas id="cardChart1" height="80"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-bg">
                        <div class="p-t-20 d-flex justify-content-between">
                            <div class="col">
                                <h6 class="mb-0">New Customers</h6>
                                <span class="font-weight-bold mb-0 font-20">895</span>
                            </div>
                            <i class="fas fa-diagnoses card-icon col-green font-30 p-r-30"></i>
                        </div>
                        <canvas id="cardChart2" height="80"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-bg">
                        <div class="p-t-20 d-flex justify-content-between">
                            <div class="col">
                                <h6 class="mb-0">Growth</h6>
                                <span class="font-weight-bold mb-0 font-20">+22.58%</span>
                            </div>
                            <i class="fas fa-chart-bar card-icon col-indigo font-30 p-r-30"></i>
                        </div>
                        <canvas id="cardChart3" height="80"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-bg">
                        <div class="p-t-20 d-flex justify-content-between">
                            <div class="col">
                                <h6 class="mb-0">Revenue</h6>
                                <span class="font-weight-bold mb-0 font-20">$2,687</span>
                            </div>
                            <i class="fas fa-hand-holding-usd card-icon col-cyan font-30 p-r-30"></i>
                        </div>
                        <canvas id="cardChart4" height="80"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon l-bg-purple">
                        <i class="fas fa-cart-plus"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="padding-20">
                            <div class="text-right">
                                <h3 class="font-light mb-0">
                                    <i class="ti-arrow-up text-success"></i> 524
                                </h3>
                                <span class="text-muted">Order Received</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon l-bg-green">
                        <i class="fas fa-hiking"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="padding-20">
                            <div class="text-right">
                                <h3 class="font-light mb-0">
                                    <i class="ti-arrow-up text-success"></i> 158
                                </h3>
                                <span class="text-muted">New Clients</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon l-bg-cyan">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="padding-20">
                            <div class="text-right">
                                <h3 class="font-light mb-0">
                                    <i class="ti-arrow-up text-success"></i> 785
                                </h3>
                                <span class="text-muted">New Orders</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon l-bg-orange">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="padding-20">
                            <div class="text-right">
                                <h3 class="font-light mb-0">
                                    <i class="ti-arrow-up text-success"></i> $5,263
                                </h3>
                                <span class="text-muted">Todays Income</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Task Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th>
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                                                class="custom-control-input" id="checkbox-all">
                                            <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </th>
                                    <th>Task Name</th>
                                    <th>Progress</th>
                                    <th>Due Date</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td class="p-0 text-center">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                id="checkbox-1">
                                            <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>Ecommerce website</td>
                                    <td class="align-middle">
                                        <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                                            <div class="progress-bar bg-success" data-width="100"></div>
                                        </div>
                                    </td>
                                    <td>2018-01-20</td>
                                    <td>
                                        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                            title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                        <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"
                                            data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                            data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-0 text-center">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                id="checkbox-4">
                                            <label for="checkbox-4" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>Android App</td>
                                    <td class="align-middle">
                                        <div class="progress" data-height="4" data-toggle="tooltip" title="30%">
                                            <div class="progress-bar bg-orange" data-width="30"></div>
                                        </div>
                                    </td>
                                    <td>2018-09-11</td>
                                    <td>
                                        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                            title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                        <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"
                                            data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                            data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-0 text-center">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                id="checkbox-5">
                                            <label for="checkbox-5" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>Logo Design</td>
                                    <td class="align-middle">
                                        <div class="progress" data-height="4" data-toggle="tooltip" title="67%">
                                            <div class="progress-bar bg-purple" data-width="67"></div>
                                        </div>
                                    </td>
                                    <td>2018-04-12</td>
                                    <td>
                                        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                            title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                        <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"
                                            data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                            data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-0 text-center">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                id="checkbox-6">
                                            <label for="checkbox-6" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>Java Project</td>
                                    <td class="align-middle">
                                        <div class="progress" data-height="4" data-toggle="tooltip" title="43%">
                                            <div class="progress-bar bg-success" data-width="43"></div>
                                        </div>
                                    </td>
                                    <td>2018-01-20</td>
                                    <td>
                                        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                            title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                        <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"
                                            data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                            data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Referral Link</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="text-small float-right font-weight-bold text-muted">2,675</div>
                            <div class="font-weight-bold">Google</div>
                            <div class="progress" data-height="5">
                                <div class="progress-bar l-bg-purple" role="progressbar" data-width="80%"
                                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="text-small float-right font-weight-bold text-muted">1,753</div>
                            <div class="font-weight-bold">Facebook</div>
                            <div class="progress" data-height="5">
                                <div class="progress-bar l-bg-green" role="progressbar" data-width="67%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="text-small float-right font-weight-bold text-muted">1,254</div>
                            <div class="font-weight-bold">Bing</div>
                            <div class="progress" data-height="5">
                                <div class="progress-bar l-bg-orange" role="progressbar" data-width="58%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="text-small float-right font-weight-bold text-muted">984</div>
                            <div class="font-weight-bold">Yahoo</div>
                            <div class="progress" data-height="5">
                                <div class="progress-bar l-bg-yellow" role="progressbar" data-width="36%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="text-small float-right font-weight-bold text-muted">563</div>
                            <div class="font-weight-bold">Instagram</div>
                            <div class="progress" data-height="5">
                                <div class="progress-bar bg-cyan" role="progressbar" data-width="28%" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="text-small float-right font-weight-bold text-muted">345</div>
                            <div class="font-weight-bold">Twitter</div>
                            <div class="progress" data-height="5">
                                <div class="progress-bar bg-light-blue" role="progressbar" data-width="20%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-xl-3 col-lg-6">
                <div class="card l-bg-green">
                    <div class="card-statistic-3">
                        <div class="card-icon card-icon-large"><i class="fa fa-award"></i></div>
                        <div class="card-content">
                            <h4 class="card-title">New Orders</h4>
                            <span>524</span>
                            <div class="progress mt-1 mb-1" data-height="8">
                                <div class="progress-bar l-bg-purple" role="progressbar" data-width="25%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mb-0 text-sm">
                                <span class="mr-2"><i class="fa fa-arrow-up"></i> 10%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card l-bg-cyan">
                    <div class="card-statistic-3">
                        <div class="card-icon card-icon-large"><i class="fa fa-briefcase"></i></div>
                        <div class="card-content">
                            <h4 class="card-title">New Booking</h4>
                            <span>1,258</span>
                            <div class="progress mt-1 mb-1" data-height="8">
                                <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mb-0 text-sm">
                                <span class="mr-2"><i class="fa fa-arrow-up"></i> 10%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card l-bg-purple">
                    <div class="card-statistic-3">
                        <div class="card-icon card-icon-large"><i class="fa fa-globe"></i></div>
                        <div class="card-content">
                            <h4 class="card-title">Inquiry</h4>
                            <span>10,225</span>
                            <div class="progress mt-1 mb-1" data-height="8">
                                <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mb-0 text-sm">
                                <span class="mr-2"><i class="fa fa-arrow-up"></i> 10%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card l-bg-orange">
                    <div class="card-statistic-3">
                        <div class="card-icon card-icon-large"><i class="fa fa-money-bill-alt"></i></div>
                        <div class="card-content">
                            <h4 class="card-title">Earning</h4>
                            <span>$2,658</span>
                            <div class="progress mt-1 mb-1" data-height="8">
                                <div class="progress-bar l-bg-green" role="progressbar" data-width="25%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mb-0 text-sm">
                                <span class="mr-2"><i class="fa fa-arrow-up"></i> 10%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body card-type-3">
                        <div class="row">
                            <div class="col">
                                <h6 class="text-muted mb-0">Orders</h6>
                                <span class="font-weight-bold mb-0">450</span>
                            </div>
                            <div class="col-auto">
                                <div class="card-circle l-bg-orange text-white">
                                    <i class="fas fa-book-open"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-muted text-sm">
                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 10%</span>
                            <span class="text-nowrap">Since last month</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body card-type-3">
                        <div class="row">
                            <div class="col">
                                <h6 class="text-muted mb-0">New Booking</h6>
                                <span class="font-weight-bold mb-0">1,562</span>
                            </div>
                            <div class="col-auto">
                                <div class="card-circle l-bg-cyan text-white">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-muted text-sm">
                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 7.8%</span>
                            <span class="text-nowrap">Since last month</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body card-type-3">
                        <div class="row">
                            <div class="col">
                                <h6 class="text-muted mb-0">Inquiry</h6>
                                <span class="font-weight-bold mb-0">7,897</span>
                            </div>
                            <div class="col-auto">
                                <div class="card-circle l-bg-green text-white">
                                    <i class="fas fa-phone"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-muted text-sm">
                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 15%</span>
                            <span class="text-nowrap">Since last month</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body card-type-3">
                        <div class="row">
                            <div class="col">
                                <h6 class="text-muted mb-0">Earning</h6>
                                <span class="font-weight-bold mb-0">$8,965</span>
                            </div>
                            <div class="col-auto">
                                <div class="card-circle l-bg-purple text-white">
                                    <i class="fas fa-dollar-sign"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-muted text-sm">
                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 5.4%</span>
                            <span class="text-nowrap">Since last month</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            {{-- <div class="col-12 col-sm-6 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>Who's Online?</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled list-unstyled-border">
                                <li class="media">
                                    <img alt="image" class="mr-3 rounded-circle" width="50"
                                        src="assets/img/users/user-1.png">
                                    <div class="media-body">
                                        <div class="mt-0 mb-1 font-weight-bold">Cara Stevens</div>
                                        <div class="text-success text-small font-600-bold"><i class="fas fa-circle"></i>
                                            Online</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img alt="image" class="mr-3 rounded-circle" width="50"
                                        src="assets/img/users/user-2.png">
                                    <div class="media-body">
                                        <div class="mt-0 mb-1 font-weight-bold">Airi Satou</div>
                                        <div class="text-small font-weight-600 text-muted"><i class="fas fa-circle"></i>
                                            Offline</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img alt="image" class="mr-3 rounded-circle" width="50"
                                        src="assets/img/users/user-3.png">
                                    <div class="media-body">
                                        <div class="mt-0 mb-1 font-weight-bold">Ashton Cox</div>
                                        <div class="text-small font-weight-600 text-success"><i
                                                class="fas fa-circle"></i> Online
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img alt="image" class="mr-3 rounded-circle" width="50"
                                        src="assets/img/users/user-4.png">
                                    <div class="media-body">
                                        <div class="mt-0 mb-1 font-weight-bold">Cara Stevens</div>
                                        <div class="text-small font-weight-600 text-success"><i
                                                class="fas fa-circle"></i> Online
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card gradient-bottom">
                    <div class="card-header">
                        <h4>Top 5 Requests</h4>
                        <div class="card-header-action dropdown">
                            <a href="#" data-toggle="dropdown" class="btn btn-danger dropdown-toggle">Month</a>
                            <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                <li class="dropdown-title">Select Period</li>
                                <li><a href="#" class="dropdown-item">Today</a></li>
                                <li><a href="#" class="dropdown-item">Week</a></li>
                                <li><a href="#" class="dropdown-item active">Month</a></li>
                                <li><a href="#" class="dropdown-item">This Year</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body" id="top-5-scroll">
                        <ul class="list-unstyled list-unstyled-border">
                            <li class="media">
                                <img class="mr-3 rounded" width="55"
                                    src="{{ asset('dashboard_asset/assets/img/products/product-3.png') }}"
                                    alt="product">
                                <div class="media-body">
                                    <div class="float-right">
                                        <div class="font-weight-600 text-muted text-small">112 Sales</div>
                                    </div>
                                    <div class="media-title">Request one</div>
                                    <div class="mt-1">
                                        <div class="budget-price">
                                            <div class="budget-price-square bg-primary" data-width="61%"></div>
                                            <div class="budget-price-label">$24,897</div>
                                        </div>
                                        <div class="budget-price">
                                            <div class="budget-price-square bg-danger" data-width="38%"></div>
                                            <div class="budget-price-label">$18,865</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="media">
                                <img class="mr-3 rounded" width="55"
                                    src="{{ asset('dashboard_asset/assets/img/products/product-4.png') }}"
                                    alt="product">
                                <div class="media-body">
                                    <div class="float-right">
                                        <div class="font-weight-600 text-muted text-small">49 Sales</div>
                                    </div>
                                    <div class="media-title">Laptop</div>
                                    <div class="mt-1">
                                        <div class="budget-price">
                                            <div class="budget-price-square bg-primary" data-width="78%"></div>
                                            <div class="budget-price-label">$74,568</div>
                                        </div>
                                        <div class="budget-price">
                                            <div class="budget-price-square bg-danger" data-width="55%"></div>
                                            <div class="budget-price-label">$65,892</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="media">
                                <img class="mr-3 rounded" width="55"
                                    src="{{ asset('dashboard_asset/assets/img/products/product-1.png') }}"
                                    alt="product">
                                <div class="media-body">
                                    <div class="float-right">
                                        <div class="font-weight-600 text-muted text-small">63 Sales</div>
                                    </div>
                                    <div class="media-title">Request</div>
                                    <div class="mt-1">
                                        <div class="budget-price">
                                            <div class="budget-price-square bg-primary" data-width="38%"></div>
                                            <div class="budget-price-label">$2,859</div>
                                        </div>
                                        <div class="budget-price">
                                            <div class="budget-price-square bg-danger" data-width="25%"></div>
                                            <div class="budget-price-label">$1,872</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="media">
                                <img class="mr-3 rounded" width="55"
                                    src="{{ asset('dashboard_asset/assets/img/products/product-2.png') }}"
                                    alt="product">
                                <div class="media-body">
                                    <div class="float-right">
                                        <div class="font-weight-600 text-muted text-small">28 Sales</div>
                                    </div>
                                    <div class="media-title">Request 4</div>
                                    <div class="mt-1">
                                        <div class="budget-price">
                                            <div class="budget-price-square bg-primary" data-width="48%"></div>
                                            <div class="budget-price-label">$11,238</div>
                                        </div>
                                        <div class="budget-price">
                                            <div class="budget-price-square bg-danger" data-width="33%"></div>
                                            <div class="budget-price-label">$7,564</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="media">
                                <img class="mr-3 rounded" width="55"
                                    src="{{ 'dashboard_asset/assets/img/products/product-5.png' }}" alt="product">
                                <div class="media-body">
                                    <div class="float-right">
                                        <div class="font-weight-600 text-muted text-small">19 Sales</div>
                                    </div>
                                    <div class="media-title">Request 6</div>
                                    <div class="mt-1">
                                        <div class="budget-price">
                                            <div class="budget-price-square bg-primary" data-width="91%"></div>
                                            <div class="budget-price-label">$7,285</div>
                                        </div>
                                        <div class="budget-price">
                                            <div class="budget-price-square bg-danger" data-width="74%"></div>
                                            <div class="budget-price-label">$5,147</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer pt-3 d-flex justify-content-center">
                        <div class="budget-price justify-content-center">
                            <div class="budget-price-square bg-primary" data-width="20"></div>
                            <div class="budget-price-label">Selling Price</div>
                        </div>
                        <div class="budget-price justify-content-center">
                            <div class="budget-price-square bg-danger" data-width="20"></div>
                            <div class="budget-price-label">Product Cost</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Messages</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled list-unstyled-border user-list" id="message-list">
                            <li class="media">
                                <img alt="image" src="{{ asset('dashboard_asset/assets/img/users/user-1.png') }}"
                                    class="mr-3 user-img-radious-style user-list-img">
                                <div class="media-body">
                                    <div class="mt-0 font-weight-bold">Cara Stevens</div>
                                    <div class="text-small">Hello How R You?</div>
                                </div>
                            </li>
                            <li class="media">
                                <img alt="image" src="{{ asset('dashboard_asset/assets/img/users/user-4.png') }}"
                                    class="mr-3 user-img-radious-style user-list-img">
                                <div class="media-body">
                                    <div class="mt-0 font-weight-bold">Airi Satou</div>
                                    <div class="text-small">Please email me regarding this</div>
                                </div>
                            </li>
                            <li class="media">
                                <img alt="image" src="{{ asset('dashboard_asset/assets/img/users/user-1.png') }}"
                                    class="mr-3 user-img-radious-style user-list-img">
                                <div class="media-body">
                                    <div class="mt-0 font-weight-bold">Angelica Ramos</div>
                                    <div class="text-small">heyyy</div>
                                </div>
                            </li>
                            <li class="media">
                                <img alt="image" src="{{ asset('dashboard_asset/assets/img/users/user-2.png') }}"
                                    class="mr-3 user-img-radious-style user-list-img">
                                <div class="media-body">
                                    <div class="mt-0 font-weight-bold">Ashton Cox</div>
                                    <div class="text-small">Can't talk!!!</div>
                                </div>
                            </li>
                            <li class="media">
                                <img alt="image" src="{{ asset('dashboard_asset/assets/img/users/user-3.png') }}"
                                    class="mr-3 user-img-radious-style user-list-img">
                                <div class="media-body">
                                    <div class="mt-0 font-weight-bold">Cara Stevens</div>
                                    <div class="text-small">Request for leave application</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    {{-- ************* --}}
@endsection
