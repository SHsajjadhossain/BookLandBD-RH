@extends('frontend.layouts.app_frontend')

@section('title')

Pustok - Book Store

@endsection

@push('custom-css')

<style>

.hero-slider-4 .home-content .title-small{
    color: #62ab00 !important;
}

.hero-slider-4 .home-content .banner-shop-btn{
    background: transparent;
    border: 2px solid #62ab00 !important;
    color: #62ab00;
    transition: .4s;
}

.hero-slider-4 .home-content .banner-shop-btn:hover{
    background: #62ab00;
    color: #ffffff;
}

.all-products-shop-btn{
    background: #62ab00;
    border: 1px solid #62ab00;
    color: #ffffff;
    margin-top: 50px;
    transition: .4s;
}

.all-products-shop-btn:hover{
    background: #eccd00;
    border: 1px solid #eccd00;
    color: #000000;
}

</style>

@endpush

@section('content')

<!--=================================
        Hero Area
===================================== -->
{{-- <section class="hero-area hero-slider-2">
    <div class="container">
        <div class="row align-items-lg-center">
            <div class="col-lg-9 offset-lg-3">
                <div class="sb-slick-slider" data-slick-setting='{
                                                                "autoplay": true,
                                                                "autoplaySpeed": 8000,
                                                                "slidesToShow": 1,
                                                                "dots":true
                                                                }'>
                    <div class="single-slide bg-image" data-bg="{{ asset('frontend_assets') }}/image/bg-images/home-2-slider-2.jpg">
                        <div class="home-content pl--30">
                            <div class="row">
                                <div class="col-lg-7">
                                    <span class="title-mid">Book Mockup</span>
                                    <h2 class="h2-v2">Hardcover.</h2>
                                    <p>Cover up front of book and
                                        <br>leave summary
                                    </p>
                                    <a href="shop-grid.html" class="btn btn-outlined--primary">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide bg-image" data-bg="{{ asset('frontend_assets') }}/image/bg-images/home-2-slider-1.jpg">
                        <div class="home-content pl--30">
                            <div class="row">
                                <div class="col-lg-7">
                                    <span class="title-mid">Book Mockup</span>
                                    <h2 class="h2-v2">Hardcover.</h2>
                                    <p>Cover up front of book and
                                        <br>leave summary
                                    </p>
                                    <a href="shop-grid.html" class="btn btn-outlined--primary">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

    <section class="hero-area hero-slider-4 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 offset-lg-3">
                    <div class="sb-slick-slider" data-slick-setting='{
                                                                        "autoplay": true,
                                                                        "autoplaySpeed": 8000,
                                                                        "slidesToShow": 1,
                                                                        "dots":true
                                                                        }'>
                        @forelse ($banners as $banner)
                        <div class="single-slide bg-image bg-overlay--white"
                            data-bg="{{ asset('uploads/banner_photoes') }}/{{ $banner->banner_photo }}">
                            <div class="text-left home-content pl--30">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <span class="title-small">{{ $banner->banner_title_small }}</span>
                                        <h1>{{ $banner->banner_title_big }}</h1>
                                        <p>{{ $banner->banner_text }}</p>
                                        <a href="{{ route('frontend.shop') }}" class="btn btn-outlined banner-shop-btn">
                                            Shop Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <span class="text-center text-danger">Nothing To Show</span>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--=================================
        Home Features Section
===================================== -->
    <section class="mt-3 section-padding">
        <h2 class="sr-only">Feature Section</h2>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6 mt--30">
                    <div class="feature-box h-100">
                        <div class="icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <div class="text">
                            <h5>Free Shipping Item</h5>
                            <p> Orders over $500</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mt--30">
                    <div class="feature-box h-100">
                        <div class="icon">
                            <i class="fas fa-redo-alt"></i>
                        </div>
                        <div class="text">
                            <h5>Money Back Guarantee</h5>
                            <p>100% money back</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mt--30">
                    <div class="feature-box h-100">
                        <div class="icon">
                            <i class="fas fa-piggy-bank"></i>
                        </div>
                        <div class="text">
                            <h5>Cash On Delivery</h5>
                            <p>Lorem ipsum dolor amet</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mt--30">
                    <div class="feature-box h-100">
                        <div class="icon">
                            <i class="fas fa-life-ring"></i>
                        </div>
                        <div class="text">
                            <h5>Help & Support</h5>
                            <p>Call us : + 0123.4567.89</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--=================================
        Deal of the day
