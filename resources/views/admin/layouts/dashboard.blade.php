<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title> @yield('title') </title>
    <link rel="apple-touch-icon" href="{{ asset('dashboard_assets/app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('dashboard_assets/app-assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/file-uploaders/dropzone.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assetsapp-assets/vendors/css/animate/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assetsapp-assets/vendors/css/extensions/sweetalert2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/charts/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/extensions/toastr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/plugins/charts/chart-apex.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/tables/datatable/rowGroup.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/extensions/toastr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/plugins/extensions/ext-component-toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/forms/select/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/pickers/pickadate/pickadate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/plugins/forms/pickers/form-flat-pickr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/plugins/forms/pickers/form-pickadate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/editors/trix/trix.min.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/editors/quill/katex.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/editors/quill/monokai-sublime.min.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/editors/quill/quill.snow.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/editors/quill/quill.bubble.css') }}"> --}}
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/themes/bordered-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/plugins/forms/form-file-uploader.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/pages/dashboard-ecommerce.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/plugins/extensions/ext-component-toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/plugins/extensions/ext-component-sweet-alerts.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/plugins/forms/form-quill-editor.css') }}"> --}}
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/style.css') }}">
    <!-- END: Custom CSS-->

    @stack('custom-css')

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern navbar-floating footer-static " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon"
                                data-feather="menu"></i></a></li>
                </ul>
            </div>
            <ul class="ml-auto nav navbar-nav align-items-center">
                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon"
                            data-feather="moon"></i></a></li>
                {{-- <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon"
                            data-feather="search"></i></a>
                    <div class="search-input">
                        <div class="search-input-icon"><i data-feather="search"></i></div>
                        <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="-1"
                            data-search="search">
                        <div class="search-input-close"><i data-feather="x"></i></div>
                        <ul class="search-list search-list-main"></ul>
                    </div>
                </li> --}}
                {{-- <li class="nav-item dropdown dropdown-notification mr-25"><a class="nav-link" href="javascript:void(0);"
                        data-toggle="dropdown"><i class="ficon" data-feather="bell"></i><span
                            class="badge badge-pill badge-danger badge-up">5</span></a>
                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                        <li class="dropdown-menu-header">
                            <div class="dropdown-header d-flex">
                                <h4 class="mb-0 mr-auto notification-title">Notifications</h4>
                                <div class="badge badge-pill badge-light-primary">6 New</div>
                            </div>
                        </li>
                        <li class="scrollable-container media-list"><a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar"><img
                                                src="{{ asset('dashboard_assets') }}/app-assets/images/portrait/small/avatar-s-15.jpg"
                                                alt="avatar" width="32" height="32"></div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">Congratulation Sam
                                                🎉</span>winner!</p><small class="notification-text"> Won the monthly
                                            best seller badge.</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar"><img
                                                src="{{ asset('dashboard_assets') }}/app-assets/images/portrait/small/avatar-s-3.jpg"
                                                alt="avatar" width="32" height="32"></div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">New
                                                message</span>&nbsp;received</p><small class="notification-text"> You
                                            have 10 unread messages</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar bg-light-danger">
                                            <div class="avatar-content">MD</div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">Revised Order
                                                👋</span>&nbsp;checkout</p><small class="notification-text"> MD Inc.
                                            order updated</small>
                                    </div>
                                </div>
                            </a>
                            <div class="media d-flex align-items-center">
                                <h6 class="mb-0 mr-auto font-weight-bolder">System Notifications</h6>
                                <div class="custom-control custom-control-primary custom-switch">
                                    <input class="custom-control-input" id="systemNotification" type="checkbox"
                                        checked="">
                                    <label class="custom-control-label" for="systemNotification"></label>
                                </div>
                            </div><a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar bg-light-danger">
                                            <div class="avatar-content"><i class="avatar-icon" data-feather="x"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">Server
                                                down</span>&nbsp;registered</p><small class="notification-text"> USA
                                            Server is down due to hight CPU usage</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar bg-light-success">
                                            <div class="avatar-content"><i class="avatar-icon" data-feather="check"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">Sales
                                                report</span>&nbsp;generated</p><small class="notification-text"> Last
                                            month sales report generated</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar bg-light-warning">
                                            <div class="avatar-content"><i class="avatar-icon"
                                                    data-feather="alert-triangle"></i></div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">High
                                                memory</span>&nbsp;usage</p><small class="notification-text"> BLR Server
                                            using high memory</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-menu-footer"><a class="btn btn-primary btn-block"
                                href="javascript:void(0)">Read all notifications</a></li>
                    </ul>
                </li> --}}
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                        id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none">
                            <span class="user-name font-weight-bolder">{{ auth()->user()->name }}</span>
                            <span class="user-status">
                                @if (auth()->user()->role == '1')
                                    Admin
                                @else
                                    Employee
                                @endif
                            </span>
                        </div>
                        <span class="avatar">
                            <img class="round" src="{{ asset('uploads/profile_photoes') }}/{{ auth()->user()->profile_photo }}" alt="avatar" height="40" width="40">
                            {{-- <img class="round" src="{{ asset('dashboard_assets') }}/app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"> --}}
                            {{-- <span class="avatar-status-online"></span> --}}
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                        <a class="dropdown-item" href="{{ route('my-profile') }}">
                            <i class="mr-50" data-feather="user"></i>
                            Profile
                        </a>
                        {{-- <div class="dropdown-divider"></div> --}}
                        <a class="dropdown-item" href="page-account-settings.html">
                            <i class="mr-50" data-feather="settings"></i>
                            Settings
                        </a>

                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                <i class="mr-50" data-feather="power"></i> Logout</a>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a href="javascript:void(0);">
                <h6 class="mb-0 section-label mt-75">Files</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="{{ asset('dashboard_assets') }}/app-assets/images/icons/xls.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="mb-0 search-data-title">Two new item submitted</p><small class="text-muted">Marketing
                            Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="{{ asset('dashboard_assets') }}/app-assets/images/icons/jpg.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="mb-0 search-data-title">52 JPG file Generated</p><small class="text-muted">FontEnd
                            Developer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="{{ asset('dashboard_assets') }}/app-assets/images/icons/pdf.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="mb-0 search-data-title">25 PDF File Uploaded</p><small class="text-muted">Digital
                            Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="{{ asset('dashboard_assets') }}/app-assets/images/icons/doc.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="mb-0 search-data-title">Anna_Strong.doc</p><small class="text-muted">Web
                            Designer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a href="javascript:void(0);">
                <h6 class="mb-0 section-label mt-75">Members</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img src="{{ asset('dashboard_assets') }}/app-assets/images/portrait/small/avatar-s-8.jpg"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="mb-0 search-data-title">John Doe</p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img src="{{ asset('dashboard_assets') }}/app-assets/images/portrait/small/avatar-s-1.jpg"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="mb-0 search-data-title">Michal Clark</p><small class="text-muted">FontEnd
                            Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img src="{{ asset('dashboard_assets') }}/app-assets/images/portrait/small/avatar-s-14.jpg"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="mb-0 search-data-title">Milena Gibson</p><small class="text-muted">Digital Marketing
                            Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img src="{{ asset('dashboard_assets') }}/app-assets/images/portrait/small/avatar-s-6.jpg"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="mb-0 search-data-title">Anna Strong</p><small class="text-muted">Web Designer</small>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between"><a
                class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="mr-75"
                        data-feather="alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="flex-row nav navbar-nav">
                <li class="mr-auto nav-item"><a class="navbar-brand"
                        href="../../../html/ltr/vertical-menu-template/index.html"><span class="brand-logo">
                            <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                <defs>
                                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%"
                                        y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%"
                                        x2="37.373316%" y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path"
                                                d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                                                style="fill:currentColor"></path>
                                            <path id="Path1"
                                                d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                                                fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997"
                                                points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325">
                                            </polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994"
                                                points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338">
                                            </polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994"
                                                points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288">
                                            </polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg></span>
                        <h2 class="brand-text">Vuexy</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="pr-0 nav-link modern-nav-toggle" data-toggle="collapse"><i
                            class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                            class="d-none d-xl-block collapse-toggle-icon font-medium-4 text-primary"
                            data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item @yield('dashboard-active')">
                    <a class="d-flex align-items-center" href="{{ route('dashboard') }}">
                        <i data-feather="home"></i><span class="menu-title text-truncate"
                            data-i18n="Dashboards">Dashboard</span></a>
                </li>
                <li class=" nav-item">
                    <a class="d-flex align-items-center" href="{{ route('frontend.home') }}">
                        <i data-feather="eye"></i>
                        <span class="menu-title text-truncate" data-i18n="web">View Website</span></a>
                </li>
                {{-- <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span><i
                        data-feather="more-horizontal"></i>
                </li> --}}
                {{-- <li class="nav-item @yield('category-active')"><a class="d-flex align-items-center" href="{{ route('category.index') }}"><i
                            data-feather="grid"></i><span class="menu-title text-truncate"
                            data-i18n="Kanban">Product Category</span></a>
                </li> --}}
                {{-- <li class=" nav-item"><a class="d-flex align-items-center" href="#">
                    <i data-feather="airplay"></i>
                    <span class="menu-title text-truncate" data-i18n="Kanban">Banner</span></a>
                    <ul class="menu-content">
                        <li class="@yield('add-banner-active')"><a class="d-flex align-items-center" href="{{ route('category.index') }}"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="List">Add Banner</span></a>
                        </li>
                        <li class="@yield('list-banner-active')"><a class="d-flex align-items-center" href="{{ route('subcategory.index') }}"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Preview">List Banner</span></a>
                        </li>
                    </ul>
                </li> --}}
                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Categories</span><i
                        data-feather="more-horizontal"></i>
                </li>
                {{-- <li class="nav-item @yield('category-active')"><a class="d-flex align-items-center" href="{{ route('category.index') }}"><i
                            data-feather="grid"></i><span class="menu-title text-truncate"
                            data-i18n="Kanban">Product Category</span></a>
                </li> --}}
                <li class=" nav-item"><a class="d-flex align-items-center" href="#">
                    <i data-feather="grid"></i>
                    <span class="menu-title text-truncate" data-i18n="Kanban">Product Categories</span></a>
                    <ul class="menu-content">
                        <li class="@yield('category-active')"><a class="d-flex align-items-center" href="{{ route('category.index') }}"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="List">Categories</span></a>
                        </li>
                        <li class="@yield('subCategory-active')"><a class="d-flex align-items-center" href="{{ route('subcategory.index') }}"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Preview">Sub Categories</span></a>
                        </li>
                    </ul>
                </li>
                {{-- <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="file-text"></i><span class="menu-title text-truncate"
                            data-i18n="Invoice">Invoice</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="app-invoice-list.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="List">List</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Preview">Preview</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-edit.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Edit">Edit</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-add.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Add">Add</span></a>
                        </li>
                    </ul>
                </li> --}}
                <li class=" navigation-header"><span data-i18n="User Interface">Products</span><i
                        data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="shopping-cart"></i><span class="menu-title text-truncate"
                            data-i18n="Card">Products</span></a>
                    <ul class="menu-content">
                        <li class="@yield('add-product-active')"><a class="d-flex align-items-center" href="{{ route('product.create') }}"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Basic">Add Product</span></a>
                        </li>
                        <li class="@yield('product-list-active')">
                            <a class="d-flex align-items-center" href="{{ route('product.index') }}">
                                <i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Statistics">Product List</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span data-i18n="User Interface">Coupons</span><i
                        data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="trello"></i><span class="menu-title text-truncate"
                            data-i18n="Card">Coupons</span></a>
                    <ul class="menu-content">
                        <li class="@yield('add-coupon-active')"><a class="d-flex align-items-center" href="{{ route('coupon.create') }}"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Basic">Add Coupon</span></a>
                        </li>
                        <li class="@yield('coupon-list-active')">
                            <a class="d-flex align-items-center" href="{{ route('coupon.index') }}">
                                <i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Statistics">Coupon List</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Manage Website</span><i
                        data-feather="more-horizontal"></i>
                </li>
                <li class="nav-item @yield('banner-active')">
                    <a class="d-flex align-items-center" href="{{ route('banner.index') }}">
                        <i data-feather="airplay"></i>
                        <span class="menu-title text-truncate" data-i18n="web">Banner</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="cpu"></i><span
                            class="menu-title text-truncate" data-i18n="Card">Category Section</span></a>
                    <ul class="menu-content">
                        <li class="@yield('cat-section-one-active')"><a class="d-flex align-items-center"
                                href="{{ route('catSectionOne.index') }}"><i data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Basic">Section One</span></a>
                        </li>
                        <li class="@yield('cat-section-two-active')">
                            <a class="d-flex align-items-center" href="{{ route('catSectionTwo.index') }}">
                                <i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Statistics">Section Two</span>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="credit-card"></i><span class="menu-title text-truncate"
                            data-i18n="Card">Card</span><span
                            class="ml-auto mr-1 badge badge-light-success badge-pill">New</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="card-basic.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Basic">Basic</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="card-advance.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Advance">Advance</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="card-statistics.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Statistics">Statistics</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="card-analytics.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Analytics">Analytics</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="card-actions.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Card Actions">Card Actions</span></a>
                        </li>
                    </ul>
                </li> --}}
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        @yield('content')
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; {{ \Carbon\Carbon::now()->format('Y') }}<a
                    class="ml-25" href="{{ route('frontend.home') }}" target="_blank">Pustok - Book Store</a>
                    <span class="d-none d-sm-inline-block">, All rights Reserved</span></span>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->

    @stack('all_modals')

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('dashboard_assets/app-assets/js/scripts/pages/dashboard-ecommerce.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/js/scripts/extensions/ext-component-sweet-alerts.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/js/scripts/forms/form-file-uploader.js') }}"></script>
    {{-- <script src="{{ asset('dashboard_assets/app-assets/js/scripts/forms/form-quill-editor.js') }}"></script> --}}
    <!-- END: Page JS-->

    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}">
    </script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}">
    </script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js') }}">
    </script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    {{-- <script src="{{ asset('dashboard_assets/app-assets/js/scripts/forms/form-validation.js') }}"></script> --}}
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/js/scripts/forms/form-select2.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/pickers/pickadate/picker.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/pickers/pickadate/picker.date.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/pickers/pickadate/picker.time.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/pickers/pickadate/legacy.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/js/scripts/forms/pickers/form-pickers.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/editors/trix/trix.min.js') }}"></script>
    {{-- <script src="{{ asset('dashboard_assets/app-assets/vendors/js/editors/quill/katex.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/editors/quill/highlight.min.js') }}"></script> --}}
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/editors/quill/quill.min.js') }}"></script>
    <!-- END Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/extensions/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/extensions/polyfill.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/extensions/dropzone.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('dashboard_assets/app-assets/js/core/app.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/js/core/app-menu.js') }}"></script>

    <script>

        // ajax setup start
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        })
        // ajax setup end

        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })

        // $(document).ready(function () {
        //     setTimeout(() => {
        //         $('.welcome-card')
        //     }, 2000);
        // });


    // <!-- Toastr Message Script-->

        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "3000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        // $(window).on("load", function(){
        //     @if ($errors->any())
        //         @foreach ($errors->all() as $error)
        //             toastr.error('{{ $error }}');
        //         @endforeach
        //     @endif

        //     @if(session()->get('error'))
        //         toastr.error('{{ session()->get('error') }}');
        //     @endif

        //     @if(session()->get('success'))
        //         toastr.success('{{ session()->get('success') }}');
        //     @endif
        // });
    </script>

    <!-- DataTable Script-->
    <script>
        $(document).ready(function(){
            $('.data_table').dataTable({
                "bProcessing": false,
                "sAutoWidth": false,
                "bDestroy":false,
                "bSort":true,
                "sPaginationType": "bootstrap", // full_numbers
                // "iDisplayStart ": 10,
                // "iDisplayLength": 10,
                "bPaginate": false, //hide/show pagination
                "bFilter": true, //hide/show Search bar
                "bInfo": false, // hide/show showing entries
            });

            $('.data_table--without-sort').dataTable({
                "bProcessing": false,
                "sAutoWidth": false,
                "bDestroy":false,
                "bSort":false,
                "sPaginationType": "bootstrap", // full_numbers
                // "iDisplayStart ": 10,
                // "iDisplayLength": 10,
                "bPaginate": false, //hide/show pagination
                "bFilter": true, //hide/show Search bar
                "bInfo": false, // hide/show showing entries
            });
        })
    </script>

    @stack('js')
</body>
<!-- END: Body-->

</html>
