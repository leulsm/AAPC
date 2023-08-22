@extends('admin.layouts.template')
@section('content')
    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>
    <section class="section">
        <div class="section-body">


            {{-- <div class="row">
                <div class="col">
                    <div class="card card-statistic-2">
                        <div class="card-icon shadow-primary bg-cyan">
                            <i class="fas fa-hiking"></i>
                        </div> --}}
            {{-- <div class="card-wrap">
                            <div class="card-header">
                                <h4 class="pull-right">New Clients</h4>
                            </div>
                            <div class="card-body pull-right">
                                220
                            </div>
                        </div> --}}
            {{-- <div class="card-chart">
                            <canvas id="chart-1" height="80"></canvas>
                        </div>
                    </div>
                </div>



            </div> --}}
    </section>
    {{-- ************************* --}}
    <section class="section">
        {{-- <div class="row"> --}}
        {{-- <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-bg">
                        <div class="p-t-20 d-flex justify-content-between">
                            <div class="col">
                                <h6 class="mb-0">New Requests</h6>
                                <span class="font-weight-bold mb-0 font-20">120</span>
                            </div>
                            <i class="fas fa-address-card card-icon col-orange font-30 p-r-30"></i>
                        </div>
                        <canvas id="cardChart1" height="80"></canvas>
                    </div>
                </div>
            </div> --}}
        {{-- <div class="col-xl-3 col-lg-6">
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
            </div> --}}
        {{-- <div class="col-xl-3 col-lg-6">
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
        </div> --}}
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
                                    <i class="ti-arrow-up text-success"></i> 123
                                </h3>
                                <span class="text-muted">Completed Requests</span>
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
                                    <i class="ti-arrow-up text-success"></i> 58
                                </h3>
                                <span class="text-muted">New Users</span>
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
                                <span class="text-muted">New Requests</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon l-bg-orange">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="padding-20">
                            <div class="text-right">
                                <h3 class="font-light mb-0">
                                    <i class="ti-arrow-up text-success"></i> 263
                                </h3>
                                <span class="text-muted">Pending / Incomplete tasks</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tasks</h4>
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
                                    <td>Hardware request</td>
                                    <td class="align-middle">
                                        <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                                            <div class="progress-bar bg-success" data-width="100"></div>
                                        </div>
                                    </td>
                                    <td>2023-01-20</td>
                                    <td>
                                        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i
                                                class="fas fa-pencil-alt"></i></a>
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
                                    <td>Database request</td>
                                    <td class="align-middle">
                                        <div class="progress" data-height="4" data-toggle="tooltip" title="30%">
                                            <div class="progress-bar bg-orange" data-width="30"></div>
                                        </div>
                                    </td>
                                    <td>2023-09-11</td>
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
                                    <td>Software request</td>
                                    <td class="align-middle">
                                        <div class="progress" data-height="4" data-toggle="tooltip" title="67%">
                                            <div class="progress-bar bg-purple" data-width="67"></div>
                                        </div>
                                    </td>
                                    <td>2023-04-12</td>
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
                                    <td>Database request</td>
                                    <td class="align-middle">
                                        <div class="progress" data-height="4" data-toggle="tooltip" title="43%">
                                            <div class="progress-bar bg-success" data-width="43"></div>
                                        </div>
                                    </td>
                                    <td>2023-01-20</td>
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
            {{-- <div class="col-lg-4 col-md-12 col-12 col-sm-12">
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
            </div> --}}
        </div>
        {{-- <div class="row ">
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
            {{-- <div class="col-xl-3 col-lg-6">
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
            </div> --}}
        {{-- <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-orange">
                <div class="card-statistic-3">
                    <div class="card-icon card-icon-large"><i class="fa fa-money-bill-alt"></i></div>
                    <div class="card-content">
                        <h4 class="card-title">Earning</h4>
                        <span>$2,658</span>
                        <div class="progress mt-1 mb-1" data-height="8">
                            <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mb-0 text-sm">
                            <span class="mr-2"><i class="fa fa-arrow-up"></i> 10%</span>
                            <span class="text-nowrap">Since last month</span>
                        </p>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- </div> --}}
        {{-- <div class="row">
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
        </div> --}}
        <div class="row">
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
                                    src="{{ asset('dashboard_asset/assets/img/products/product-3.png') }}" alt="product">
                                <div class="media-body">
                                    <div class="float-right">
                                        <div class="font-weight-600 text-muted text-small">112 requests</div>
                                    </div>
                                    <div class="media-title">Database request</div>
                                    <div class="mt-1">
                                        <div class="budget-price">
                                            <div class="budget-price-square bg-primary" data-width="61%"></div>
                                            <div class="budget-price-label"></div>
                                        </div>
                                        <div class="budget-price">
                                            <div class="budget-price-square bg-danger" data-width="38%"></div>
                                            <div class="budget-price-label"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="media">
                                <img class="mr-3 rounded" width="55"
                                    src="{{ asset('dashboard_asset/assets/img/products/product-4.png') }}" alt="product">
                                <div class="media-body">
                                    <div class="float-right">
                                        <div class="font-weight-600 text-muted text-small"></div>
                                    </div>
                                    <div class="media-title">Hardware</div>
                                    <div class="mt-1">
                                        <div class="budget-price">
                                            <div class="budget-price-square bg-primary" data-width="78%"></div>
                                            <div class="budget-price-label">progress</div>
                                        </div>
                                        <div class="budget-price">
                                            <div class="budget-price-square bg-danger" data-width="55%"></div>
                                            <div class="budget-price-label">progress</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="media">
                                <img class="mr-3 rounded" width="55"
                                    src="{{ asset('dashboard_asset/assets/img/products/product-1.png') }}" alt="product">
                                <div class="media-body">
                                    <div class="float-right">
                                        <div class="font-weight-600 text-muted text-small">63 Problems</div>
                                    </div>
                                    <div class="media-title">Software</div>
                                    <div class="mt-1">
                                        <div class="budget-price">
                                            <div class="budget-price-square bg-primary" data-width="38%"></div>
                                            <div class="budget-price-label">progress</div>
                                        </div>
                                        <div class="budget-price">
                                            <div class="budget-price-square bg-danger" data-width="25%"></div>
                                            <div class="budget-price-label">progress</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="media">
                                <img class="mr-3 rounded" width="55"
                                    src="{{ asset('dashboard_asset/assets/img/products/product-2.png') }}" alt="product">
                                <div class="media-body">
                                    <div class="float-right">
                                        <div class="font-weight-600 text-muted text-small">28 Problems</div>
                                    </div>
                                    <div class="media-title">Hardware Request</div>
                                    <div class="mt-1">
                                        <div class="budget-price">
                                            <div class="budget-price-square bg-primary" data-width="48%"></div>
                                            <div class="budget-price-label">Progress</div>
                                        </div>
                                        <div class="budget-price">
                                            <div class="budget-price-square bg-danger" data-width="33%"></div>
                                            <div class="budget-price-label">Progress</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            {{-- <li class="media">
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
                            </li> --}}
                        </ul>
                    </div>
                    <div class="card-footer pt-3 d-flex justify-content-center">
                        <div class="budget-price justify-content-center">
                            <div class="budget-price-square bg-primary" data-width="20"></div>
                            <div class="budget-price-label">Lower Progress</div>
                        </div>
                        <div class="budget-price justify-content-center">
                            <div class="budget-price-square bg-danger" data-width="20"></div>
                            <div class="budget-price-label">Good Progress</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-8">
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
@endsection

@if (session('success'))
    <script>
        setTimeout(function() {
            $('.alert-success').fadeOut('slow');
        }, 3000); // 5000 milliseconds = 5 seconds
    </script>
@endif