===================================== -->
<section class="section-margin">
    <div class="container">
        <div class="promo-section-heading">
            <h2>Deal of the day up to 20% off Special offer</h2>
        </div>
        <div class="product-slider with-countdown slider-border-single-row sb-slick-slider" data-slick-setting='{
                "autoplay": true,
                "autoplaySpeed": 8000,
                "slidesToShow": 4,
                "dots":true
                }' data-slick-responsive='[
                    {"breakpoint":1400, "settings": {"slidesToShow": 4} },
                    {"breakpoint":992, "settings": {"slidesToShow": 3} },
                    {"breakpoint":768, "settings": {"slidesToShow": 2} },
                    {"breakpoint":575, "settings": {"slidesToShow": 2} },
                    {"breakpoint":490, "settings": {"slidesToShow": 1} }
                ]'>
            <div class="single-slide">
                <div class="product-card">
                    <div class="product-header">
                        <a href="#" class="author">
                            Ypple
                        </a>
                        <h3><a href="product-details.html">Do You Really Need It? This Will Help You
                            </a>
                        </h3>
                    </div>
                    <div class="product-card--body">
                        <div class="card-image">
                            <img src="{{ asset('frontend_assets') }}/image/products/product-2.jpg" alt="">
                            <div class="hover-contents">
                                <a href="product-details.html" class="hover-image">
                                    <img src="{{ asset('frontend_assets') }}/image/products/product-1.jpg" alt="">
                                </a>
                                <div class="hover-btns">
                                    <a href="cart.html" class="single-btn">
                                        <i class="fas fa-shopping-basket"></i>
                                    </a>
                                    <a href="wishlist.html" class="single-btn">
                                        <i class="fas fa-heart"></i>
                                    </a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal" class="single-btn">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="price-block">
                            <span class="price">£51.20</span>
                            <del class="price-old">£51.20</del>
                            <span class="price-discount">20%</span>
                        </div>
                        <div class="count-down-block">
                            <div class="product-countdown" data-countdown="10/10/2023"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slide">
                <div class="product-card">
                    <div class="product-header">
                        <a href="#" class="author">
                            Upple
                        </a>
                        <h3><a href="product-details.html">Here Is A Quick Cure For Book with pdf</a></h3>
                    </div>
                    <div class="product-card--body">
                        <div class="card-image">
                            <img src="{{ asset('frontend_assets') }}/image/products/product-1.jpg" alt="">
                            <div class="hover-contents">
                                <a href="product-details.html" class="hover-image">
                                    <img src="{{ asset('frontend_assets') }}/image/products/product-1.jpg" alt="">
                                </a>
                                <div class="hover-btns">
                                    <a href="cart.html" class="single-btn">
                                        <i class="fas fa-shopping-basket"></i>
                                    </a>
                                    <a href="wishlist.html" class="single-btn">
                                        <i class="fas fa-heart"></i>
                                    </a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal" class="single-btn">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="price-block">
                            <span class="price">£51.20</span>
                            <del class="price-old">£51.20</del>
                            <span class="price-discount">20%</span>
                        </div>
                        <div class="count-down-block">
                            <div class="product-countdown" data-countdown="10/10/2023"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slide">
                <div class="product-card">
                    <div class="product-header">
                        <a href="#" class="author">
                            Ypple
                        </a>
                        <h3><a href="product-details.html">a Half Very Simple Things You To Save</a></h3>
                    </div>
                    <div class="product-card--body">
                        <div class="card-image">
                            <img src="{{ asset('frontend_assets') }}/image/products/product-3.jpg" alt="">
                            <div class="hover-contents">
                                <a href="product-details.html" class="hover-image">
                                    <img src="{{ asset('frontend_assets') }}/image/products/product-2.jpg" alt="">
                                </a>
                                <div class="hover-btns">
                                    <a href="cart.html" class="single-btn">
                                        <i class="fas fa-shopping-basket"></i>
                                    </a>
                                    <a href="wishlist.html" class="single-btn">
                                        <i class="fas fa-heart"></i>
                                    </a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal" class="single-btn">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="price-block">
                            <span class="price">£51.20</span>
                            <del class="price-old">£51.20</del>
                            <span class="price-discount">20%</span>
                        </div>
                        <div class="count-down-block">
                            <div class="product-countdown" data-countdown="10/10/2023"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slide">
                <div class="product-card">
                    <div class="product-header">
                        <a href="#" class="author">
                            Epple
                        </a>
                        <h3><a href="product-details.html">What You Can Learn From Bill Gates</a>
                        </h3>
                    </div>
                    <div class="product-card--body">
                        <div class="card-image">
                            <img src="{{ asset('frontend_assets') }}/image/products/product-5.jpg" alt="">
                            <div class="hover-contents">
                                <a href="product-details.html" class="hover-image">
                                    <img src="{{ asset('frontend_assets') }}/image/products/product-4.jpg" alt="">
                                </a>
                                <div class="hover-btns">
                                    <a href="cart.html" class="single-btn">
                                        <i class="fas fa-shopping-basket"></i>
                                    </a>
                                    <a href="wishlist.html" class="single-btn">
                                        <i class="fas fa-heart"></i>
                                    </a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal" class="single-btn">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="price-block">
                            <span class="price">£51.20</span>
                            <del class="price-old">£51.20</del>
                            <span class="price-discount">20%</span>
                        </div>
                        <div class="count-down-block">
                            <div class="product-countdown" data-countdown="10/10/2023"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slide">
                <div class="product-card">
                    <div class="product-header">
                        <a href="#" class="author">
                            Rpple
                        </a>
                        <h3><a href="product-details.html">Create Better BOOK With The Help Of Your</a></h3>
                    </div>
                    <div class="product-card--body">
                        <div class="card-image">
                            <img src="{{ asset('frontend_assets') }}/image/products/product-6.jpg" alt="">
                            <div class="hover-contents">
                                <a href="product-details.html" class="hover-image">
                                    <img src="{{ asset('frontend_assets') }}/image/products/product-4.jpg" alt="">
                                </a>
                                <div class="hover-btns">
                                    <a href="cart.html" class="single-btn">
                                        <i class="fas fa-shopping-basket"></i>
                                    </a>
                                    <a href="wishlist.html" class="single-btn">
                                        <i class="fas fa-heart"></i>
                                    </a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal" class="single-btn">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="price-block">
                            <span class="price">£51.20</span>
                            <del class="price-old">£51.20</del>
                            <span class="price-discount">20%</span>
                        </div>
                        <div class="count-down-block">
                            <div class="product-countdown" data-countdown="10/10/2023"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slide">
                <div class="product-card">
                    <div class="product-header">
                        <a href="#" class="author">
                            Tpple
                        </a>
                        <h3><a href="product-details.html">Turn Your BOOK Into High Machine</a>
                        </h3>
                    </div>
                    <div class="product-card--body">
                        <div class="card-image">
                            <img src="{{ asset('frontend_assets') }}/image/products/product-8.jpg" alt="">
                            <div class="hover-contents">
                                <a href="product-details.html" class="hover-image">
                                    <img src="{{ asset('frontend_assets') }}/image/products/product-7.jpg" alt="">
                                </a>
                                <div class="hover-btns">
                                    <a href="cart.html" class="single-btn">
                                        <i class="fas fa-shopping-basket"></i>
                                    </a>
                                    <a href="wishlist.html" class="single-btn">
                                        <i class="fas fa-heart"></i>
                                    </a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal" class="single-btn">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="price-block">
                            <span class="price">£51.20</span>
                            <del class="price-old">£51.20</del>
                            <span class="price-discount">20%</span>
                        </div>
                        <div class="count-down-block">
                            <div class="product-countdown" data-countdown="10/10/2023"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slide">
                <div class="product-card">
                    <div class="product-header">
                        <a href="#" class="author">
                            Mpple
                        </a>
                        <h3><a href="product-details.html">Revolutionize Your BOOK With These Easy
                            </a></h3>
                    </div>
                    <div class="product-card--body">
                        <div class="card-image">
                            <img src="{{ asset('frontend_assets') }}/image/products/product-13.jpg" alt="">
                            <div class="hover-contents">
                                <a href="product-details.html" class="hover-image">
                                    <img src="{{ asset('frontend_assets') }}/image/products/product-11.jpg" alt="">
                                </a>
                                <div class="hover-btns">
                                    <a href="cart.html" class="single-btn">
                                        <i class="fas fa-shopping-basket"></i>
                                    </a>
                                    <a href="wishlist.html" class="single-btn">
                                        <i class="fas fa-heart"></i>
                                    </a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal" class="single-btn">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="price-block">
                            <span class="price">£51.20</span>
                            <del class="price-old">£51.20</del>
                            <span class="price-discount">20%</span>
                        </div>
                        <div class="count-down-block">
                            <div class="product-countdown" data-countdown="10/10/2023"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=================================
        Home Slider Tab
