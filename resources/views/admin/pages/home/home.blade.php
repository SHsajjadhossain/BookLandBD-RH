@extends('admin.layouts.dashboard')

@section('title')

Dashboard Pustok | Home

@endsection

@section('menu-active')

active

@endsection

@section('content')

<div class="content-wrapper">
    <!-- breadcrumb area start -->
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <div class="form-group breadcrumb-right"></div>
        </div>
    </div>
    <!-- breadcrumb area end -->
    <div class="content-body">
        <!-- Dashboard Ecommerce Starts -->
        <section id="dashboard-ecommerce">
            <div class="row match-height">
                <!-- Greetings Card starts -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card card-congratulations welcome-card">
                        <div class="card-body text-center">
                            <img src="{{ asset('dashboard_assets') }}/app-assets/images/elements/decore-left.png"
                                class="congratulations-img-left" alt="card-img-left" />
                            <img src="{{ asset('dashboard_assets') }}/app-assets/images/elements/decore-right.png"
                                class="congratulations-img-right" alt="card-img-right" />
                            <div class="avatar avatar-xl bg-primary shadow">
                                <div class="avatar-content">
                                    <i data-feather="award" class="font-large-1"></i>
                                </div>
                            </div>
                            <div class="text-center">
                                <h1 class="mb-1 text-white">Welcome {{ Auth::user()->name }},</h1>
                                <p class="card-text m-auto w-75">
                                    Check your Sale & Order.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Greetings Card ends -->
                <!-- Medal Card -->
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="card card-congratulation-medal">
                        <div class="card-body">
                            <h5>Congratulations 🎉 John!</h5>
                            <p class="card-text font-small-3">You have won gold medal</p>
                            <h3 class="mt-2 mb-75 pt-50">
                                <a href="javascript:void(0);">$48.9k</a>
                            </h3>
                            <button type="button" class="btn btn-primary">View Sales</button>
                            <img src="{{ asset('dashboard_assets') }}/app-assets/images/illustration/badge.svg"
                                class="congratulation-medal" alt="Medal Pic" />
                        </div>
                    </div>
                </div>
                <!--/ Medal Card -->

                <!-- Statistics Card -->
                <div class="col-xl-8 col-md-6 col-12">
                    <div class="card card-statistics">
                        <div class="card-header">
                            <h4 class="card-title">Statistics</h4>
                            <div class="d-flex align-items-center">
                                <p class="mb-0 card-text font-small-2 mr-25">Updated 1 month ago</p>
                            </div>
                        </div>
                        <div class="card-body statistics-body">
                            <div class="row">
                                <div class="mb-2 col-xl-3 col-sm-6 col-12 mb-xl-0">
                                    <div class="media">
                                        <div class="mr-2 avatar bg-light-primary">
                                            <div class="avatar-content">
                                                <i data-feather="trending-up" class="avatar-icon"></i>
                                            </div>
                                        </div>
                                        <div class="my-auto media-body">
                                            <h4 class="mb-0 font-weight-bolder">230k</h4>
                                            <p class="mb-0 card-text font-small-3">Sales</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 col-xl-3 col-sm-6 col-12 mb-xl-0">
                                    <div class="media">
                                        <div class="mr-2 avatar bg-light-info">
                                            <div class="avatar-content">
                                                <i data-feather="user" class="avatar-icon"></i>
                                            </div>
                                        </div>
                                        <div class="my-auto media-body">
                                            <h4 class="mb-0 font-weight-bolder">8.549k</h4>
                                            <p class="mb-0 card-text font-small-3">Customers</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 col-xl-3 col-sm-6 col-12 mb-sm-0">
                                    <div class="media">
                                        <div class="mr-2 avatar bg-light-danger">
                                            <div class="avatar-content">
                                                <i data-feather="box" class="avatar-icon"></i>
                                            </div>
                                        </div>
                                        <div class="my-auto media-body">
                                            <h4 class="mb-0 font-weight-bolder">1.423k</h4>
                                            <p class="mb-0 card-text font-small-3">Products</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <div class="media">
                                        <div class="mr-2 avatar bg-light-success">
                                            <div class="avatar-content">
                                                <i data-feather="dollar-sign" class="avatar-icon"></i>
                                            </div>
                                        </div>
                                        <div class="my-auto media-body">
                                            <h4 class="mb-0 font-weight-bolder">$9745</h4>
                                            <p class="mb-0 card-text font-small-3">Revenue</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Statistics Card -->
            </div>

            <div class="row match-height">
                <div class="col-lg-4 col-12">
                    <div class="row match-height">
                        <!-- Bar Chart - Orders -->
                        <div class="col-lg-6 col-md-3 col-6">
                            <div class="card">
                                <div class="card-body pb-50">
                                    <h6>Orders</h6>
                                    <h2 class="mb-1 font-weight-bolder">2,76k</h2>
                                    <div id="statistics-order-chart"></div>
                                </div>
                            </div>
                        </div>
                        <!--/ Bar Chart - Orders -->

                        <!-- Line Chart - Profit -->
                        <div class="col-lg-6 col-md-3 col-6">
                            <div class="card card-tiny-line-stats">
                                <div class="card-body pb-50">
                                    <h6>Profit</h6>
                                    <h2 class="mb-1 font-weight-bolder">6,24k</h2>
                                    <div id="statistics-profit-chart"></div>
                                </div>
                            </div>
                        </div>
                        <!--/ Line Chart - Profit -->

                        <!-- Earnings Card -->
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="card earnings-card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <h4 class="mb-1 card-title">Earnings</h4>
                                            <div class="font-small-2">This Month</div>
                                            <h5 class="mb-1">$4055.56</h5>
                                            <p class="card-text text-muted font-small-2">
                                                <span class="font-weight-bolder">68.2%</span><span> more
                                                    earnings than last month.</span>
                                            </p>
                                        </div>
                                        <div class="col-6">
                                            <div id="earnings-chart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Earnings Card -->
                    </div>
                </div>

                <!-- Revenue Report Card -->
                <div class="col-lg-8 col-12">
                    <div class="card card-revenue-budget">
                        <div class="mx-0 row">
                            <div class="col-md-8 col-12 revenue-report-wrapper">
                                <div class="mb-3 d-sm-flex justify-content-between align-items-center">
                                    <h4 class="card-title mb-50 mb-sm-0">Revenue Report</h4>
                                    <div class="d-flex align-items-center">
                                        <div class="mr-2 d-flex align-items-center">
                                            <span
                                                class="cursor-pointer bullet bullet-primary font-small-3 mr-50"></span>
                                            <span>Earning</span>
                                        </div>
                                        <div class="d-flex align-items-center ml-75">
                                            <span
                                                class="cursor-pointer bullet bullet-warning font-small-3 mr-50"></span>
                                            <span>Expense</span>
                                        </div>
                                    </div>
                                </div>
                                <div id="revenue-report-chart"></div>
                            </div>
                            <div class="col-md-4 col-12 budget-wrapper">
                                <div class="btn-group">
                                    <button type="button"
                                        class="btn btn-outline-primary btn-sm dropdown-toggle budget-dropdown"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        2020
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">2020</a>
                                        <a class="dropdown-item" href="javascript:void(0);">2019</a>
                                        <a class="dropdown-item" href="javascript:void(0);">2018</a>
                                    </div>
                                </div>
                                <h2 class="mb-25">$25,852</h2>
                                <div class="d-flex justify-content-center">
                                    <span class="font-weight-bolder mr-25">Budget:</span>
                                    <span>56,800</span>
                                </div>
                                <div id="budget-chart"></div>
                                <button type="button" class="btn btn-primary">Increase Budget</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Revenue Report Card -->
            </div>

            <div class="row match-height">
                <!-- Company Table Card -->
                <div class="col-lg-8 col-12">
                    <div class="card card-company-table">
                        <div class="p-0 card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Company</th>
                                            <th>Category</th>
                                            <th>Views</th>
                                            <th>Revenue</th>
                                            <th>Sales</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="rounded avatar">
                                                        <div class="avatar-content">
                                                            <img src="{{ asset('dashboard_assets') }}/app-assets/images/icons/toolbox.svg"
                                                                alt="Toolbar svg" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="font-weight-bolder">Dixons</div>
                                                        <div class="font-small-2 text-muted">meguc@ruj.io</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="mr-1 avatar bg-light-primary">
                                                        <div class="avatar-content">
                                                            <i data-feather="monitor" class="font-medium-3"></i>
                                                        </div>
                                                    </div>
                                                    <span>Technology</span>
                                                </div>
                                            </td>
                                            <td class="text-nowrap">
                                                <div class="d-flex flex-column">
                                                    <span class="font-weight-bolder mb-25">23.4k</span>
                                                    <span class="font-small-2 text-muted">in 24 hours</span>
                                                </div>
                                            </td>
                                            <td>$891.2</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="mr-1 font-weight-bolder">68%</span>
                                                    <i data-feather="trending-down"
                                                        class="text-danger font-medium-1"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="rounded avatar">
                                                        <div class="avatar-content">
                                                            <img src="{{ asset('dashboard_assets') }}/app-assets/images/icons/parachute.svg"
                                                                alt="Parachute svg" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="font-weight-bolder">Motels</div>
                                                        <div class="font-small-2 text-muted">vecav@hodzi.co.uk
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="mr-1 avatar bg-light-success">
                                                        <div class="avatar-content">
                                                            <i data-feather="coffee" class="font-medium-3"></i>
                                                        </div>
                                                    </div>
                                                    <span>Grocery</span>
                                                </div>
                                            </td>
                                            <td class="text-nowrap">
                                                <div class="d-flex flex-column">
                                                    <span class="font-weight-bolder mb-25">78k</span>
                                                    <span class="font-small-2 text-muted">in 2 days</span>
                                                </div>
                                            </td>
                                            <td>$668.51</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="mr-1 font-weight-bolder">97%</span>
                                                    <i data-feather="trending-up"
                                                        class="text-success font-medium-1"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="rounded avatar">
                                                        <div class="avatar-content">
                                                            <img src="{{ asset('dashboard_assets') }}/app-assets/images/icons/brush.svg"
                                                                alt="Brush svg" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="font-weight-bolder">Zipcar</div>
                                                        <div class="font-small-2 text-muted">davcilse@is.gov
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="mr-1 avatar bg-light-warning">
                                                        <div class="avatar-content">
                                                            <i data-feather="watch" class="font-medium-3"></i>
                                                        </div>
                                                    </div>
                                                    <span>Fashion</span>
                                                </div>
                                            </td>
                                            <td class="text-nowrap">
                                                <div class="d-flex flex-column">
                                                    <span class="font-weight-bolder mb-25">162</span>
                                                    <span class="font-small-2 text-muted">in 5 days</span>
                                                </div>
                                            </td>
                                            <td>$522.29</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="mr-1 font-weight-bolder">62%</span>
                                                    <i data-feather="trending-up"
                                                        class="text-success font-medium-1"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="rounded avatar">
                                                        <div class="avatar-content">
                                                            <img src="{{ asset('dashboard_assets') }}/app-assets/images/icons/star.svg"
                                                                alt="Star svg" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="font-weight-bolder">Owning</div>
                                                        <div class="font-small-2 text-muted">us@cuhil.gov</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="mr-1 avatar bg-light-primary">
                                                        <div class="avatar-content">
                                                            <i data-feather="monitor" class="font-medium-3"></i>
                                                        </div>
                                                    </div>
                                                    <span>Technology</span>
                                                </div>
                                            </td>
                                            <td class="text-nowrap">
                                                <div class="d-flex flex-column">
                                                    <span class="font-weight-bolder mb-25">214</span>
                                                    <span class="font-small-2 text-muted">in 24 hours</span>
                                                </div>
                                            </td>
                                            <td>$291.01</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="mr-1 font-weight-bolder">88%</span>
                                                    <i data-feather="trending-up"
                                                        class="text-success font-medium-1"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="rounded avatar">
                                                        <div class="avatar-content">
                                                            <img src="{{ asset('dashboard_assets') }}/app-assets/images/icons/book.svg"
                                                                alt="Book svg" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="font-weight-bolder">Cafés</div>
                                                        <div class="font-small-2 text-muted">pudais@jife.com
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="mr-1 avatar bg-light-success">
                                                        <div class="avatar-content">
                                                            <i data-feather="coffee" class="font-medium-3"></i>
                                                        </div>
                                                    </div>
                                                    <span>Grocery</span>
                                                </div>
                                            </td>
                                            <td class="text-nowrap">
                                                <div class="d-flex flex-column">
                                                    <span class="font-weight-bolder mb-25">208</span>
                                                    <span class="font-small-2 text-muted">in 1 week</span>
                                                </div>
                                            </td>
                                            <td>$783.93</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="mr-1 font-weight-bolder">16%</span>
                                                    <i data-feather="trending-down"
                                                        class="text-danger font-medium-1"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="rounded avatar">
                                                        <div class="avatar-content">
                                                            <img src="{{ asset('dashboard_assets') }}/app-assets/images/icons/rocket.svg"
                                                                alt="Rocket svg" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="font-weight-bolder">Kmart</div>
                                                        <div class="font-small-2 text-muted">bipri@cawiw.com
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="mr-1 avatar bg-light-warning">
                                                        <div class="avatar-content">
                                                            <i data-feather="watch" class="font-medium-3"></i>
                                                        </div>
                                                    </div>
                                                    <span>Fashion</span>
                                                </div>
                                            </td>
                                            <td class="text-nowrap">
                                                <div class="d-flex flex-column">
                                                    <span class="font-weight-bolder mb-25">990</span>
                                                    <span class="font-small-2 text-muted">in 1 month</span>
                                                </div>
                                            </td>
                                            <td>$780.05</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="mr-1 font-weight-bolder">78%</span>
                                                    <i data-feather="trending-up"
                                                        class="text-success font-medium-1"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="rounded avatar">
                                                        <div class="avatar-content">
                                                            <img src="{{ asset('dashboard_assets') }}/app-assets/images/icons/speaker.svg"
                                                                alt="Speaker svg" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="font-weight-bolder">Payers</div>
                                                        <div class="font-small-2 text-muted">luk@izug.io</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="mr-1 avatar bg-light-warning">
                                                        <div class="avatar-content">
                                                            <i data-feather="watch" class="font-medium-3"></i>
                                                        </div>
                                                    </div>
                                                    <span>Fashion</span>
                                                </div>
                                            </td>
                                            <td class="text-nowrap">
                                                <div class="d-flex flex-column">
                                                    <span class="font-weight-bolder mb-25">12.9k</span>
                                                    <span class="font-small-2 text-muted">in 12 hours</span>
                                                </div>
                                            </td>
                                            <td>$531.49</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="mr-1 font-weight-bolder">42%</span>
                                                    <i data-feather="trending-up"
                                                        class="text-success font-medium-1"></i>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Company Table Card -->

                <!-- Developer Meetup Card -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card card-developer-meetup">
                        <div class="text-center meetup-img-wrapper rounded-top">
                            <img src="{{ asset('dashboard_assets') }}/app-assets/images/illustration/email.svg"
                                alt="Meeting Pic" height="170" />
                        </div>
                        <div class="card-body">
                            <div class="meetup-header d-flex align-items-center">
                                <div class="meetup-day">
                                    <h6 class="mb-0">THU</h6>
                                    <h3 class="mb-0">24</h3>
                                </div>
                                <div class="my-auto">
                                    <h4 class="card-title mb-25">Developer Meetup</h4>
                                    <p class="mb-0 card-text">Meet world popular developers</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="mr-1 rounded avatar bg-light-primary">
                                    <div class="avatar-content">
                                        <i data-feather="calendar" class="avatar-icon font-medium-3"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h6 class="mb-0">Sat, May 25, 2020</h6>
                                    <small>10:AM to 6:PM</small>
                                </div>
                            </div>
                            <div class="mt-2 media">
                                <div class="mr-1 rounded avatar bg-light-primary">
                                    <div class="avatar-content">
                                        <i data-feather="map-pin" class="avatar-icon font-medium-3"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h6 class="mb-0">Central Park</h6>
                                    <small>Manhattan, New york City</small>
                                </div>
                            </div>
                            <div class="avatar-group">
                                <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom"
                                    data-original-title="Billy Hopkins" class="avatar pull-up">
                                    <img src="{{ asset('dashboard_assets') }}/app-assets/images/portrait/small/avatar-s-9.jpg"
                                        alt="Avatar" width="33" height="33" />
                                </div>
                                <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom"
                                    data-original-title="Amy Carson" class="avatar pull-up">
                                    <img src="{{ asset('dashboard_assets') }}/app-assets/images/portrait/small/avatar-s-6.jpg"
                                        alt="Avatar" width="33" height="33" />
                                </div>
                                <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom"
                                    data-original-title="Brandon Miles" class="avatar pull-up">
                                    <img src="{{ asset('dashboard_assets') }}/app-assets/images/portrait/small/avatar-s-8.jpg"
                                        alt="Avatar" width="33" height="33" />
                                </div>
                                <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom"
                                    data-original-title="Daisy Weber" class="avatar pull-up">
                                    <img src="{{ asset('dashboard_assets') }}/app-assets/images/portrait/small/avatar-s-20.jpg"
                                        alt="Avatar" width="33" height="33" />
                                </div>
                                <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom"
                                    data-original-title="Jenny Looper" class="avatar pull-up">
                                    <img src="{{ asset('dashboard_assets') }}/app-assets/images/portrait/small/avatar-s-20.jpg"
                                        alt="Avatar" width="33" height="33" />
                                </div>
                                <h6 class="mb-0 cursor-pointer align-self-center ml-50">+42</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Developer Meetup Card -->

                <!-- Browser States Card -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card card-browser-states">
                        <div class="card-header">
                            <div>
                                <h4 class="card-title">Browser States</h4>
                                <p class="card-text font-small-2">Counter August 2020</p>
                            </div>
                            <div class="dropdown chart-dropdown">
                                <i data-feather="more-vertical" class="cursor-pointer font-medium-3"
                                    data-toggle="dropdown"></i>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="browser-states">
                                <div class="media">
                                    <img src="{{ asset('dashboard_assets') }}/app-assets/images/icons/google-chrome.png"
                                        class="mr-1 rounded" height="30" alt="Google Chrome" />
                                    <h6 class="mb-0 align-self-center">Google Chrome</h6>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="mr-1 font-weight-bold text-body-heading">54.4%</div>
                                    <div id="browser-state-chart-primary"></div>
                                </div>
                            </div>
                            <div class="browser-states">
                                <div class="media">
                                    <img src="{{ asset('dashboard_assets') }}/app-assets/images/icons/mozila-firefox.png"
                                        class="mr-1 rounded" height="30" alt="Mozila Firefox" />
                                    <h6 class="mb-0 align-self-center">Mozila Firefox</h6>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="mr-1 font-weight-bold text-body-heading">6.1%</div>
                                    <div id="browser-state-chart-warning"></div>
                                </div>
                            </div>
                            <div class="browser-states">
                                <div class="media">
                                    <img src="{{ asset('dashboard_assets') }}/app-assets/images/icons/apple-safari.png"
                                        class="mr-1 rounded" height="30" alt="Apple Safari" />
                                    <h6 class="mb-0 align-self-center">Apple Safari</h6>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="mr-1 font-weight-bold text-body-heading">14.6%</div>
                                    <div id="browser-state-chart-secondary"></div>
                                </div>
                            </div>
                            <div class="browser-states">
                                <div class="media">
                                    <img src="{{ asset('dashboard_assets') }}/app-assets/images/icons/internet-explorer.png"
                                        class="mr-1 rounded" height="30" alt="Internet Explorer" />
                                    <h6 class="mb-0 align-self-center">Internet Explorer</h6>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="mr-1 font-weight-bold text-body-heading">4.2%</div>
                                    <div id="browser-state-chart-info"></div>
                                </div>
                            </div>
                            <div class="browser-states">
                                <div class="media">
                                    <img src="{{ asset('dashboard_assets') }}/app-assets/images/icons/opera.png"
                                        class="mr-1 rounded" height="30" alt="Opera Mini" />
                                    <h6 class="mb-0 align-self-center">Opera Mini</h6>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="mr-1 font-weight-bold text-body-heading">8.4%</div>
                                    <div id="browser-state-chart-danger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Browser States Card -->

                <!-- Goal Overview Card -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Goal Overview</h4>
                            <i data-feather="help-circle" class="cursor-pointer font-medium-3 text-muted"></i>
                        </div>
                        <div class="p-0 card-body">
                            <div id="goal-overview-radial-bar-chart" class="my-2"></div>
                            <div class="mx-0 text-center row border-top">
                                <div class="py-1 col-6 border-right">
                                    <p class="mb-0 card-text text-muted">Completed</p>
                                    <h3 class="mb-0 font-weight-bolder">786,617</h3>
                                </div>
                                <div class="py-1 col-6">
                                    <p class="mb-0 card-text text-muted">In Progress</p>
                                    <h3 class="mb-0 font-weight-bolder">13,561</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Goal Overview Card -->

                <!-- Transaction Card -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card card-transaction">
                        <div class="card-header">
                            <h4 class="card-title">Transactions</h4>
                            <div class="dropdown chart-dropdown">
                                <i data-feather="more-vertical" class="cursor-pointer font-medium-3"
                                    data-toggle="dropdown"></i>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="transaction-item">
                                <div class="media">
                                    <div class="rounded avatar bg-light-primary">
                                        <div class="avatar-content">
                                            <i data-feather="pocket" class="avatar-icon font-medium-3"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="transaction-title">Wallet</h6>
                                        <small>Starbucks</small>
                                    </div>
                                </div>
                                <div class="font-weight-bolder text-danger">- $74</div>
                            </div>
                            <div class="transaction-item">
                                <div class="media">
                                    <div class="rounded avatar bg-light-success">
                                        <div class="avatar-content">
                                            <i data-feather="check" class="avatar-icon font-medium-3"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="transaction-title">Bank Transfer</h6>
                                        <small>Add Money</small>
                                    </div>
                                </div>
                                <div class="font-weight-bolder text-success">+ $480</div>
                            </div>
                            <div class="transaction-item">
                                <div class="media">
                                    <div class="rounded avatar bg-light-danger">
                                        <div class="avatar-content">
                                            <i data-feather="dollar-sign" class="avatar-icon font-medium-3"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="transaction-title">Paypal</h6>
                                        <small>Add Money</small>
                                    </div>
                                </div>
                                <div class="font-weight-bolder text-success">+ $590</div>
                            </div>
                            <div class="transaction-item">
                                <div class="media">
                                    <div class="rounded avatar bg-light-warning">
                                        <div class="avatar-content">
                                            <i data-feather="credit-card" class="avatar-icon font-medium-3"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="transaction-title">Mastercard</h6>
                                        <small>Ordered Food</small>
                                    </div>
                                </div>
                                <div class="font-weight-bolder text-danger">- $23</div>
                            </div>
                            <div class="transaction-item">
                                <div class="media">
                                    <div class="rounded avatar bg-light-info">
                                        <div class="avatar-content">
                                            <i data-feather="trending-up" class="avatar-icon font-medium-3"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="transaction-title">Transfer</h6>
                                        <small>Refund</small>
                                    </div>
                                </div>
                                <div class="font-weight-bolder text-success">+ $98</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Transaction Card -->
            </div>
        </section>
        <!-- Dashboard Ecommerce ends -->

    </div>
</div>

@endsection
