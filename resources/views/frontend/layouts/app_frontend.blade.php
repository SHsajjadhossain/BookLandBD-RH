<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from htmldemo.net/pustok/pustok/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2024 20:31:34 GMT -->

<head>
    @include('frontend.includes.header')
    <style>
        .category-menu .has-children.mega-menu > .sub-menu .single-block{
            flex: 35%;
        }

        .category-menu .has-children > .sub-menu > li{
            padding: 5px 20px;
        }

        .category-menu .cat-item .sub-menu .single-block ul li a{
            transition: .4s;
        }

        .category-menu .cat-item .sub-menu .single-block ul li:hover a{
            color: #62ab00 ;
        }

        .icon-shopping-bag{
            font-size: 40px;
        }
        .cart-total .text-number{
            right: 14px;
            top : -8px;
        }

        .home-log-out-icon{
            color: #666;
            margin-right: 5px;
            transition: .4s;
        }

        .home-log-out{
            color: #666 !important;
            transition: .4s;
        }

        .home-log-out:hover{
            color: #62ab00 !important;
        }

        .home-log-out:hover .home-log-out-icon{
            color: #62ab00;
        }
    </style>
</head>

<body>
    <div class="site-wrapper" id="top">
        <div class="site-header header-4 mb--20 d-none d-lg-block">
            <div class="header-top header-top--style-2">
                <div class="container">
                    <div class="row flex-lg-right">
                        <div class="col-lg-8 flex-lg-right">
                            <ul class="header-top-list">
                                @auth
                                    <li class="dropdown-trigger language-dropdown"><a href="{{ route('wishlist.index') }}"><i
                                                class="icons-left fas fa-heart"></i>
                                            wishlist ({{ allWishlists()->count() }})</a>
                                    </li>
                                @else
                                    <li class="dropdown-trigger language-dropdown"><a href="{{ route('login') }}"><i class="icons-left fas fa-heart"></i>
                                            wishlist (0)</a>
                                    </li>
                                @endauth

                                @auth
                                <li class="dropdown-trigger language-dropdown"><a href="#"><i class="icons-left fas fa-user"></i>
                                        My Account</a><i class="fas fa-chevron-down dropdown-arrow"></i>
                                    <ul class="dropdown-box">
                                        @if (Auth::user()->role == '1' || Auth::user()->role == '3')
                                        <li> <a href="{{ route('dashboard') }}">My Dashboard</a></li>
                                        @else
                                        <li> <a href="{{ route('user.dashboard') }}">My Dashboard</a></li>
                                        @endif
                                        <li>
                                            <form action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <a href="{{ route('logout') }}" class="mt-2 mb-2 home-log-out" onclick="event.preventDefault();
                                                                                                this.closest('form').submit();">
                                                    <i class="fas fa-sign-out-alt home-log-out-icon"></i>
                                                    Logout
                                                </a>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                @endauth
                                <li><a href="#"><i class="icons-left fas fa-phone"></i> Contact</a>
                                </li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle pt--10 pb--10">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <a href="{{ route('frontend.home') }}" class="site-brand">
                                <img src="{{ asset('frontend_assets') }}/image/logo.png" alt="">
                            </a>
                        </div>
                        <div class="col-lg-5">
                            <form id="search-form" action="{{ route('product.search') }}" method="GET">
                                @csrf
                                <div class="header-search-block">
                                    <input type="text" name="search_product" id="search_text" value="" placeholder="Search by book name here">
                                    <button type="submit" name="searchbtn">Search</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <div class="main-navigation flex-lg-right">
                                <div class="cart-widget">
                                    <div class="login-block">
                                        @auth
                                            @if (Auth::user()->role == '1' || Auth::user()->role == '3')
                                                <a href="{{ route('dashboard') }}" class="font-weight-bold">{{ Auth::user()->name }}</a>
                                            @else
                                                <a href="{{ route('user.dashboard') }}" class="font-weight-bold">{{ Auth::user()->name }}</a>
                                            @endif
                                        @else
                                            <a href="{{ route('login') }}" class="font-weight-bold">Login</a> <br>
                                            <span>or</span><a href="{{ route('register') }}">Register</a>
                                        @endauth
                                    </div>
                                    <div class="cart-block">
                                        <div class="cart-total">
                                            @auth
                                                @if (allCarts()->count() > 0)
                                                    <span class="text-number">
                                                        {{ allCarts()->count() }}
                                                    </span>
                                                @endif
                                            @endauth
                                            <span class="text-item">
                                                <i class="fas fa-shopping-cart icon-shopping-bag"></i>
                                            </span>
                                            {{-- <span class="price">
                                                ৳{{ $cart_total }}
                                                <i class="fas fa-chevron-down"></i>
                                            </span> --}}
                                        </div>
                                        <div class="cart-dropdown-block">
                                            <div class=" single-cart-block">
                                                @forelse (cartList() as $cart)
                                                    <div class="cart-product">
                                                        <a href="product-details.html" class="image">
                                                            <img src="{{ asset('uploads/product_photoes') }}/{{ $cart->relationWithProduct->product_photo }}" alt="Product photo not found">
                                                        </a>
                                                        <div class="content">
                                                            <h3 class="title"><a href="product-details.html">{{ Str::limit($cart->relationWithProduct->product_name, 40, '...') }}</a>
                                                            </h3>
                                                            <p class="price"><span class="qty">{{ $cart->quantity }} ×</span>
                                                                ৳{{ $cart->quantity * $cart->relationWithProduct->product_price }}
                                                            </p>
                                                            <a href="{{ route('cart.remove', $cart->id) }}" class="cross-btn"><i class="fas fa-times"></i></a>
                                                        </div>
                                                    </div>
                                                @empty
                                                    <span class="mb-2 text-center text-danger d-block">No product in cart</span>
                                                @endforelse
                                            </div>
                                            @auth
                                            @if (allCarts()->count() != 0)
                                            <div class=" single-cart-block">
                                                <div class="btn-block">
                                                    <a href="{{ route('cart') }}" class="btn">View All Cart <i class="fas fa-chevron-right"></i></a>
                                                    <a href="{{ route('checkout') }}" class="btn btn--primary">Check Out <i class="fas fa-chevron-right"></i></a>
                                                </div>
                                            </div>
                                            @endif
                                            @endauth
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom bg-primary">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="mt-2 col-lg-3">
                            <nav class="category-nav bg-white  {{ (URL::current() == route('frontend.home') || URL::current() == route('register') || URL::current() == route('login')) ? 'show' : '' }}">
                                <div>
                                    <a href="#" class="category-trigger"><i class="fa fa-bars"></i>Browse
                                        categories</a>
                                    <ul class="category-menu">
                                        {{-- <li class="cat-item has-children">
                                            <a href="#">Arts & Photography</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Bags & Cases</a></li>
                                                <li><a href="#">Binoculars & Scopes</a></li>
                                                <li><a href="#">Digital Cameras</a></li>
                                                <li><a href="#">Film Photography</a></li>
                                                <li><a href="#">Lighting & Studio</a></li>
                                            </ul>
                                        </li> --}}

                                        @foreach (allCategories() as $category)
                                            @if ($category->relationWithSubCategory->count() > 0)
                                                <li class="cat-item has-children" id="cat-item">
                                                    <a href="javascript:void(0)">{{ $category->category_name }}</a>
                                                    <ul class="sub-menu">
                                                        @foreach ($category->relationWithSubCategory as $sub_cat)
                                                        <li class="single-block">
                                                            <ul>
                                                                <li><a href="{{ route('subcatwiseproducts', [$sub_cat->id, Str::random(5)]) }}">{{ $sub_cat->sub_category_name }}</a></li>
                                                            </ul>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            @else
                                                <li class="cat-item">
                                                    <a href="{{ route('catwiseproducts', [$category->id, Str::random(5)]) }}">{{ $category->category_name }}</a>
                                                </li>
                                            @endif
                                        @endforeach
                                        <li class="cat-item"><a href="{{ route('category.allCategories') }}">More
                                                Categories</a></li>
                                        {{-- <li class="cat-item hidden-menu-item"><a href="#">Indoor Living</a></li> --}}
                                        {{-- <li class="cat-item"><a href="#" class="js-expand-hidden-menu">More
                                                Categories</a></li> --}}
                                    </ul>
                                </div>
                            </nav>
                            {{-- <nav class="category-nav bg-white  {{ URL::current() == route('user.dashboard') ? '' : 'show' }}">
                                <div>
                                    <a href="javascript:void(0)" class="category-trigger"><i class="fa fa-bars"></i>Browse
                                        categories</a>
                                    <ul class="category-menu">
                                        <li class="cat-item has-children">
                                            <a href="#">Arts & Photography</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Bags & Cases</a></li>
                                                <li><a href="#">Binoculars & Scopes</a></li>
                                                <li><a href="#">Digital Cameras</a></li>
                                                <li><a href="#">Film Photography</a></li>
                                                <li><a href="#">Lighting & Studio</a></li>
                                            </ul>
                                        </li>
                                        <li class="cat-item has-children mega-menu"><a href="#">Biographies</a>
                                            <ul class="sub-menu">
                                                <li class="single-block">
                                                    <h3 class="title">WHEEL SIMULATORS</h3>
                                                    <ul>
                                                        <li><a href="#">Bags & Cases</a></li>
                                                        <li><a href="#">Binoculars & Scopes</a></li>
                                                        <li><a href="#">Digital Cameras</a></li>
                                                        <li><a href="#">Film Photography</a></li>
                                                        <li><a href="#">Lighting & Studio</a></li>
                                                    </ul>
                                                </li>
                                                <li class="single-block">
                                                    <h3 class="title">WHEEL SIMULATORS</h3>
                                                    <ul>
                                                        <li><a href="#">Bags & Cases</a></li>
                                                        <li><a href="#">Binoculars & Scopes</a></li>
                                                        <li><a href="#">Digital Cameras</a></li>
                                                        <li><a href="#">Film Photography</a></li>
                                                        <li><a href="#">Lighting & Studio</a></li>
                                                    </ul>
                                                </li>
                                                <li class="single-block">
                                                    <h3 class="title">WHEEL SIMULATORS</h3>
                                                    <ul>
                                                        <li><a href="#">Bags & Cases</a></li>
                                                        <li><a href="#">Binoculars & Scopes</a></li>
                                                        <li><a href="#">Digital Cameras</a></li>
                                                        <li><a href="#">Film Photography</a></li>
                                                        <li><a href="#">Lighting & Studio</a></li>
                                                    </ul>
                                                </li>
                                                <li class="single-block">
                                                    <h3 class="title">WHEEL SIMULATORS</h3>
                                                    <ul>
                                                        <li><a href="#">Bags & Cases</a></li>
                                                        <li><a href="#">Binoculars & Scopes</a></li>
                                                        <li><a href="#">Digital Cameras</a></li>
                                                        <li><a href="#">Film Photography</a></li>
                                                        <li><a href="#">Lighting & Studio</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="cat-item has-children"><a href="#">Business & Money</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Brake Tools</a></li>
                                                <li><a href="#">Driveshafts</a></li>
                                                <li><a href="#">Emergency Brake</a></li>
                                                <li><a href="#">Spools</a></li>
                                            </ul>
                                        </li>
                                        <li class="cat-item has-children"><a href="#">Calendars</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Brake Tools</a></li>
                                                <li><a href="#">Driveshafts</a></li>
                                                <li><a href="#">Emergency Brake</a></li>
                                                <li><a href="#">Spools</a></li>
                                            </ul>
                                        </li>
                                        <li class="cat-item has-children"><a href="#">Children's Books</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Brake Tools</a></li>
                                                <li><a href="#">Driveshafts</a></li>
                                                <li><a href="#">Emergency Brake</a></li>
                                                <li><a href="#">Spools</a></li>
                                            </ul>
                                        </li>
                                        <li class="cat-item has-children"><a href="#">Comics</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Brake Tools</a></li>
                                                <li><a href="#">Driveshafts</a></li>
                                                <li><a href="#">Emergency Brake</a></li>
                                                <li><a href="#">Spools</a></li>
                                            </ul>
                                        </li>
                                        <li class="cat-item"><a href="#">Perfomance Filters</a></li>
                                        <li class="cat-item has-children"><a href="#">Cookbooks</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Brake Tools</a></li>
                                                <li><a href="#">Driveshafts</a></li>
                                                <li><a href="#">Emergency Brake</a></li>
                                                <li><a href="#">Spools</a></li>
                                            </ul>
                                        </li>
                                        <li class="cat-item "><a href="#">Accessories</a></li>
                                        <li class="cat-item "><a href="#">Education</a></li>
                                        <li class="cat-item hidden-menu-item"><a href="#">Indoor Living</a></li>
                                        <li class="cat-item"><a href="#" class="js-expand-hidden-menu">More
                                                Categories</a></li>
                                    </ul>
                                </div>
                            </nav> --}}
                        </div>
                        <div class="col-lg-3">
                            <div class="header-phone color-white">
                                <div class="icon">
                                    <i class="fas fa-headphones-alt"></i>
                                </div>
                                <div class="text">
                                    <p>Free Support 24/7</p>
                                    <p class="font-weight-bold number">+01-202-555-0181</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="main-navigation flex-lg-right">
                                <ul class="main-menu menu-right main-menu--white li-last-0">
                                    <li class="menu-item">
                                        <a href="{{ route('frontend.home') }}">Home </a>
                                    </li>
                                    <!-- Shop -->
                                    <li class="menu-item">
                                        <a href="{{ route('frontend.shop') }}">shop</a>
                                    </li>
                                    <!-- Book Category -->
                                    <li class="menu-item">
                                        <a href="{{ route('category.allCategories') }}">Categories</a>
                                    </li>
                                    <!-- Blog -->
                                    <li class="menu-item">
                                        <a href="#">Blog</a>
                                    </li>
                                    {{-- <li class="menu-item has-children mega-menu">
                                        <a href="javascript:void(0)">Blog <i class="fas fa-chevron-down dropdown-arrow"></i></a>
                                        <ul class="sub-menu three-column">
                                            <li class="cus-col-33">
                                                <h3 class="menu-title"><a href="javascript:void(0)">Blog Grid</a></h3>
                                                <ul class="mega-single-block">
                                                    <li><a href="blog.html">Full Widh (Default)</a></li>
                                                    <li><a href="blog-left-sidebar.html">left Sidebar</a></li>
                                                    <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="cus-col-33">
                                                <h3 class="menu-title"><a href="javascript:void(0)">Blog List </a></h3>
                                                <ul class="mega-single-block">
                                                    <!-- <li><a href="blog-list.html">Full Widh (Default)</a></li> -->
                                                    <li><a href="blog-list-left-sidebar.html">left Sidebar</a></li>
                                                    <li><a href="blog-list-right-sidebar.html">Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="cus-col-33">
                                                <h3 class="menu-title"><a href="javascript:void(0)">Blog Details</a>
                                                </h3>
                                                <ul class="mega-single-block">
                                                    <li><a href="blog-details.html">Image Format (Default)</a></li>
                                                    <li><a href="blog-details-gallery.html">Gallery Format</a></li>
                                                    <li><a href="blog-details-audio.html">Audio Format</a></li>
                                                    <li><a href="blog-details-video.html">Video Format</a></li>
                                                    <li><a href="blog-details-left-sidebar.html">left Sidebar</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> --}}
                                    <!-- Contact -->
                                    <li class="menu-item">
                                        <a href="{{ route('frontend.contact') }}">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-mobile-menu">
            <header class="mobile-header d-block d-lg-none pt--10 pb-md--10">
                <div class="container">
                    <div class="row align-items-sm-end align-items-center">
                        <div class="col-md-4 col-7">
                            <a href="index.html" class="site-brand">
                                <img src="{{ asset('frontend_assets') }}/image/logo.png" alt="">
                            </a>
                        </div>
                        <div class="order-3 col-md-5 order-md-2">
                            <nav class="category-nav ">
                                <div>
                                    <a href="javascript:void(0)" class="category-trigger"><i
                                            class="fa fa-bars"></i>Browse
                                        categories</a>
                                    <ul class="category-menu">
                                        <li class="cat-item has-children">
                                            <a href="#">Arts & Photography</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Bags & Cases</a></li>
                                                <li><a href="#">Binoculars & Scopes</a></li>
                                                <li><a href="#">Digital Cameras</a></li>
                                                <li><a href="#">Film Photography</a></li>
                                                <li><a href="#">Lighting & Studio</a></li>
                                            </ul>
                                        </li>
                                        <li class="cat-item has-children mega-menu"><a href="#">Biographies</a>
                                            <ul class="sub-menu">
                                                <li class="single-block">
                                                    <h3 class="title">WHEEL SIMULATORS</h3>
                                                    <ul>
                                                        <li><a href="#">Bags & Cases</a></li>
                                                        <li><a href="#">Binoculars & Scopes</a></li>
                                                        <li><a href="#">Digital Cameras</a></li>
                                                        <li><a href="#">Film Photography</a></li>
                                                        <li><a href="#">Lighting & Studio</a></li>
                                                    </ul>
                                                </li>
                                                <li class="single-block">
                                                    <h3 class="title">WHEEL SIMULATORS</h3>
                                                    <ul>
                                                        <li><a href="#">Bags & Cases</a></li>
                                                        <li><a href="#">Binoculars & Scopes</a></li>
                                                        <li><a href="#">Digital Cameras</a></li>
                                                        <li><a href="#">Film Photography</a></li>
                                                        <li><a href="#">Lighting & Studio</a></li>
                                                    </ul>
                                                </li>
                                                <li class="single-block">
                                                    <h3 class="title">WHEEL SIMULATORS</h3>
                                                    <ul>
                                                        <li><a href="#">Bags & Cases</a></li>
                                                        <li><a href="#">Binoculars & Scopes</a></li>
                                                        <li><a href="#">Digital Cameras</a></li>
                                                        <li><a href="#">Film Photography</a></li>
                                                        <li><a href="#">Lighting & Studio</a></li>
                                                    </ul>
                                                </li>
                                                <li class="single-block">
                                                    <h3 class="title">WHEEL SIMULATORS</h3>
                                                    <ul>
                                                        <li><a href="#">Bags & Cases</a></li>
                                                        <li><a href="#">Binoculars & Scopes</a></li>
                                                        <li><a href="#">Digital Cameras</a></li>
                                                        <li><a href="#">Film Photography</a></li>
                                                        <li><a href="#">Lighting & Studio</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="cat-item has-children"><a href="#">Business & Money</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Brake Tools</a></li>
                                                <li><a href="#">Driveshafts</a></li>
                                                <li><a href="#">Emergency Brake</a></li>
                                                <li><a href="#">Spools</a></li>
                                            </ul>
                                        </li>
                                        <li class="cat-item has-children"><a href="#">Calendars</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Brake Tools</a></li>
                                                <li><a href="#">Driveshafts</a></li>
                                                <li><a href="#">Emergency Brake</a></li>
                                                <li><a href="#">Spools</a></li>
                                            </ul>
                                        </li>
                                        <li class="cat-item has-children"><a href="#">Children's Books</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Brake Tools</a></li>
                                                <li><a href="#">Driveshafts</a></li>
                                                <li><a href="#">Emergency Brake</a></li>
                                                <li><a href="#">Spools</a></li>
                                            </ul>
                                        </li>
                                        <li class="cat-item has-children"><a href="#">Comics</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Brake Tools</a></li>
                                                <li><a href="#">Driveshafts</a></li>
                                                <li><a href="#">Emergency Brake</a></li>
                                                <li><a href="#">Spools</a></li>
                                            </ul>
                                        </li>
                                        <li class="cat-item"><a href="#">Perfomance Filters</a></li>
                                        <li class="cat-item has-children"><a href="#">Cookbooks</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Brake Tools</a></li>
                                                <li><a href="#">Driveshafts</a></li>
                                                <li><a href="#">Emergency Brake</a></li>
                                                <li><a href="#">Spools</a></li>
                                            </ul>
                                        </li>
                                        <li class="cat-item "><a href="#">Accessories</a></li>
                                        <li class="cat-item "><a href="#">Education</a></li>
                                        <li class="cat-item hidden-menu-item"><a href="#">Indoor Living</a></li>
                                        <li class="cat-item"><a href="#" class="js-expand-hidden-menu">More
                                                Categories</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="text-right col-md-3 col-5 order-md-3">
                            <div class="mobile-header-btns header-top-widget">
                                <ul class="header-links">
                                    <li class="sin-link">
                                        <a href="cart.html" class="cart-link link-icon"><i class="ion-bag"></i></a>
                                    </li>
                                    <li class="sin-link">
                                        <a href="javascript:" class="link-icon hamburgur-icon off-canvas-btn"><i
                                                class="ion-navicon"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!--Off Canvas Navigation Start-->
            <aside class="off-canvas-wrapper">
                <div class="btn-close-off-canvas">
                    <i class="ion-android-close"></i>
                </div>
                <div class="off-canvas-inner">
                    <!-- search box start -->
                    <div class="search-box offcanvas">
                        <form>
                            <input type="text" placeholder="Search Here">
                            <button class="search-btn"><i class="ion-ios-search-strong"></i></button>
                        </form>
                    </div>
                    <!-- search box end -->
                    <!-- mobile menu start -->
                    <div class="mobile-navigation">
                        <!-- mobile menu navigation start -->
                        <nav class="off-canvas-nav">
                            <ul class="mobile-menu main-mobile-menu">
                                <li class="menu-item-has-children">
                                    <a href="#">Home</a>
                                    <ul class="sub-menu">
                                        <li> <a href="index.html">Home One</a></li>
                                        <li> <a href="index-2.html">Home Two</a></li>
                                        <li> <a href="index-3.html">Home Three</a></li>
                                        <li> <a href="index-4.html">Home Four</a></li>
                                        <li> <a href="index-5.html">Home Five</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Blog</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Blog Grid</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.html">Full Widh (Default)</a></li>
                                                <li><a href="blog-left-sidebar.html">left Sidebar</a></li>
                                                <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Blog List</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-list.html">Full Widh (Default)</a></li>
                                                <li><a href="blog-list-left-sidebar.html">left Sidebar</a></li>
                                                <li><a href="blog-list-right-sidebar.html">Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Blog Details</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-details.html">Image Format (Default)</a></li>
                                                <li><a href="blog-details-gallery.html">Gallery Format</a></li>
                                                <li><a href="blog-details-audio.html">Audio Format</a></li>
                                                <li><a href="blog-details-video.html">Video Format</a></li>
                                                <li><a href="blog-details-left-sidebar.html">left Sidebar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Shop Grid</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop-grid.html">Fullwidth</a></li>
                                                <li><a href="shop-grid-left-sidebar.html">left Sidebar</a></li>
                                                <li><a href="shop-grid-right-sidebar.html">Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Shop List</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop-list.html">Fullwidth</a></li>
                                                <li><a href="shop-list-left-sidebar.html">left Sidebar</a></li>
                                                <li><a href="shop-list-right-sidebar.html">Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Product Details 1</a>
                                            <ul class="sub-menu">
                                                <li><a href="product-details.html">Product Details Page</a></li>
                                                <li><a href="product-details-affiliate.html">Product Details
                                                        Affiliate</a></li>
                                                <li><a href="product-details-group.html">Product Details Group</a></li>
                                                <li><a href="product-details-variable.html">Product Details
                                                        Variables</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Product Details 2</a>
                                            <ul class="sub-menu">
                                                <li><a href="product-details-left-thumbnail.html">left Thumbnail</a>
                                                </li>
                                                <li><a href="product-details-right-thumbnail.html">Right Thumbnail</a>
                                                </li>
                                                <li><a href="product-details-left-gallery.html">Left Gallery</a></li>
                                                <li><a href="product-details-right-gallery.html">Right Gallery</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="compare.html">Compare</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="login-register.html">Login Register</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="order-complete.html">Order Complete</a></li>
                                        <li><a href="faq.html">Faq</a></li>
                                        <li><a href="contact-2.html">contact 02</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                        <!-- mobile menu navigation end -->
                    </div>
                    <!-- mobile menu end -->
                    <nav class="off-canvas-nav">
                        <ul class="mobile-menu menu-block-2">
                            <li class="menu-item-has-children">
                                <a href="#">Currency - USD $ <i class="fas fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li> <a href="cart.html">USD $</a></li>
                                    <li> <a href="checkout.html">EUR €</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Lang - Eng<i class="fas fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li>Eng</li>
                                    <li>Ban</li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">My Account <i class="fas fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="#">Transactions</a></li>
                                    <li><a href="#">Downloads</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div class="off-canvas-bottom">
                        <div class="contact-list mb--10">
                            <a href="#" class="sin-contact"><i class="fas fa-mobile-alt"></i>(12345) 78790220</a>
                            <a href="#" class="sin-contact"><i class="fas fa-envelope"></i>examle@handart.com</a>
                        </div>
                        <div class="off-canvas-social">
                            <a href="#" class="single-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="single-icon"><i class="fas fa-rss"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-youtube"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </aside>
            <!--Off Canvas Navigation End-->
        </div>
        <div class="sticky-init fixed-header common-sticky">
            <div class="container d-none d-lg-block">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <a href="{{ route('frontend.home') }}" class="site-brand">
                            <img src="{{ asset('frontend_assets') }}/image/logo.png" alt="">
                        </a>
                    </div>
                    <div class="col-lg-8">
                        <div class="main-navigation flex-lg-right">
                            <ul class="main-menu menu-right ">

                                <li class="menu-item">
                                    <a href="{{ route('frontend.home') }}">Home</a>
                                </li>
                                <!-- Shop -->
                                <li class="menu-item">
                                    <a href="{{ route('frontend.shop') }}">shop</a>
                                </li>
                                <!-- Pages -->
                                {{-- <li class="menu-item has-children">
                                    <a href="javascript:void(0)">Pages <i
                                            class="fas fa-chevron-down dropdown-arrow"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="compare.html">Compare</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="login-register.html">Login Register</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="order-complete.html">Order Complete</a></li>
                                        <li><a href="faq.html">Faq</a></li>
                                        <li><a href="contact-2.html">contact 02</a></li>
                                    </ul>
                                </li> --}}

                                <!-- Book Category -->
                                <li class="menu-item">
                                    <a href="{{ route('category.allCategories') }}">Categories</a>
                                </li>
                                <!-- Blog -->
                                <li class="menu-item">
                                    <a href="#">Blog</a>
                                </li>
                                <!-- Contact -->
                                <li class="menu-item">
                                    <a href="{{ route('frontend.contact') }}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @yield('content')

    <!--=================================
            Brands Slider
    ===================================== -->
    <section class="section-margin">
        <h2 class="sr-only">Brand Slider</h2>
        <div class="container">
            <div class="brand-slider sb-slick-slider border-top border-bottom" data-slick-setting='{
                                                    "autoplay": true,
                                                    "autoplaySpeed": 8000,
                                                    "slidesToShow": 6
                                                    }' data-slick-responsive='[
                        {"breakpoint":992, "settings": {"slidesToShow": 4} },
                        {"breakpoint":768, "settings": {"slidesToShow": 3} },
                        {"breakpoint":575, "settings": {"slidesToShow": 3} },
                        {"breakpoint":480, "settings": {"slidesToShow": 2} },
                        {"breakpoint":320, "settings": {"slidesToShow": 1} }
                    ]'>
                <div class="single-slide">
                    <img src="{{ asset('frontend_assets') }}/image/others/brand-1.jpg" alt="">
                </div>
                <div class="single-slide">
                    <img src="{{ asset('frontend_assets') }}/image/others/brand-2.jpg" alt="">
                </div>
                <div class="single-slide">
                    <img src="{{ asset('frontend_assets') }}/image/others/brand-3.jpg" alt="">
                </div>
                <div class="single-slide">
                    <img src="{{ asset('frontend_assets') }}/image/others/brand-4.jpg" alt="">
                </div>
                <div class="single-slide">
                    <img src="{{ asset('frontend_assets') }}/image/others/brand-5.jpg" alt="">
                </div>
                <div class="single-slide">
                    <img src="{{ asset('frontend_assets') }}/image/others/brand-6.jpg" alt="">
                </div>
                <div class="single-slide">
                    <img src="{{ asset('frontend_assets') }}/image/others/brand-1.jpg" alt="">
                </div>
                <div class="single-slide">
                    <img src="{{ asset('frontend_assets') }}/image/others/brand-2.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        Footer Area
    ===================================== -->
        @include('frontend.includes.footer')

    <!-- Use Minified Plugins Version For Fast Page Load -->
        @include('frontend.includes.script')
</body>


<!-- Mirrored from htmldemo.net/pustok/pustok/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2024 20:31:36 GMT -->

</html>