===================================== -->
<section class="section-padding">
    <h2 class="sr-only">Home Tab Slider Section</h2>
    <div class="container">
        <div class="sb-custom-tab">
            <div class="section-title section-title--bordered">
                <h2>All Products</h2>
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane show active" id="shop" role="tabpanel" aria-labelledby="shop-tab">
                    <div class="product-slider multiple-row slider-border-multiple-row sb-slick-slider"
                        data-slick-setting='{
                            "autoplay": true,
                            "autoplaySpeed": 8000,
                            "slidesToShow": 5,
                            "rows":2,
                            "dots":false
                        }' data-slick-responsive='[
                            {"breakpoint":1200, "settings": {"slidesToShow": 3} },
                            {"breakpoint":768, "settings": {"slidesToShow": 2} },
                            {"breakpoint":480, "settings": {"slidesToShow": 1} },
                            {"breakpoint":320, "settings": {"slidesToShow": 1} }
                        ]'>
                        @forelse ($all_products as $product)
                        <div class="single-slide">
                            <div class="product-card">
                                <div class="product-header">
                                    <h3><a href="product-details.html">{{ $product->product_name }}</a></h3>
                                </div>
                                <div class="product-card--body">
                                    <div class="card-image">
                                        <img src="{{ asset('uploads/product_photoes') }}/{{ $product->product_photo }}" alt="Product photo not found">
                                        <div class="hover-contents">
                                            <a href="product-details.html" class="hover-image">
                                                <img src="{{ asset('uploads/product_photoes') }}/{{ $product->product_photo }}" alt="Product photo not found">
                                            </a>
                                            <div class="hover-btns">
                                                <a href="cart.html" class="single-btn">
                                                    <i class="fas fa-shopping-basket"></i>
                                                </a>
                                                <a href="wishlist.html" class="single-btn">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-block">
                                        <span class="price">৳{{ $product->product_price }}</span>
                                        {{-- <del class="price-old">£51.20</del>
                                        <span class="price-discount">20%</span> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <span class="text-center text-danger">No Product To Show</span>
                        @endforelse
                    </div>
                </div>
            </div>
            <a href="{{ route('frontend.shop') }}" class="btn btn-outlined all-products-shop-btn">
                View More
            </a>
        </div>
    </div>
</section>

<!--=================================
        Promotion Section One
===================================== -->
<section class="section-margin">
    <h2 class="sr-only">Promotion Section</h2>
    <div class="container">
        <div class="row space-db--30">
            <div class="col-lg-6 mb--30">
                <a href="#" class="promo-image promo-overlay">
                    <img src="{{ asset('frontend_assets') }}/image/bg-images/promo-banner-with-text.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-6 mb--30">
                <a href="#" class="promo-image promo-overlay">
                    <img src="{{ asset('frontend_assets') }}/image/bg-images/promo-banner-with-text-2.jpg" alt="">
                </a>
            </div>
        </div>
    </div>
</section>
<!--=================================
        Home Slider Tab
===================================== -->
<section class="section-padding">
    <h2 class="sr-only">Home Tab Slider Section</h2>
    <div class="container">
        <div class="sb-custom-tab">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="new-arrivals-tab" data-bs-toggle="tab" href="#new-arrivals" role="tab"
                        aria-controls="shop" aria-selected="true">
                        New Arrivals
                    </a>
                    <span class="arrow-icon"></span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="men-tab" data-bs-toggle="tab" href="#men" role="tab" aria-controls="men"
                        aria-selected="true">
                        Featured products
                    </a>
                    <span class="arrow-icon"></span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="woman-tab" data-bs-toggle="tab" href="#woman" role="tab"
                        aria-controls="woman" aria-selected="false">
                        Best Seller Products
                    </a>
                    <span class="arrow-icon"></span>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane show active" id="new-arrivals" role="tabpanel" aria-labelledby="new-arrivals-tab">
                    <div class="product-slider multiple-row slider-border-multiple-row sb-slick-slider"
                        data-slick-setting='{
                            "autoplay": true,
                            "autoplaySpeed": 8000,
                            "slidesToShow": 5,
                            "rows":2,
                            "dots":true
                        }' data-slick-responsive='[
                            {"breakpoint":1200, "settings": {"slidesToShow": 3} },
                            {"breakpoint":768, "settings": {"slidesToShow": 2} },
                            {"breakpoint":480, "settings": {"slidesToShow": 1} },
                            {"breakpoint":320, "settings": {"slidesToShow": 1} }
                        ]'>
                        @forelse ($new_products as $new_product)
                        <div class="single-slide">
                            <div class="product-card">
                                <div class="product-header">
                                    <h3><a href="product-details.html">{{ $new_product->product_name }}</a></h3>
                                </div>
                                <div class="product-card--body">
                                    <div class="card-image">
                                        <img src="{{ asset('uploads/product_photoes') }}/{{ $new_product->product_photo }}" alt="Product photo not found">
                                        <div class="hover-contents">
                                            <a href="product-details.html" class="hover-image">
                                                <img src="{{ asset('uploads/product_photoes') }}/{{ $new_product->product_photo }}" alt="Product photo not found">
                                            </a>
                                            <div class="hover-btns">
                                                <a href="cart.html" class="single-btn">
                                                    <i class="fas fa-shopping-basket"></i>
                                                </a>
                                                <a href="wishlist.html" class="single-btn">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-block">
                                        <span class="price">৳{{ $new_product->product_price }}</span>
                                        {{-- <del class="price-old">£51.20</del>
                                        <span class="price-discount">20%</span> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <span class="text-center text-danger">No Product To Show</span>
                        @endforelse
                    </div>
                </div>
                <div class="tab-pane" id="men" role="tabpanel" aria-labelledby="men-tab">
                    <div class="product-slider multiple-row slider-border-multiple-row sb-slick-slider"
                        data-slick-setting='{
                                        "autoplay": true,
                                        "autoplaySpeed": 8000,
                                        "slidesToShow": 5,
                                        "rows":2,
                                        "dots":true
                                    }' data-slick-responsive='[
                                        {"breakpoint":1200, "settings": {"slidesToShow": 3} },
                                        {"breakpoint":768, "settings": {"slidesToShow": 2} },
                                        {"breakpoint":480, "settings": {"slidesToShow": 1} },
                                        {"breakpoint":320, "settings": {"slidesToShow": 1} }
                                    ]'>
                        <div class="single-slide">
                            <div class="product-card">
                                <div class="product-header">
                                    <a href="#" class="author">
                                        jpple
                                    </a>
                                    <h3><a href="product-details.html">Bpple iPad with Retina Display
                                            MD510LL/A</a></h3>
                                </div>
                                <div class="product-card--body">
                                    <div class="card-image">
                                        <img src="{{ asset('frontend_assets') }}/image/products/product-3.jpg" alt="">
                                        <div class="hover-contents">
                                            <a href="product-details.html" class="hover-image">
                                                <img src="{{ asset('frontend_assets') }}/image/products/product-1.jpg" alt="">
                                            </a>
                                            <div class="hover-btns">
                                                <a href="cart.html" class="single-btn">
                                                    <i class="fas fa-shopping-basket"></i>
                                                </a>
                                                <a href="wishlist.html" class="single-btn">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                                <a href="compare.html" class="single-btn">
                                                    <i class="fas fa-random"></i>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal"
                                                    class="single-btn">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-block">
                                        <span class="price">£51.20</span>
                                        <del class="price-old">£51.20</del>
                                        <span class="price-discount">20%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="product-card">
                                <div class="product-header">
                                    <a href="#" class="author">
                                        Bpple
                                    </a>
                                    <h3><a href="product-details.html">Koss KPH7 Lightweight Portable
                                            Headphone</a></h3>
                                </div>
                                <div class="product-card--body">
                                    <div class="card-image">
                                        <img src="{{ asset('frontend_assets') }}/image/products/product-2.jpg" alt="">
                                        <div class="hover-contents">
                                            <a href="product-details.html" class="hover-image">
                                                <img src="{{ asset('frontend_assets') }}/image/products/product-3.jpg" alt="">
                                            </a>
                                            <div class="hover-btns">
                                                <a href="cart.html" class="single-btn">
                                                    <i class="fas fa-shopping-basket"></i>
                                                </a>
                                                <a href="wishlist.html" class="single-btn">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                                <a href="compare.html" class="single-btn">
                                                    <i class="fas fa-random"></i>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal"
                                                    class="single-btn">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-block">
                                        <span class="price">£51.20</span>
                                        <del class="price-old">£51.20</del>
                                        <span class="price-discount">20%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="product-card">
                                <div class="product-header">
                                    <a href="#" class="author">
                                        Cpple
                                    </a>
                                    <h3><a href="product-details.html">Beats EP Wired On-Ear
                                            digital Headphone-Black

                                        </a></h3>
                                </div>
                                <div class="product-card--body">
                                    <div class="card-image">
                                        <img src="{{ asset('frontend_assets') }}/image/products/product-1.jpg" alt="">
                                        <div class="hover-contents">
                                            <a href="product-details.html" class="hover-image">
                                                <img src="{{ asset('frontend_assets') }}/image/products/product-2.jpg" alt="">
                                            </a>
                                            <div class="hover-btns">
                                                <a href="cart.html" class="single-btn">
                                                    <i class="fas fa-shopping-basket"></i>
                                                </a>
                                                <a href="wishlist.html" class="single-btn">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                                <a href="compare.html" class="single-btn">
                                                    <i class="fas fa-random"></i>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal"
                                                    class="single-btn">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-block">
                                        <span class="price">£51.20</span>
                                        <del class="price-old">£51.20</del>
                                        <span class="price-discount">20%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="product-card">
                                <div class="product-header">
                                    <a href="#" class="author">
                                        Dpple
                                    </a>
                                    <h3><a href="product-details.html">Beats Solo2 Solo 2 Wired On-Ear
                                            Headphone</a></h3>
                                </div>
                                <div class="product-card--body">
                                    <div class="card-image">
                                        <img src="{{ asset('frontend_assets') }}/image/products/product-4.jpg" alt="">
                                        <div class="hover-contents">
                                            <a href="product-details.html" class="hover-image">
                                                <img src="{{ asset('frontend_assets') }}/image/products/product-5.jpg" alt="">
                                            </a>
                                            <div class="hover-btns">
                                                <a href="cart.html" class="single-btn">
                                                    <i class="fas fa-shopping-basket"></i>
                                                </a>
                                                <a href="wishlist.html" class="single-btn">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                                <a href="compare.html" class="single-btn">
                                                    <i class="fas fa-random"></i>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal"
                                                    class="single-btn">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-block">
                                        <span class="price">£51.20</span>
                                        <del class="price-old">£51.20</del>
                                        <span class="price-discount">20%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="product-card">
                                <div class="product-header">
                                    <a href="#" class="author">
                                        Lpple
                                    </a>
                                    <h3><a href="product-details.html">Beats Solo3 Wireless On-Ear
                                            Headphones



                                        </a></h3>
                                </div>
                                <div class="product-card--body">
                                    <div class="card-image">
                                        <img src="{{ asset('frontend_assets') }}/image/products/product-7.jpg" alt="">
                                        <div class="hover-contents">
                                            <a href="product-details.html" class="hover-image">
                                                <img src="{{ asset('frontend_assets') }}/image/products/product-4.jpg" alt="">
                                            </a>
                                            <div class="hover-btns">
                                                <a href="cart.html" class="single-btn">
                                                    <i class="fas fa-shopping-basket"></i>
                                                </a>
                                                <a href="wishlist.html" class="single-btn">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                                <a href="compare.html" class="single-btn">
                                                    <i class="fas fa-random"></i>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal"
                                                    class="single-btn">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-block">
                                        <span class="price">£51.20</span>
                                        <del class="price-old">£51.20</del>
                                        <span class="price-discount">20%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="product-card">
                                <div class="product-header">
                                    <a href="#" class="author">
                                        Fpple
                                    </a>
                                    <h3><a href="product-details.html">3 Ways To Have (A) More Appealing
                                            BOOK</a></h3>
                                </div>
                                <div class="product-card--body">
                                    <div class="card-image">
                                        <img src="{{ asset('frontend_assets') }}/image/products/product-6.jpg" alt="">
                                        <div class="hover-contents">
                                            <a href="product-details.html" class="hover-image">
                                                <img src="{{ asset('frontend_assets') }}/image/products/product-7.jpg" alt="">
                                            </a>
                                            <div class="hover-btns">
                                                <a href="cart.html" class="single-btn">
                                                    <i class="fas fa-shopping-basket"></i>
                                                </a>
                                                <a href="wishlist.html" class="single-btn">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                                <a href="compare.html" class="single-btn">
                                                    <i class="fas fa-random"></i>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal"
                                                    class="single-btn">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-block">
                                        <span class="price">£51.20</span>
                                        <del class="price-old">£51.20</del>
                                        <span class="price-discount">20%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="product-card">
                                <div class="product-header">
                                    <a href="#" class="author">
                                        Epple
                                    </a>
                                    <h3><a href="product-details.html">In 10 Minutes, I'll Give You The
                                            Truth About</a></h3>
                                </div>
                                <div class="product-card--body">
                                    <div class="card-image">
                                        <img src="{{ asset('frontend_assets') }}/image/products/product-5.jpg" alt="">
                                        <div class="hover-contents">
                                            <a href="product-details.html" class="hover-image">
                                                <img src="{{ asset('frontend_assets') }}/image/products/product-6.jpg" alt="">
                                            </a>
                                            <div class="hover-btns">
                                                <a href="cart.html" class="single-btn">
                                                    <i class="fas fa-shopping-basket"></i>
                                                </a>
                                                <a href="wishlist.html" class="single-btn">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                                <a href="compare.html" class="single-btn">
                                                    <i class="fas fa-random"></i>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal"
                                                    class="single-btn">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-block">
                                        <span class="price">£51.20</span>
                                        <del class="price-old">£51.20</del>
                                        <span class="price-discount">20%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="product-card">
                                <div class="product-header">
                                    <a href="#" class="author">
                                        Fpple
                                    </a>
                                    <h3><a href="product-details.html">5 Ways To Get Through To Your
                                            BOOK</a></h3>
                                </div>
                                <div class="product-card--body">
                                    <div class="card-image">
                                        <img src="{{ asset('frontend_assets') }}/image/products/product-8.jpg" alt="">
                                        <div class="hover-contents">
                                            <a href="product-details.html" class="hover-image">
                                                <img src="{{ asset('frontend_assets') }}/image/products/product-9.jpg" alt="">
                                            </a>
                                            <div class="hover-btns">
                                                <a href="cart.html" class="single-btn">
                                                    <i class="fas fa-shopping-basket"></i>
                                                </a>
                                                <a href="wishlist.html" class="single-btn">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                                <a href="compare.html" class="single-btn">
                                                    <i class="fas fa-random"></i>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal"
                                                    class="single-btn">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-block">
                                        <span class="price">£51.20</span>
                                        <del class="price-old">£51.20</del>
                                        <span class="price-discount">20%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="product-card">
                                <div class="product-header">
                                    <a href="#" class="author">
                                        Gpple
                                    </a>
                                    <h3><a href="product-details.html">What Can You Do To Save Your BOOK</a>
                                    </h3>
                                </div>
                                <div class="product-card--body">
                                    <div class="card-image">
                                        <img src="{{ asset('frontend_assets') }}/image/products/product-3.jpg" alt="">
                                        <div class="hover-contents">
                                            <a href="product-details.html" class="hover-image">
                                                <img src="{{ asset('frontend_assets') }}/image/products/product-8.jpg" alt="">
                                            </a>
                                            <div class="hover-btns">
                                                <a href="cart.html" class="single-btn">
                                                    <i class="fas fa-shopping-basket"></i>
                                                </a>
                                                <a href="wishlist.html" class="single-btn">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                                <a href="compare.html" class="single-btn">
                                                    <i class="fas fa-random"></i>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal"
                                                    class="single-btn">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-block">
                                        <span class="price">£51.20</span>
                                        <del class="price-old">£51.20</del>
                                        <span class="price-discount">20%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="product-card">
                                <div class="product-header">
                                    <a href="#" class="author">
                                        Hpple
                                    </a>
                                    <h3><a href="product-details.html">From Destruction By Social Media?</a>
                                    </h3>
                                </div>
                                <div class="product-card--body">
                                    <div class="card-image">
                                        <img src="{{ asset('frontend_assets') }}/image/products/product-9.jpg" alt="">
                                        <div class="hover-contents">
                                            <a href="product-details.html" class="hover-image">
                                                <img src="{{ asset('frontend_assets') }}/image/products/product-11.jpg" alt="">
                                            </a>
                                            <div class="hover-btns">
                                                <a href="cart.html" class="single-btn">
                                                    <i class="fas fa-shopping-basket"></i>
                                                </a>
                                                <a href="wishlist.html" class="single-btn">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                                <a href="compare.html" class="single-btn">
                                                    <i class="fas fa-random"></i>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal"
                                                    class="single-btn">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-block">
                                        <span class="price">£51.20</span>
                                        <del class="price-old">£51.20</del>
                                        <span class="price-discount">20%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="product-card">
                                <div class="product-header">
                                    <a href="#" class="author">
                                        Gpple
                                    </a>
                                    <h3><a href="product-details.html">Find Out More About BOOK By Social
                                            Media?</a></h3>
                                </div>
                                <div class="product-card--body">
                                    <div class="card-image">
                                        <img src="{{ asset('frontend_assets') }}/image/products/product-10.jpg" alt="">
                                        <div class="hover-contents">
                                            <a href="product-details.html" class="hover-image">
                                                <img src="{{ asset('frontend_assets') }}/image/products/product-10.jpg" alt="">
                                            </a>
                                            <div class="hover-btns">
                                                <a href="cart.html" class="single-btn">
                                                    <i class="fas fa-shopping-basket"></i>
                                                </a>
                                                <a href="wishlist.html" class="single-btn">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                                <a href="compare.html" class="single-btn">
                                                    <i class="fas fa-random"></i>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal"
                                                    class="single-btn">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-block">
                                        <span class="price">£51.20</span>
                                        <del class="price-old">£51.20</del>
                                        <span class="price-discount">20%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="product-card">
                                <div class="product-header">
                                    <a href="#" class="author">
                                        Apple
                                    </a>
                                    <h3><a href="product-details.html">Read This Controversial BOOK By
                                            Social Media?</a></h3>
                                </div>
                                <div class="product-card--body">
                                    <div class="card-image">
                                        <img src="{{ asset('frontend_assets') }}/image/products/product-9.jpg" alt="">
                                        <div class="hover-contents">
                                            <a href="product-details.html" class="hover-image">
                                                <img src="{{ asset('frontend_assets') }}/image/products/product-11.jpg" alt="">
                                            </a>
                                            <div class="hover-btns">
                                                <a href="cart.html" class="single-btn">
                                                    <i class="fas fa-shopping-basket"></i>
                                                </a>
                                                <a href="wishlist.html" class="single-btn">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                                <a href="compare.html" class="single-btn">
                                                    <i class="fas fa-random"></i>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal"
                                                    class="single-btn">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-block">
                                        <span class="price">£51.20</span>
                                        <del class="price-old">£51.20</del>
                                        <span class="price-discount">20%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="woman" role="tabpanel" aria-labelledby="woman-tab">
                    <div class="product-slider multiple-row slider-border-multiple-row sb-slick-slider"
                        data-slick-setting='{
                                        "autoplay": true,
                                        "autoplaySpeed": 8000,
                                        "slidesToShow": 5,
                                        "rows":2,
                                        "dots":true
                                    }' data-slick-responsive='[
                                        {"breakpoint":1200, "settings": {"slidesToShow": 3} },
                                        {"breakpoint":768, "settings": {"slidesToShow": 2} },
                                        {"breakpoint":480, "settings": {"slidesToShow": 1} },
                                        {"breakpoint":320, "settings": {"slidesToShow": 1} }
                                    ]'>
                        <div class="single-slide">
                            <div class="product-card">
                                <div class="product-header">
                                    <a href="#" class="author">
                                        jpple
                                    </a>
                                    <h3><a href="product-details.html">Zpple fPad with Retina Display
                                            MD510LL/A</a></h3>
                                </div>
                                <div class="product-card--body">
                                    <div class="card-image">
                                        <img src="{{ asset('frontend_assets') }}/image/products/product-1.jpg" alt="">
                                        <div class="hover-contents">
                                            <a href="product-details.html" class="hover-image">
                                                <img src="{{ asset('frontend_assets') }}/image/products/product-1.jpg" alt="">
                                            </a>
                                            <div class="hover-btns">
                                                <a href="cart.html" class="single-btn">
                                                    <i class="fas fa-shopping-basket"></i>
                                                </a>
                                                <a href="wishlist.html" class="single-btn">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                                <a href="compare.html" class="single-btn">
                                                    <i class="fas fa-random"></i>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal"
                                                    class="single-btn">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-block">
                                        <span class="price">£51.20</span>
                                        <del class="price-old">£51.20</del>
                                        <span class="price-discount">20%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="product-card">
                                <div class="product-header">
                                    <a href="#" class="author">
                                        Bpple
                                    </a>
                                    <h3><a href="product-details.html">Koss KPH7 Lightweight Portable
                                            Headphone</a></h3>
                                </div>
                                <div class="product-card--body">
                                    <div class="card-image">
                                        <img src="{{ asset('frontend_assets') }}/image/products/product-4.jpg" alt="">
                                        <div class="hover-contents">
                                            <a href="product-details.html" class="hover-image">
                                                <img src="{{ asset('frontend_assets') }}/image/products/product-3.jpg" alt="">
                                            </a>
                                            <div class="hover-btns">
                                                <a href="cart.html" class="single-btn">
                                                    <i class="fas fa-shopping-basket"></i>
                                                </a>
                                                <a href="wishlist.html" class="single-btn">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                                <a href="compare.html" class="single-btn">
                                                    <i class="fas fa-random"></i>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal"
                                                    class="single-btn">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-block">
                                        <span class="price">£51.20</span>
                                        <del class="price-old">£51.20</del>
                                        <span class="price-discount">20%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="product-card">
                                <div class="product-header">
                                    <a href="#" class="author">
                                        Cpple
                                    </a>
                                    <h3><a href="product-details.html">Beats EP Wired On-Ear
                                            digital Headphone-Black

                                        </a></h3>
                                </div>
                                <div class="product-card--body">
                                    <div class="card-image">
                                        <img src="{{ asset('frontend_assets') }}/image/products/product-3.jpg" alt="">
                                        <div class="hover-contents">
                                            <a href="product-details.html" class="hover-image">
                                                <img src="{{ asset('frontend_assets') }}/image/products/product-2.jpg" alt="">
                                            </a>
                                            <div class="hover-btns">
                                                <a href="cart.html" class="single-btn">
                                                    <i class="fas fa-shopping-basket"></i>
                                                </a>
                                                <a href="wishlist.html" class="single-btn">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                                <a href="compare.html" class="single-btn">
                                                    <i class="fas fa-random"></i>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal"
                                                    class="single-btn">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-block">
                                        <span class="price">£51.20</span>
                                        <del class="price-old">£51.20</del>
                                        <span class="price-discount">20%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="product-card">
                                <div class="product-header">
                                    <a href="#" class="author">
                                        Dpple
                                    </a>
                                    <h3><a href="product-details.html">Beats Solo2 Solo 2 Wired On-Ear
                                            Headphone</a></h3>
                                </div>
                                <div class="product-card--body">
                                    <div class="card-image">
                                        <img src="{{ asset('frontend_assets') }}/image/products/product-1.jpg" alt="">
                                        <div class="hover-contents">
                                            <a href="product-details.html" class="hover-image">
                                                <img src="{{ asset('frontend_assets') }}/image/products/product-5.jpg" alt="">
                                            </a>
                                            <div class="hover-btns">
                                                <a href="cart.html" class="single-btn">
                                                    <i class="fas fa-shopping-basket"></i>
                                                </a>
                                                <a href="wishlist.html" class="single-btn">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                                <a href="compare.html" class="single-btn">
                                                    <i class="fas fa-random"></i>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal"
                                                    class="single-btn">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-block">
                                        <span class="price">£51.20</span>
                                        <del class="price-old">£51.20</del>
                                        <span class="price-discount">20%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="product-card">
                                <div class="product-header">
                                    <a href="#" class="author">
                                        Lpple
                                    </a>
                                    <h3><a href="product-details.html">Beats Solo3 Wireless On-Ear
                                            Headphones



                                        </a></h3>
                                </div>
                                <div class="product-card--body">
                                    <div class="card-image">
                                        <img src="{{ asset('frontend_assets') }}/image/products/product-11.jpg" alt="">
                                        <div class="hover-contents">
                                            <a href="product-details.html" class="hover-image">
                                                <img src="{{ asset('frontend_assets') }}/image/products/product-4.jpg" alt="">
                                            </a>
                                            <div class="hover-btns">
                                                <a href="cart.html" class="single-btn">
                                                    <i class="fas fa-shopping-basket"></i>
                                                </a>
                                                <a href="wishlist.html" class="single-btn">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                                <a href="compare.html" class="single-btn">
                                                    <i class="fas fa-random"></i>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal"
                                                    class="single-btn">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-block">
                                        <span class="price">£51.20</span>
                                        <del class="price-old">£51.20</del>
                                        <span class="price-discount">20%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="product-card">
                                <div class="product-header">
                                    <a href="#" class="author">
                                        Fpple
                                    </a>
                                    <h3><a href="product-details.html">3 Ways To Have (A) More Appealing
                                            BOOK</a></h3>
                                </div>
                                <div class="product-card--body">
                                    <div class="card-image">
                                        <img src="{{ asset('frontend_assets') }}/image/products/product-10.jpg" alt="">
                                        <div class="hover-contents">
                                            <a href="product-details.html" class="hover-image">
                                                <img src="{{ asset('frontend_assets') }}/image/products/product-7.jpg" alt="">
                                            </a>
                                            <div class="hover-btns">
                                                <a href="cart.html" class="single-btn">
                                                    <i class="fas fa-shopping-basket"></i>
                                                </a>
                                                <a href="wishlist.html" class="single-btn">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                                <a href="compare.html" class="single-btn">
                                                    <i class="fas fa-random"></i>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal"
                                                    class="single-btn">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-block">
                                        <span class="price">£51.20</span>
                                        <del class="price-old">£51.20</del>
                                        <span class="price-discount">20%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="product-card">
                                <div class="product-header">
                                    <a href="#" class="author">
                                        Epple
                                    </a>
                                    <h3><a href="product-details.html">In 10 Minutes, I'll Give You The
                                            Truth About</a></h3>
                                </div>
                                <div class="product-card--body">
                                    <div class="card-image">
                                        <img src="{{ asset('frontend_assets') }}/image/products/product-9.jpg" alt="">
                                        <div class="hover-contents">
                                            <a href="product-details.html" class="hover-image">
                                                <img src="{{ asset('frontend_assets') }}/image/products/product-6.jpg" alt="">
                                            </a>
                                            <div class="hover-btns">
                                                <a href="cart.html" class="single-btn">
                                                    <i class="fas fa-shopping-basket"></i>
                                                </a>
                                                <a href="wishlist.html" class="single-btn">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                                <a href="compare.html" class="single-btn">
                                                    <i class="fas fa-random"></i>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal"
                                                    class="single-btn">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-block">
                                        <span class="price">£51.20</span>
                                        <del class="price-old">£51.20</del>
                                        <span class="price-discount">20%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="product-card">
                                <div class="product-header">
                                    <a href="#" class="author">
                                        Fpple
                                    </a>
                                    <h3><a href="product-details.html">5 Ways To Get Through To Your
                                            BOOK</a></h3>
                                </div>
                                <div class="product-card--body">
                                    <div class="card-image">
                                        <img src="{{ asset('frontend_assets') }}/image/products/product-8.jpg" alt="">
                                        <div class="hover-contents">
                                            <a href="product-details.html" class="hover-image">
                                                <img src="{{ asset('frontend_assets') }}/image/products/product-9.jpg" alt="">
                                            </a>
                                            <div class="hover-btns">
                                                <a href="cart.html" class="single-btn">
                                                    <i class="fas fa-shopping-basket"></i>
                                                </a>
                                                <a href="wishlist.html" class="single-btn">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                                <a href="compare.html" class="single-btn">
                                                    <i class="fas fa-random"></i>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal"
                                                    class="single-btn">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-block">
                                        <span class="price">£51.20</span>
                                        <del class="price-old">£51.20</del>
                                        <span class="price-discount">20%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="product-card">
                                <div class="product-header">
                                    <a href="#" class="author">
                                        Gpple
                                    </a>
                                    <h3><a href="product-details.html">What Can You Do To Save Your BOOK</a>
                                    </h3>
                                </div>
                                <div class="product-card--body">
                                    <div class="card-image">
                                        <img src="{{ asset('frontend_assets') }}/image/products/product-5.jpg" alt="">
                                        <div class="hover-contents">
                                            <a href="product-details.html" class="hover-image">
                                                <img src="{{ asset('frontend_assets') }}/image/products/product-8.jpg" alt="">
                                            </a>
                                            <div class="hover-btns">
                                                <a href="cart.html" class="single-btn">
                                                    <i class="fas fa-shopping-basket"></i>
                                                </a>
                                                <a href="wishlist.html" class="single-btn">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                                <a href="compare.html" class="single-btn">
                                                    <i class="fas fa-random"></i>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal"
                                                    class="single-btn">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-block">
                                        <span class="price">£51.20</span>
                                        <del class="price-old">£51.20</del>
                                        <span class="price-discount">20%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="product-card">
                                <div class="product-header">
                                    <a href="#" class="author">
                                        Hpple
                                    </a>
                                    <h3><a href="product-details.html">From Destruction By Social Media?</a>
                                    </h3>
                                </div>
                                <div class="product-card--body">
                                    <div class="card-image">
                                        <img src="{{ asset('frontend_assets') }}/image/products/product-3.jpg" alt="">
                                        <div class="hover-contents">
                                            <a href="product-details.html" class="hover-image">
                                                <img src="{{ asset('frontend_assets') }}/image/products/product-11.jpg" alt="">
                                            </a>
                                            <div class="hover-btns">
                                                <a href="cart.html" class="single-btn">
                                                    <i class="fas fa-shopping-basket"></i>
                                                </a>
                                                <a href="wishlist.html" class="single-btn">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                                <a href="compare.html" class="single-btn">
                                                    <i class="fas fa-random"></i>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal"
                                                    class="single-btn">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-block">
                                        <span class="price">£51.20</span>
                                        <del class="price-old">£51.20</del>
                                        <span class="price-discount">20%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="product-card">
                                <div class="product-header">
                                    <a href="#" class="author">
                                        Gpple
                                    </a>
                                    <h3><a href="product-details.html">Find Out More About BOOK By Social
                                            Media?</a></h3>
                                </div>
                                <div class="product-card--body">
                                    <div class="card-image">
                                        <img src="{{ asset('frontend_assets') }}/image/products/product-11.jpg" alt="">
                                        <div class="hover-contents">
                                            <a href="product-details.html" class="hover-image">
                                                <img src="{{ asset('frontend_assets') }}/image/products/product-10.jpg" alt="">
                                            </a>
                                            <div class="hover-btns">
                                                <a href="cart.html" class="single-btn">
                                                    <i class="fas fa-shopping-basket"></i>
                                                </a>
                                                <a href="wishlist.html" class="single-btn">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                                <a href="compare.html" class="single-btn">
                                                    <i class="fas fa-random"></i>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal"
                                                    class="single-btn">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-block">
                                        <span class="price">£51.20</span>
                                        <del class="price-old">£51.20</del>
                                        <span class="price-discount">20%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="product-card">
                                <div class="product-header">
                                    <a href="#" class="author">
                                        Apple
                                    </a>
                                    <h3><a href="product-details.html">Read This Controversial BOOK By
                                            Social Media? Out More</a>
                                    </h3>
                                </div>
                                <div class="product-card--body">
                                    <div class="card-image">
                                        <img src="{{ asset('frontend_assets') }}/image/products/product-12.jpg" alt="">
                                        <div class="hover-contents">
                                            <a href="product-details.html" class="hover-image">
                                                <img src="{{ asset('frontend_assets') }}/image/products/product-11.jpg" alt="">
                                            </a>
                                            <div class="hover-btns">
                                                <a href="cart.html" class="single-btn">
                                                    <i class="fas fa-shopping-basket"></i>
                                                </a>
                                                <a href="wishlist.html" class="single-btn">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                                <a href="compare.html" class="single-btn">
                                                    <i class="fas fa-random"></i>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal"
                                                    class="single-btn">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-block">
                                        <span class="price">£51.20</span>
                                        <del class="price-old">£51.20</del>
                                        <span class="price-discount">20%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================================
        SINGLE CATEGORY SECTION
        ===================================== -->
<section class="section-margin">
    <div class="container">
        <div class="section-title section-title--bordered">
            <h2>{{ $cat_section_one_title }}</h2>
        </div>
        <div class="product-list-slider slider-two-column product-slider multiple-row sb-slick-slider slider-border-multiple-row"
            data-slick-setting='{
                                            "autoplay": true,
                                            "autoplaySpeed": 8000,
                                            "slidesToShow":3,
                                            "rows":2,
                                            "dots":true
                                        }' data-slick-responsive='[
                                            {"breakpoint":1200, "settings": {"slidesToShow": 2} },
                                            {"breakpoint":992, "settings": {"slidesToShow": 2} },
                                            {"breakpoint":768, "settings": {"slidesToShow": 1} },
                                            {"breakpoint":575, "settings": {"slidesToShow": 1} },
                                            {"breakpoint":490, "settings": {"slidesToShow": 1} }
                                        ]'>
            @forelse ($cat_section_one_products as $section_one_product)
            <div class="single-slide">
                <div class="product-card card-style-list">
                    <div class="card-image">
                        <img src="{{ asset('uploads/product_photoes') }}/{{ $section_one_product->product_photo }}" alt="Product photo not found">
                    </div>
                    <div class="product-card--body">
                        <div class="product-header">
                            <h3><a href="product-details.html">{{ $section_one_product->product_name }}</a></h3>
                        </div>
                        <div class="price-block">
                            <span class="price">৳{{ $section_one_product->product_price }}</span>
                            {{-- <del class="price-old">£51.20</del>
                            <span class="price-discount">20%</span> --}}
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <span class="text-center text-danger">No Product To Show</span>
            @endforelse
        </div>
    </div>
</section>
<!--=================================
        SINGLE CATEGORY SECTION
===================================== -->
<!--=================================
        SINGLE CATEGORY SECTION
===================================== -->
<section class="section-margin">
    <div class="container">
        <div class="section-title section-title--bordered">
            <h2>{{ $cat_section_two_title }}</h2>
        </div>
        <div class="product-slider sb-slick-slider slider-border-single-row" data-slick-setting='{
                "autoplay": true,
                "autoplaySpeed": 8000,
                "slidesToShow": 5,
                "dots":true
            }' data-slick-responsive='[
                {"breakpoint":1500, "settings": {"slidesToShow": 4} },
                {"breakpoint":992, "settings": {"slidesToShow": 3} },
                {"breakpoint":768, "settings": {"slidesToShow": 2} },
                {"breakpoint":480, "settings": {"slidesToShow": 1} },
                {"breakpoint":320, "settings": {"slidesToShow": 1} }
            ]'>

            @forelse ($cat_section_two_products as $section_two_product)
            <div class="single-slide">
                <div class="product-card">
                    <div class="product-header">
                        <h3><a href="product-details.html">{{ $section_two_product->product_name }}</a></h3>
                    </div>
                    <div class="product-card--body">
                        <div class="card-image">
                            <img src="{{ asset('uploads/product_photoes') }}/{{ $section_two_product->product_photo }}" alt="Product photo not found">
                            <div class="hover-contents">
                                <a href="product-details.html" class="hover-image">
                                    <img src="{{ asset('uploads/product_photoes') }}/{{ $section_two_product->product_photo }}" alt="Product photo not found">
                                </a>
                                <div class="hover-btns">
                                    <a href="cart.html" class="single-btn">
                                        <i class="fas fa-shopping-basket"></i>
                                    </a>
                                    <a href="wishlist.html" class="single-btn">
                                        <i class="fas fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="price-block">
                            <span class="price">৳{{ $section_two_product->product_price }}</span>
                            {{-- <del class="price-old">£51.20</del>
                            <span class="price-discount">20%</span> --}}
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <span class="text-center text-danger">No Product To Show</span>
            @endforelse
        </div>
    </div>
</section>
<!--=================================
        Footer
===================================== -->
    </div>

@endsection

@push('custom-js')

<script>

</script>

@endpush

