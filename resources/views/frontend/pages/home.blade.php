@extends('frontend.layouts.app_frontend')

@section('title')

Pustok - Book Store

@endsection

@push('custom-css')

<style>
    .category-wrapper{
        margin-top: 60px;
    }
    .category-gallery-block .inner-block-wrapper{
        width: 100%;
    }

    .category-gallery-block .inner-block-wrapper .category-slider .prev{
        width: 40px;
        height: 40px;
        font-size: 20px;
        background: #62ab00;
        color: #ffffff;
        border-radius: 50%;
        border: 1px solid #62ab00;
        line-height: 40px;
        text-align: center;
        cursor: pointer;
        box-shadow: -6px 0px 30px 0px rgba(0, 0, 0, 0.1);
        position: absolute;
        top: 50%;
        left: 5px;
        transform: translate(-50%, -50%);
        z-index: 1;
        transition: .4s;
    }

    .category-gallery-block .inner-block-wrapper .category-slider{
        position: relative;
    }

    .category-gallery-block .inner-block-wrapper .category-slider .next{
        width: 40px;
        height: 40px;
        font-size: 20px;
        background: #62ab00;
        color: #ffffff;
        border-radius: 50%;
        border: 1px solid #62ab00;
        line-height: 40px;
        text-align: center;
        cursor: pointer;
        box-shadow: -6px 0px 30px 0px rgba(0, 0, 0, 0.1);
        position: absolute;
        top: 50%;
        right: 25px;
        transform: translate(50%, -50%);
        transition: .4s;
    }

    .category-gallery-block .inner-block-wrapper .category-slider .category-single-slide .category-item{
        width: 97%;
        position: relative;
    }

    .category-gallery-block .inner-block-wrapper .category-slick-slider .slick-dots{
        text-align: center;
        margin-top: 30px;
    }

    .category-gallery-block .inner-block-wrapper .category-slick-slider .slick-dots li{
        font-size: 0;
        width: 11px;
        height: 11px;
        border-radius: 100%;
        background: #d3d3d3;
        margin: 4px;
        display: inline-block;
        opacity: 1;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        cursor: pointer;
    }

    .category-gallery-block .inner-block-wrapper .category-slick-slider .slick-dots .slick-active{
        background: #62ab00;
    }

    .category-gallery-block .inner-block-wrapper .category-slider .category-single-slide .category-item .overlay{
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
    }

    .category-gallery-block .inner-block-wrapper .category-slider .category-single-slide .category-item .overlay h4{
        font-weight: 700;
        color: #ffffff;
        margin-top: 100px;
        margin-left: 35px;
    }

    .category-gallery-block .inner-block-wrapper .category-slider .category-single-slide .category-item .overlay .cat-btn{
        padding: 5px 12px;
        border-radius: 3px;
        font-weight: 600;
        margin-left: 35px;
        margin-top: 10px;
    }

    .category-gallery-block .inner-block-wrapper .category-slider .prev:hover{
        background: #eccd00;
        border-color: #eccd00;
        color: #000000;
    }

    .category-gallery-block .inner-block-wrapper .category-slider .next:hover{
        background: #eccd00;
        border-color: #eccd00;
        color: #000000;
    }

</style>

@endpush

@section('content')

<!--=================================
        Hero Area
===================================== -->
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
                        <div class="single-slide bg-image bg-overlay--white"
                            data-bg="{{ asset('frontend_assets') }}/image/bg-images/home-4-slider-1.jpg">
                            <div class="text-left home-content pl--30">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <span class="title-small">Magazine Cover</span>
                                        <h1>Mockup.</h1>
                                        <p>Cover up front of book and
                                            <br>leave summary
                                        </p>
                                        <a href="shop-grid.html" class="btn btn-outlined--pink">
                                            Shop Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide bg-image bg-overlay--dark"
                            data-bg="{{ asset('frontend_assets') }}/image/bg-images/home-4-slider-2.jpg">
                            <div class="text-center home-content">
                                <div class="row justify-content-end">
                                    <div class="col-lg-8">
                                        <h1 class="v2">I Love This Idea!</h1>
                                        <h2>Cover up front of book and
                                            leave summary</h2>
                                        <a href="shop-grid.html" class="btn btn--yellow">
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
    </section>
<!--=================================
        Home Features Section
===================================== -->
    <section class="mt-3 mb--30">
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
        Home Category Gallery
===================================== -->
    <section class="section-margin category-wrapper">
        <h2 class="sr-only">Category Gallery Section</h2>
        {{-- <p>412px 397x203px
            ins 370x189px
        </p> --}}
        <div class="container">
            <div class="category-gallery-block">
                <div class="single-block inner-block-wrapper">
                    <div class="category-slider category-slick-slider">
                        @forelse ($categories as $category)
                            <div class="category-single-slide">
                                <div class="category-item">
                                    <div class="img bg-overlay--dark">
                                        <img src="{{ asset('uploads/category_photoes') }}/{{ $category->category_photo }}" alt="">
                                    </div>
                                    <div class="overlay">
                                        <h4 class="home-sidebar-title">{{ $category->category_name }}</h4>
                                        <a href="shop-grid.html" class="cat-btn btn--yellow">
                                            Shop Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @empty

                        @endforelse
                        {{-- <div class="category-single-slide">
                            <div class="category-item">
                                <div class="img bg-overlay--dark">
                                    <img src="{{ asset('frontend_assets') }}/image/others/blog-img-big-2.jpg" alt="">
                                </div>
                                <div class="overlay">
                                    <h4 class="home-sidebar-title">Children's Books</h4>
                                    <a href="shop-grid.html" class="cat-btn btn--yellow">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="category-single-slide">
                            <div class="category-item">
                                <div class="img bg-overlay--dark">
                                    <img src="{{ asset('frontend_assets') }}/image/others/blog-img-big-1.jpg" alt="">
                                </div>
                                <div class="overlay">
                                    <h4 class="home-sidebar-title">Children's Books</h4>
                                    <a href="shop-grid.html" class="cat-btn btn--yellow">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="category-single-slide">
                            <div class="category-item">
                                <div class="img bg-overlay--dark">
                                    <img src="{{ asset('frontend_assets') }}/image/others/blog-img-big-2.jpg" alt="">
                                </div>
                                <div class="overlay">
                                    <h4 class="home-sidebar-title">Children's Books</h4>
                                    <a href="shop-grid.html" class="cat-btn btn--yellow">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--=================================
        Home Two Column Section
===================================== -->
    <section class="section-margin">
        <h1 class="sr-only">Promotion Section</h1>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="text-center home-left-side text-lg-left">
                        <div class="single-block">
                            <h3 class="home-sidebar-title">
                                BEST SELLERS
                            </h3>
                            <div class="product-slider product-list-slider multiple-row sb-slick-slider home-4-left-sidebar"
                                data-slick-setting='{
                                                "autoplay": true,
                                                "autoplaySpeed": 8000,
                                                "slidesToShow":1,
                                                "rows":4,
                                                "dots":true
                                            }' data-slick-responsive='[
                                                {"breakpoint":1200, "settings": {"slidesToShow": 1} },
                                                {"breakpoint":992, "settings": {"slidesToShow": 2, "rows":2} },
                                                {"breakpoint":768, "settings": {"slidesToShow": 2, "rows":2} },
                                                {"breakpoint":575, "settings": {"slidesToShow": 1} },
                                                {"breakpoint":490, "settings": {"slidesToShow": 1} }
                                            ]'>
                                <div class="single-slide">
                                    <div class="product-card card-style-list">
                                        <div class="card-image">
                                            <img src="{{ asset('frontend_assets') }}/image/products/product-1.jpg" alt="">
                                        </div>
                                        <div class="product-card--body">
                                            <div class="product-header">
                                                <a href="#" class="author">
                                                    Fpple
                                                </a>
                                                <h3><a href="product-details.html">Get Through To Your
                                                        BOOK</a></h3>
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
                                    <div class="product-card card-style-list">
                                        <div class="card-image">
                                            <img src="{{ asset('frontend_assets') }}/image/products/product-2.jpg" alt="">
                                        </div>
                                        <div class="product-card--body">
                                            <div class="product-header">
                                                <a href="#" class="author">
                                                    Gpple
                                                </a>
                                                <h3><a href="product-details.html">What Can You Do To Save Your
                                                        BOOK</a></h3>
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
                                    <div class="product-card card-style-list">
                                        <div class="card-image">
                                            <img src="{{ asset('frontend_assets') }}/image/products/product-3.jpg" alt="">
                                        </div>
                                        <div class="product-card--body">
                                            <div class="product-header">
                                                <a class="author">
                                                    Hpple
                                                </a>
                                                <h3><a href="product-details.html">From Destruction By Social
                                                        Media?</a></h3>
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
                                    <div class="product-card card-style-list">
                                        <div class="card-image">
                                            <img src="{{ asset('frontend_assets') }}/image/products/product-4.jpg" alt="">
                                        </div>
                                        <div class="product-card--body">
                                            <div class="product-header">
                                                <a href="#" class="author">
                                                    Gpple
                                                </a>
                                                <h3><a href="product-details.html">Find Out More About BOOK ?</a>
                                                </h3>
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
                                    <div class="product-card card-style-list">
                                        <div class="card-image">
                                            <img src="{{ asset('frontend_assets') }}/image/products/product-5.jpg" alt="">
                                        </div>
                                        <div class="product-card--body">
                                            <div class="product-header">
                                                <a href="#" class="author">
                                                    Dpple
                                                </a>
                                                <h3><a href="product-details.html">Controversial BOOK
                                                        Social Media?</a></h3>
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
                                    <div class="product-card card-style-list">
                                        <div class="card-image">
                                            <img src="{{ asset('frontend_assets') }}/image/products/product-6.jpg" alt="">
                                        </div>
                                        <div class="product-card--body">
                                            <div class="product-header">
                                                <a href="#" class="author">
                                                    Cpple
                                                </a>
                                                <h3><a href="product-details.html">Lightweight
                                                        Portable Headphone</a></h3>
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
                                    <div class="product-card card-style-list">
                                        <div class="card-image">
                                            <img src="{{ asset('frontend_assets') }}/image/products/product-7.jpg" alt="">
                                        </div>
                                        <div class="product-card--body">
                                            <div class="product-header">
                                                <a href="#" class="author">
                                                    Apple
                                                </a>
                                                <h3><a href="product-details.html">Ways To Have More
                                                        BOOK</a></h3>
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
                                    <div class="product-card card-style-list">
                                        <div class="card-image">
                                            <img src="{{ asset('frontend_assets') }}/image/products/product-8.jpg" alt="">
                                        </div>
                                        <div class="product-card--body">
                                            <div class="product-header">
                                                <a href="#" class="author">
                                                    Xpple
                                                </a>
                                                <h3><a href="product-details.html">Ways To Have More
                                                        BOOK</a></h3>
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
                                    <div class="product-card card-style-list">
                                        <div class="card-image">
                                            <img src="{{ asset('frontend_assets') }}/image/products/product-9.jpg" alt="">
                                        </div>
                                        <div class="product-card--body">
                                            <div class="product-header">
                                                <a href="#" class="author">
                                                    Tpple
                                                </a>
                                                <h3><a href="product-details.html">10 Minutes, I'll Give You
                                                        The Truth</a></h3>
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
                                    <div class="product-card card-style-list">
                                        <div class="card-image">
                                            <img src="{{ asset('frontend_assets') }}/image/products/product-10.jpg" alt="">
                                        </div>
                                        <div class="product-card--body">
                                            <div class="product-header">
                                                <a href="#" class="author">
                                                    Fpple
                                                </a>
                                                <h3><a href="product-details.html">What Can You Do To Save Your
                                                        BOOK</a></h3>
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
                                    <div class="product-card card-style-list">
                                        <div class="card-image">
                                            <img src="{{ asset('frontend_assets') }}/image/products/product-9.jpg" alt="">
                                        </div>
                                        <div class="product-card--body">
                                            <div class="product-header">
                                                <a href="#" class="author">
                                                    Tpple
                                                </a>
                                                <h3><a href="product-details.html">10 Minutes, I'll Give You
                                                        The Truth</a></h3>
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
                                    <div class="product-card card-style-list">
                                        <div class="card-image">
                                            <img src="{{ asset('frontend_assets') }}/image/products/product-10.jpg" alt="">
                                        </div>
                                        <div class="product-card--body">
                                            <div class="product-header">
                                                <a href="#" class="author">
                                                    Fpple
                                                </a>
                                                <h3><a href="product-details.html">What Can You Do To Save Your
                                                        BOOK</a></h3>
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
                        <div class="text-center single-block">
                            <a href="#" class="promo-image home-sidebar-promo promo-overlay">
                                <img src="{{ asset('frontend_assets') }}/image/others/home-side-promo.jpg" alt="">
                            </a>
                        </div>
                        <div class="text-center single-block">
                            <h3 class="home-sidebar-title style-2">
                                Special offer
                            </h3>
                            <div class="product-slider countdown-single with-countdown sb-slick-slider product-border-reset"
                                data-slick-setting='{
                                                    "autoplay": true,
                                                    "autoplaySpeed": 8000,
                                                    "slidesToShow": 1,
                                                    "dots":true
                                                }' data-slick-responsive='[
                                                {"breakpoint":1200, "settings": {"slidesToShow": 1} },
                                                {"breakpoint":992, "settings": {"slidesToShow": 2} },
                                                {"breakpoint":768, "settings": {"slidesToShow": 2} },
                                                {"breakpoint":575, "settings": {"slidesToShow": 1} },
                                                {"breakpoint":490, "settings": {"slidesToShow": 1} }
                                            ]'>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Ypple
                                            </a>
                                            <h3><a href="product-details.html">BOOK: Do You Really Need It? This
                                                    Will Help You</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="{{ asset('frontend_assets') }}/image/products/product-2.jpg"
                                                    alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="{{ asset('frontend_assets') }}/image/products/product-1.jpg"
                                                            alt="">
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
                                            <div class="count-down-block">
                                                <div class="product-countdown" data-countdown="01/05/2020"></div>
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
                                            <h3><a href="product-details.html">Here Is A Quick Cure For BOOK
                                                    This Will Help</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="{{ asset('frontend_assets') }}/image/products/product-2.jpg"
                                                    alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="{{ asset('frontend_assets') }}/image/products/product-1.jpg"
                                                            alt="">
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
                                            <div class="count-down-block">
                                                <div class="product-countdown" data-countdown="01/05/2020"></div>
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
                                            <h3><a href="product-details.html">Simple Things
                                                    You Can Do Save BOOK save money</a>
                                            </h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="{{ asset('frontend_assets') }}/image/products/product-3.jpg"
                                                    alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="{{ asset('frontend_assets') }}/image/products/product-2.jpg"
                                                            alt="">
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
                                            <div class="count-down-block">
                                                <div class="product-countdown" data-countdown="01/05/2020"></div>
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
                                            <h3><a href="product-details.html">What You Can Learn From Bill
                                                    Gates reading a book</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="{{ asset('frontend_assets') }}/image/products/product-5.jpg"
                                                    alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="{{ asset('frontend_assets') }}/image/products/product-4.jpg"
                                                            alt="">
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
                                            <div class="count-down-block">
                                                <div class="product-countdown" data-countdown="01/05/2020"></div>
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
                                            <h3><a href="product-details.html">3 Ways Create Better BOOK With
                                                    The Help Of Your Dog</a>
                                            </h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="{{ asset('frontend_assets') }}/image/products/product-6.jpg"
                                                    alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="{{ asset('frontend_assets') }}/image/products/product-4.jpg"
                                                            alt="">
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
                                            <div class="count-down-block">
                                                <div class="product-countdown" data-countdown="01/05/2020"></div>
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
                                            <h3><a href="product-details.html">Turn Your BOOK Into A High
                                                    Performing Machine</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="{{ asset('frontend_assets') }}/image/products/product-8.jpg"
                                                    alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="{{ asset('frontend_assets') }}/image/products/product-7.jpg"
                                                            alt="">
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
                                            <div class="count-down-block">
                                                <div class="product-countdown" data-countdown="01/05/2020"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-block">
                            <h3 class="home-sidebar-title">
                                CLIENT TESTIMONIALS
                            </h3>
                            <div class="sb-slick-slider testimonial-slider slider-one-column" data-slick-setting='{
                    "autoplay": true,
                    "autoplaySpeed": 8000,
                    "slidesToShow":1,
                    "dots":true
                }' data-slick-responsive='[
                    {"breakpoint":1200, "settings": {"slidesToShow": 1} },
                    {"breakpoint":992, "settings": {"slidesToShow": 2} },
                    {"breakpoint":768, "settings": {"slidesToShow": 2} },
                    {"breakpoint":575, "settings": {"slidesToShow": 1} },
                    {"breakpoint":490, "settings": {"slidesToShow": 1} }
                ]'>
                                <div class="single-slide">
                                    <div class="testimonial-card">
                                        <div class="testimonial-image">
                                            <img src="{{ asset('frontend_assets') }}/image/others/client-1.png" alt="">
                                        </div>
                                        <div class="testimonial-body">
                                            <article>
                                                <h2 class="sr-only">Testimonial Article</h2>
                                                <p>version This is Photoshops of Lorem Ipsum. Proin gravida nibh vel
                                                    velit.Lorem ipsum dolor
                                                    sit amet, consectetur
                                                    adipiscing elit. In molestie augue magna. Pell..</p>
                                                <span class="d-block client-name">Rebecka Filson</span>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="testimonial-card">
                                        <div class="testimonial-image">
                                            <img src="{{ asset('frontend_assets') }}/image/others/client-2.png" alt="">
                                        </div>
                                        <div class="testimonial-body">
                                            <article>
                                                <h2 class="sr-only">Testimonial Article</h2>
                                                <p>In molestie augue magna.This is Photoshops version of Lorem
                                                    Ipsum. Proin gravida nibh vel
                                                    velit.Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Pell..</p>
                                                <span class="d-block client-name">Rebecka Filson</span>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="testimonial-card">
                                        <div class="testimonial-image">
                                            <img src="{{ asset('frontend_assets') }}/image/others/client-3.png" alt="">
                                        </div>
                                        <div class="testimonial-body">
                                            <article>
                                                <h2 class="sr-only">Testimonial Article</h2>
                                                <p>Lorem Ipsum This is Photoshops version of . Proin gravida nibh
                                                    vel velit.Lorem ipsum
                                                    dolor sit amet, consectetur
                                                    adipiscing elit. In molestie augue magna. Pell..</p>
                                                <span class="d-block client-name">Rebecka Filson</span>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="testimonial-card">
                                        <div class="testimonial-image">
                                            <img src="{{ asset('frontend_assets') }}/image/others/client-4.png" alt="">
                                        </div>
                                        <div class="testimonial-body">
                                            <article>
                                                <h2 class="sr-only">Testimonial Article</h2>
                                                <p>elit. In molestie This is Photoshops version of Lorem Ipsum.
                                                    Proin gravida nibh vel
                                                    velit.Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing augue magna. Pell..</p>
                                                <span class="d-block client-name">Rebecka Filson</span>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="testimonial-card">
                                        <div class="testimonial-image">
                                            <img src="{{ asset('frontend_assets') }}/image/others/client-5.png" alt="">
                                        </div>
                                        <div class="testimonial-body">
                                            <article>
                                                <h2 class="sr-only">Testimonial Article</h2>
                                                <p>Pell Photoshops version of Lorem Ipsum. Proin gravida nibh vel
                                                    velit.Lorem ipsum dolor
                                                    sit amet, consectetur
                                                    adipiscing elit. In molestie augue magna. This is..</p>
                                                <span class="d-block client-name">Rebecka Filson</span>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="home-right-side">
                        <div class="single-block">
                            <div class="text-center sb-custom-tab text-lg-left">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="shop-tab" data-bs-toggle="tab" href="#shop"
                                            role="tab" aria-controls="shop" aria-selected="true">
                                            Featured Products
                                        </a>
                                        <span class="arrow-icon"></span>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="men-tab" data-bs-toggle="tab" href="#men" role="tab"
                                            aria-controls="men" aria-selected="true">
                                            New Arrivals
                                        </a>
                                        <span class="arrow-icon"></span>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="woman-tab" data-bs-toggle="tab" href="#woman" role="tab"
                                            aria-controls="woman" aria-selected="false">
                                            Most view products
                                        </a>
                                        <span class="arrow-icon"></span>
                                    </li>
                                </ul>
                                <div class="tab-content space-db--30" id="myTabContent">
                                    <div class="tab-pane show active" id="shop" role="tabpanel" aria-labelledby="shop-tab">
                                        <div class="product-slider multiple-row slider-border-multiple-row sb-slick-slider"
                                            data-slick-setting='{
                                                        "autoplay": true,
                                                        "autoplaySpeed": 8000,
                                                        "slidesToShow": 3,
                                                        "rows":2,
                                                        "dots":true
                                                    }' data-slick-responsive='[
                                                        {"breakpoint":992, "settings": {"slidesToShow": 3} },
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
                                                        <h3><a href="product-details.html">Rpple iPad with
                                                                Retina Display</a></h3>
                                                    </div>
                                                    <div class="product-card--body">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-1.jpg"
                                                                alt="">
                                                            <div class="hover-contents">
                                                                <a href="product-details.html" class="hover-image">
                                                                    <img src="{{ asset('frontend_assets') }}/image/products/product-1.jpg"
                                                                        alt="">
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
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#quickModal" class="single-btn">
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
                                                        <h3><a href="product-details.html">Koss Lightweight
                                                                Headphone</a></h3>
                                                    </div>
                                                    <div class="product-card--body">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-2.jpg"
                                                                alt="">
                                                            <div class="hover-contents">
                                                                <a href="product-details.html" class="hover-image">
                                                                    <img src="{{ asset('frontend_assets') }}/image/products/product-3.jpg"
                                                                        alt="">
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
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#quickModal" class="single-btn">
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
                                                        <h3><a href="product-details.html">Beats Wired On-Ear
                                                                Headphone-Black</a></h3>
                                                    </div>
                                                    <div class="product-card--body">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-3.jpg"
                                                                alt="">
                                                            <div class="hover-contents">
                                                                <a href="product-details.html" class="hover-image">
                                                                    <img src="{{ asset('frontend_assets') }}/image/products/product-2.jpg"
                                                                        alt="">
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
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#quickModal" class="single-btn">
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
                                                        <h3><a href="product-details.html">Beats Solo2 Solo 2
                                                                Wired On-Ear</a></h3>
                                                    </div>
                                                    <div class="product-card--body">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-4.jpg"
                                                                alt="">
                                                            <div class="hover-contents">
                                                                <a href="product-details.html" class="hover-image">
                                                                    <img src="{{ asset('frontend_assets') }}/image/products/product-5.jpg"
                                                                        alt="">
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
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#quickModal" class="single-btn">
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
                                                        <h3><a href="product-details.html">Beats Solo3 Wireless
                                                                Headphones 2</a></h3>
                                                    </div>
                                                    <div class="product-card--body">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-5.jpg"
                                                                alt="">
                                                            <div class="hover-contents">
                                                                <a href="product-details.html" class="hover-image">
                                                                    <img src="{{ asset('frontend_assets') }}/image/products/product-4.jpg"
                                                                        alt="">
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
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#quickModal" class="single-btn">
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
                                                        <h3><a href="product-details.html">Ways To Have
                                                                Appealing BOOK</a></h3>
                                                    </div>
                                                    <div class="product-card--body">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-6.jpg"
                                                                alt="">
                                                            <div class="hover-contents">
                                                                <a href="product-details.html" class="hover-image">
                                                                    <img src="{{ asset('frontend_assets') }}/image/products/product-7.jpg"
                                                                        alt="">
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
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#quickModal" class="single-btn">
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
                                                        <h3><a href="product-details.html">10 Minutes, I'll
                                                                Give You Truth About</a></h3>
                                                    </div>
                                                    <div class="product-card--body">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-7.jpg"
                                                                alt="">
                                                            <div class="hover-contents">
                                                                <a href="product-details.html" class="hover-image">
                                                                    <img src="{{ asset('frontend_assets') }}/image/products/product-6.jpg"
                                                                        alt="">
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
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#quickModal" class="single-btn">
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
                                                        <h3><a href="product-details.html">Ways To Get Through
                                                                BOOK</a></h3>
                                                    </div>
                                                    <div class="product-card--body">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-8.jpg"
                                                                alt="">
                                                            <div class="hover-contents">
                                                                <a href="product-details.html" class="hover-image">
                                                                    <img src="{{ asset('frontend_assets') }}/image/products/product-9.jpg"
                                                                        alt="">
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
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#quickModal" class="single-btn">
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
                                                        <h3><a href="product-details.html">What Can You Do To
                                                                Save Your BOOK</a></h3>
                                                    </div>
                                                    <div class="product-card--body">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-9.jpg"
                                                                alt="">
                                                            <div class="hover-contents">
                                                                <a href="product-details.html" class="hover-image">
                                                                    <img src="{{ asset('frontend_assets') }}/image/products/product-8.jpg"
                                                                        alt="">
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
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#quickModal" class="single-btn">
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
                                                        <h3><a href="product-details.html">From Destruction By
                                                                Social Media?</a></h3>
                                                    </div>
                                                    <div class="product-card--body">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-10.jpg"
                                                                alt="">
                                                            <div class="hover-contents">
                                                                <a href="product-details.html" class="hover-image">
                                                                    <img src="{{ asset('frontend_assets') }}/image/products/product-11.jpg"
                                                                        alt="">
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
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#quickModal" class="single-btn">
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
                                                        <h3><a href="product-details.html">Find Out More About
                                                                BOOK ?</a></h3>
                                                    </div>
                                                    <div class="product-card--body">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-11.jpg"
                                                                alt="">
                                                            <div class="hover-contents">
                                                                <a href="product-details.html" class="hover-image">
                                                                    <img src="{{ asset('frontend_assets') }}/image/products/product-10.jpg"
                                                                        alt="">
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
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#quickModal" class="single-btn">
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
                                                            Vpple
                                                        </a>
                                                        <h3><a href="product-details.html">Read This
                                                                Contro versial BOOK?</a>
                                                        </h3>
                                                    </div>
                                                    <div class="product-card--body">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-12.jpg"
                                                                alt="">
                                                            <div class="hover-contents">
                                                                <a href="product-details.html" class="hover-image">
                                                                    <img src="{{ asset('frontend_assets') }}/image/products/product-11.jpg"
                                                                        alt="">
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
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#quickModal" class="single-btn">
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
                                    <div class="tab-pane" id="men" role="tabpanel" aria-labelledby="men-tab">
                                        <div class="product-slider multiple-row slider-border-multiple-row sb-slick-slider"
                                            data-slick-setting='{
                                        "autoplay": true,
                                        "autoplaySpeed": 8000,
                                        "slidesToShow": 3,
                                        "rows":2,
                                        "dots":true
                                        }' data-slick-responsive='[
                                {"breakpoint":992, "settings": {"slidesToShow": 3} },
                                {"breakpoint":768, "settings": {"slidesToShow": 2} },
                                {"breakpoint":480, "settings": {"slidesToShow": 1} },
                                {"breakpoint":320, "settings": {"slidesToShow": 1} }
                            ]'>
                                            <div class="single-slide">
                                                <div class="product-card">
                                                    <div class="product-header">
                                                        <a href="#" class="author">
                                                            Apple
                                                        </a>
                                                        <h3><a href="product-details.html">iPad with
                                                                Retina Display</a></h3>
                                                    </div>
                                                    <div class="product-card--body">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-10.jpg"
                                                                alt="">
                                                            <div class="hover-contents">
                                                                <a href="product-details.html" class="hover-image">
                                                                    <img src="{{ asset('frontend_assets') }}/image/products/product-9.jpg"
                                                                        alt="">
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
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#quickModal" class="single-btn">
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
                                                        <h3><a href="product-details.html">iPad with
                                                                Retina Display</a></h3>
                                                    </div>
                                                    <div class="product-card--body">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-9.jpg"
                                                                alt="">
                                                            <div class="hover-contents">
                                                                <a href="product-details.html" class="hover-image">
                                                                    <img src="{{ asset('frontend_assets') }}/image/products/product-10.jpg"
                                                                        alt="">
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
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#quickModal" class="single-btn">
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
                                                        <h3><a href="product-details.html">iPad with
                                                                Retina Display</a></h3>
                                                    </div>
                                                    <div class="product-card--body">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-8.jpg"
                                                                alt="">
                                                            <div class="hover-contents">
                                                                <a href="product-details.html" class="hover-image">
                                                                    <img src="{{ asset('frontend_assets') }}/image/products/product-9.jpg"
                                                                        alt="">
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
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#quickModal" class="single-btn">
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
                                                        <h3><a href="product-details.html">iPad with
                                                                Retina Display</a></h3>
                                                    </div>
                                                    <div class="product-card--body">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-7.jpg"
                                                                alt="">
                                                            <div class="hover-contents">
                                                                <a href="product-details.html" class="hover-image">
                                                                    <img src="{{ asset('frontend_assets') }}/image/products/product-8.jpg"
                                                                        alt="">
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
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#quickModal" class="single-btn">
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
                                                        <h3><a href="product-details.html">iPad with
                                                                Retina Display</a></h3>
                                                    </div>
                                                    <div class="product-card--body">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-6.jpg"
                                                                alt="">
                                                            <div class="hover-contents">
                                                                <a href="product-details.html" class="hover-image">
                                                                    <img src="{{ asset('frontend_assets') }}/image/products/product-7.jpg"
                                                                        alt="">
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
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#quickModal" class="single-btn">
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
                                                        <h3><a href="product-details.html">iPad with
                                                                Retina Display</a></h3>
                                                    </div>
                                                    <div class="product-card--body">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-5.jpg"
                                                                alt="">
                                                            <div class="hover-contents">
                                                                <a href="product-details.html" class="hover-image">
                                                                    <img src="{{ asset('frontend_assets') }}/image/products/product-6.jpg"
                                                                        alt="">
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
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#quickModal" class="single-btn">
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
                                                        <h3><a href="product-details.html">iPad with
                                                                Retina Display</a></h3>
                                                    </div>
                                                    <div class="product-card--body">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-11.jpg"
                                                                alt="">
                                                            <div class="hover-contents">
                                                                <a href="product-details.html" class="hover-image">
                                                                    <img src="{{ asset('frontend_assets') }}/image/products/product-8.jpg"
                                                                        alt="">
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
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#quickModal" class="single-btn">
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
                                                        <h3><a href="product-details.html">iPad with
                                                                Retina Display</a></h3>
                                                    </div>
                                                    <div class="product-card--body">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-12.jpg"
                                                                alt="">
                                                            <div class="hover-contents">
                                                                <a href="product-details.html" class="hover-image">
                                                                    <img src="{{ asset('frontend_assets') }}/image/products/product-4.jpg"
                                                                        alt="">
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
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#quickModal" class="single-btn">
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
                                                        <h3><a href="product-details.html">iPad with
                                                                Retina Display</a></h3>
                                                    </div>
                                                    <div class="product-card--body">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-9.jpg"
                                                                alt="">
                                                            <div class="hover-contents">
                                                                <a href="product-details.html" class="hover-image">
                                                                    <img src="{{ asset('frontend_assets') }}/image/products/product-8.jpg"
                                                                        alt="">
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
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#quickModal" class="single-btn">
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
                                                        <h3><a href="product-details.html">iPad with
                                                                Retina Display</a></h3>
                                                    </div>
                                                    <div class="product-card--body">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-6.jpg"
                                                                alt="">
                                                            <div class="hover-contents">
                                                                <a href="product-details.html" class="hover-image">
                                                                    <img src="{{ asset('frontend_assets') }}/image/products/product-5.jpg"
                                                                        alt="">
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
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#quickModal" class="single-btn">
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
                                                        <h3><a href="product-details.html">iPad with
                                                                Retina Display</a></h3>
                                                    </div>
                                                    <div class="product-card--body">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-3.jpg"
                                                                alt="">
                                                            <div class="hover-contents">
                                                                <a href="product-details.html" class="hover-image">
                                                                    <img src="{{ asset('frontend_assets') }}/image/products/product-4.jpg"
                                                                        alt="">
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
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#quickModal" class="single-btn">
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
                                                        <h3><a href="product-details.html">iPad with
                                                                Retina Display</a></h3>
                                                    </div>
                                                    <div class="product-card--body">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-8.jpg"
                                                                alt="">
                                                            <div class="hover-contents">
                                                                <a href="product-details.html" class="hover-image">
                                                                    <img src="{{ asset('frontend_assets') }}/image/products/product-5.jpg"
                                                                        alt="">
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
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#quickModal" class="single-btn">
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
                                        "slidesToShow": 3,
                                        "rows":2,
                                        "dots":true
                                    }' data-slick-responsive='[
                                            {"breakpoint":992, "settings": {"slidesToShow": 3} },
                                            {"breakpoint":768, "settings": {"slidesToShow": 2} },
                                            {"breakpoint":480, "settings": {"slidesToShow": 1} },
                                            {"breakpoint":320, "settings": {"slidesToShow": 1} }
                                        ]'>
                                            <div class="single-slide">
                                                <div class="product-card">
                                                    <div class="product-header">
                                                        <a href="#" class="author">
                                                            Apple
                                                        </a>
                                                        <h3><a href="product-details.html">iPad with
                                                                Retina Display</a></h3>
                                                    </div>
                                                    <div class="product-card--body">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-1.jpg"
                                                                alt="">
                                                            <div class="hover-contents">
                                                                <a href="product-details.html" class="hover-image">
                                                                    <img src="{{ asset('frontend_assets') }}/image/products/product-1.jpg"
                                                                        alt="">
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
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#quickModal" class="single-btn">
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
                                                        <h3><a href="product-details.html">iPad with
                                                                Retina Display</a></h3>
                                                    </div>
                                                    <div class="product-card--body">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-2.jpg"
                                                                alt="">
                                                            <div class="hover-contents">
                                                                <a href="product-details.html" class="hover-image">
                                                                    <img src="{{ asset('frontend_assets') }}/image/products/product-3.jpg"
                                                                        alt="">
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
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#quickModal" class="single-btn">
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
                                                        <h3><a href="product-details.html">iPad with
                                                                Retina Display</a></h3>
                                                    </div>
                                                    <div class="product-card--body">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-3.jpg"
                                                                alt="">
                                                            <div class="hover-contents">
                                                                <a href="product-details.html" class="hover-image">
                                                                    <img src="{{ asset('frontend_assets') }}/image/products/product-2.jpg"
                                                                        alt="">
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
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#quickModal" class="single-btn">
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
                                                        <h3><a href="product-details.html">iPad with
                                                                Retina Display</a></h3>
                                                    </div>
                                                    <div class="product-card--body">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-4.jpg"
                                                                alt="">
                                                            <div class="hover-contents">
                                                                <a href="product-details.html" class="hover-image">
                                                                    <img src="{{ asset('frontend_assets') }}/image/products/product-5.jpg"
                                                                        alt="">
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
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#quickModal" class="single-btn">
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
                                                        <h3><a href="product-details.html">iPad with
                                                                Retina Display</a></h3>
                                                    </div>
                                                    <div class="product-card--body">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-5.jpg"
                                                                alt="">
                                                            <div class="hover-contents">
                                                                <a href="product-details.html" class="hover-image">
                                                                    <img src="{{ asset('frontend_assets') }}/image/products/product-4.jpg"
                                                                        alt="">
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
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#quickModal" class="single-btn">
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
                                                        <h3><a href="product-details.html">iPad with
                                                                Retina Display</a></h3>
                                                    </div>
                                                    <div class="product-card--body">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-6.jpg"
                                                                alt="">
                                                            <div class="hover-contents">
                                                                <a href="product-details.html" class="hover-image">
                                                                    <img src="{{ asset('frontend_assets') }}/image/products/product-7.jpg"
                                                                        alt="">
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
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#quickModal" class="single-btn">
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
                                                        <h3><a href="product-details.html">iPad with
                                                                Retina Display</a></h3>
                                                    </div>
                                                    <div class="product-card--body">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-7.jpg"
                                                                alt="">
                                                            <div class="hover-contents">
                                                                <a href="product-details.html" class="hover-image">
                                                                    <img src="{{ asset('frontend_assets') }}/image/products/product-6.jpg"
                                                                        alt="">
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
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#quickModal" class="single-btn">
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
                                                        <h3><a href="product-details.html">iPad with
                                                                Retina Display</a></h3>
                                                    </div>
                                                    <div class="product-card--body">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-8.jpg"
                                                                alt="">
                                                            <div class="hover-contents">
                                                                <a href="product-details.html" class="hover-image">
                                                                    <img src="{{ asset('frontend_assets') }}/image/products/product-9.jpg"
                                                                        alt="">
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
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#quickModal" class="single-btn">
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
                                                        <h3><a href="product-details.html">iPad with
                                                                Retina Display</a></h3>
                                                    </div>
                                                    <div class="product-card--body">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-9.jpg"
                                                                alt="">
                                                            <div class="hover-contents">
                                                                <a href="product-details.html" class="hover-image">
                                                                    <img src="{{ asset('frontend_assets') }}/image/products/product-8.jpg"
                                                                        alt="">
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
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#quickModal" class="single-btn">
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
                                                        <h3><a href="product-details.html">iPad with
                                                                Retina Display</a></h3>
                                                    </div>
                                                    <div class="product-card--body">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-10.jpg"
                                                                alt="">
                                                            <div class="hover-contents">
                                                                <a href="product-details.html" class="hover-image">
                                                                    <img src="{{ asset('frontend_assets') }}/image/products/product-11.jpg"
                                                                        alt="">
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
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#quickModal" class="single-btn">
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
                                                        <h3><a href="product-details.html">iPad with
                                                                Retina Display</a></h3>
                                                    </div>
                                                    <div class="product-card--body">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-11.jpg"
                                                                alt="">
                                                            <div class="hover-contents">
                                                                <a href="product-details.html" class="hover-image">
                                                                    <img src="{{ asset('frontend_assets') }}/image/products/product-10.jpg"
                                                                        alt="">
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
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#quickModal" class="single-btn">
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
                                                        <h3><a href="product-details.html">iPad with
                                                                Retina Display</a></h3>
                                                    </div>
                                                    <div class="product-card--body">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-12.jpg"
                                                                alt="">
                                                            <div class="hover-contents">
                                                                <a href="product-details.html" class="hover-image">
                                                                    <img src="{{ asset('frontend_assets') }}/image/products/product-11.jpg"
                                                                        alt="">
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
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#quickModal" class="single-btn">
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
                        <div class="single-block">
                            <div class="row space-db--30">
                                <div class="col-lg-8 mb--30">
                                    <a href="#" class="promo-image promo-overlay">
                                        <img src="{{ asset('frontend_assets') }}/image/bg-images/promo-banner-with-text-big.jpg"
                                            alt="">
                                    </a>
                                </div>
                                <div class="col-lg-4 mb--30">
                                    <a href="#" class="promo-image promo-overlay">
                                        <img src="{{ asset('frontend_assets') }}/image/bg-images/promo-banner-with-text-2--small.jpg"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="single-block">
                            <div class="bg-white home-right-block">
                                <div class="text-center sb-custom-tab text-lg-left">
                                    <ul class="nav nav-tabs nav-style-2" id="myTab2" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="shop-tab2" data-bs-toggle="tab" href="#shop2"
                                                role="tab" aria-controls="shop2" aria-selected="true">
                                                ARTS & PHOTOGRAPHY
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="men-tab2" data-bs-toggle="tab" href="#men2" role="tab"
                                                aria-controls="men2" aria-selected="true">
                                                CHILDREN'S BOOKS
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="woman-tab2" data-bs-toggle="tab" href="#woman2"
                                                role="tab" aria-controls="woman2" aria-selected="false">
                                                BIOGRAPHIES
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent2">
                                        <div class="tab-pane show active" id="shop2" role="tabpanel"
                                            aria-labelledby="shop-tab2">
                                            <div class="product-slider product-list-slider multiple-row slider-border-multiple-row sb-slick-slider"
                                                data-slick-setting='{
                                                            "autoplay": true,
                                                            "autoplaySpeed": 8000,
                                                            "slidesToShow": 2,
                                                            "rows":4,
                                                            "dots":true
                                                        }' data-slick-responsive='[
                                                            {"breakpoint":992, "settings": {"slidesToShow": 2,"rows": 3} },

                                                            {"breakpoint":768, "settings": {"slidesToShow": 1} }
                                                        ]'>
                                                <div class="single-slide">
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-1.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Fpple
                                                                </a>
                                                                <h3><a href="product-details.html">5 Ways To Get
                                                                        Through To Your BOOK</a></h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-2.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Gpple
                                                                </a>
                                                                <h3><a href="product-details.html">What Can You Do
                                                                        To Save Your BOOK</a></h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-3.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Hpple
                                                                </a>
                                                                <h3><a href="product-details.html">From Destruction
                                                                        By Social Media?</a></h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-4.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Gpple
                                                                </a>
                                                                <h3><a href="product-details.html">Find Out More
                                                                        About BOOK ?</a></h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-5.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Dpple
                                                                </a>
                                                                <h3><a href="product-details.html">
                                                                        Controversial BOOK By Social Media?</a>
                                                                </h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-6.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Cpple
                                                                </a>
                                                                <h3><a href="product-details.html">Koss
                                                                        Lightweight Portable Headphone</a></h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-7.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Apple
                                                                </a>
                                                                <h3><a href="product-details.html">Ways To Have
                                                                        Appealing BOOK</a></h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-8.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Xpple
                                                                </a>
                                                                <h3><a href="product-details.html">Ways To Have
                                                                        Appealing BOOK</a></h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-9.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Tpple
                                                                </a>
                                                                <h3><a href="product-details.html">In 10 Minutes,
                                                                        I'll Give Truth About</a>
                                                                </h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-10.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Fpple
                                                                </a>
                                                                <h3><a href="product-details.html">What Can You Do
                                                                        To Save Your BOOK</a></h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-11.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Fpple
                                                                </a>
                                                                <h3><a href="product-details.html">From Destruction
                                                                        By Social Media?</a></h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-12.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Spple
                                                                </a>
                                                                <h3><a href="product-details.html">Lorem ipsum dolor
                                                                        sit amet reasons</a></h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-13.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Kpple
                                                                </a>
                                                                <h3><a href="product-details.html">Find Out More
                                                                        About BOOK ?</a></h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-1.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Apple
                                                                </a>
                                                                <h3><a href="product-details.html">
                                                                        Controversial BOOK By Social Media?</a>
                                                                </h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-2.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Apple
                                                                </a>
                                                                <h3><a href="product-details.html">iPad with
                                                                        Retina ready Display </a></h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-5.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Gpple
                                                                </a>
                                                                <h3><a href="product-details.html">Koss
                                                                        Lightweight Portable Headphone</a></h3>
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
                                        <div class="tab-pane" id="men2" role="tabpanel" aria-labelledby="men-tab2">
                                            <div class="product-slider product-list-slider multiple-row slider-border-multiple-row sb-slick-slider"
                                                data-slick-setting='{
                                                            "autoplay": true,
                                                            "autoplaySpeed": 8000,
                                                            "slidesToShow": 2,
                                                            "rows":4,
                                                            "dots":true
                                                        }' data-slick-responsive='[
                                                            {"breakpoint":992, "settings": {"slidesToShow": 2,"rows": 3} },

                                                            {"breakpoint":768, "settings": {"slidesToShow": 1} }
                                                        ]'>
                                                <div class="single-slide">
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-1.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Fpple
                                                                </a>
                                                                <h3><a href="product-details.html">5 Ways To Get
                                                                        Through To Your BOOK</a></h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-2.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Gpple
                                                                </a>
                                                                <h3><a href="product-details.html">What Can You Do
                                                                        To Save Your BOOK</a></h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-3.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Hpple
                                                                </a>
                                                                <h3><a href="product-details.html">From Destruction
                                                                        By Social Media?</a></h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-4.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Gpple
                                                                </a>
                                                                <h3><a href="product-details.html">Find Out More
                                                                        About BOOK ?</a></h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-5.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Dpple
                                                                </a>
                                                                <h3><a href="product-details.html">
                                                                        Controversial BOOK By Social Media?</a>
                                                                </h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-6.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Cpple
                                                                </a>
                                                                <h3><a href="product-details.html">Koss
                                                                        Lightweight Portable Headphone</a></h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-7.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Apple
                                                                </a>
                                                                <h3><a href="product-details.html">Ways To Have
                                                                        Appealing BOOK</a></h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-8.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Xpple
                                                                </a>
                                                                <h3><a href="product-details.html">Ways To Have
                                                                        Appealing BOOK</a></h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-9.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Tpple
                                                                </a>
                                                                <h3><a href="product-details.html">In 10 Minutes,
                                                                        I'll Give Truth About</a>
                                                                </h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-10.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Fpple
                                                                </a>
                                                                <h3><a href="product-details.html">What Can You Do
                                                                        To Save Your BOOK</a></h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-11.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Fpple
                                                                </a>
                                                                <h3><a href="product-details.html">From Destruction
                                                                        By Social Media?</a></h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-12.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Spple
                                                                </a>
                                                                <h3><a href="product-details.html">Find Out More
                                                                        About BOOK By Social Media?</a></h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-13.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Kpple
                                                                </a>
                                                                <h3><a href="product-details.html">Find Out More
                                                                        About BOOK ?</a></h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-1.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Apple
                                                                </a>
                                                                <h3><a href="product-details.html">
                                                                        Controversial BOOK By Social Media?</a>
                                                                </h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-2.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Apple
                                                                </a>
                                                                <h3><a href="product-details.html">iPad with
                                                                        Retina ready Display </a></h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-5.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Gpple
                                                                </a>
                                                                <h3><a href="product-details.html">Koss
                                                                        Lightweight Portable Headphone</a></h3>
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
                                        <div class="tab-pane" id="woman2" role="tabpanel" aria-labelledby="woman-tab2">
                                            <div class="product-slider product-list-slider multiple-row slider-border-multiple-row sb-slick-slider"
                                                data-slick-setting='{
                                                                "autoplay": true,
                                                                "autoplaySpeed": 8000,
                                                                "slidesToShow": 2,
                                                                "rows":4,
                                                                "dots":true
                                                            }' data-slick-responsive='[
                                                                {"breakpoint":992, "settings": {"slidesToShow": 2,"rows": 3} },

                                                                {"breakpoint":768, "settings": {"slidesToShow": 1} }
                                                            ]'>
                                                <div class="single-slide">
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-1.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Fpple
                                                                </a>
                                                                <h3><a href="product-details.html">5 Ways To Get
                                                                        Through To Your BOOK</a></h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-2.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Gpple
                                                                </a>
                                                                <h3><a href="product-details.html">What Can You Do
                                                                        To Save Your BOOK</a></h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-3.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Hpple
                                                                </a>
                                                                <h3><a href="product-details.html">From Destruction
                                                                        By Social Media?</a></h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-4.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Gpple
                                                                </a>
                                                                <h3><a href="product-details.html">Find Out More
                                                                        About BOOK ?</a></h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-5.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Dpple
                                                                </a>
                                                                <h3><a href="product-details.html">
                                                                        Controversial BOOK By Social Media?</a>
                                                                </h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-6.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Cpple
                                                                </a>
                                                                <h3><a href="product-details.html">Koss
                                                                        Lightweight Portable Headphone</a></h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-7.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Apple
                                                                </a>
                                                                <h3><a href="product-details.html">Ways To Have
                                                                        Appealing BOOK</a></h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-8.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Xpple
                                                                </a>
                                                                <h3><a href="product-details.html">Ways To Have
                                                                        Appealing BOOK</a></h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-9.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Tpple
                                                                </a>
                                                                <h3><a href="product-details.html">In 10 Minutes,
                                                                        I'll Give Truth About</a>
                                                                </h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-10.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Fpple
                                                                </a>
                                                                <h3><a href="product-details.html">What Can You Do
                                                                        To Save Your BOOK</a></h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-11.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Fpple
                                                                </a>
                                                                <h3><a href="product-details.html">From Destruction
                                                                        By Social Media?</a></h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-12.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Spple
                                                                </a>
                                                                <h3><a href="product-details.html">Find Out More
                                                                        About BOOK By Social Media?</a></h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-13.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Kpple
                                                                </a>
                                                                <h3><a href="product-details.html">Find Out More
                                                                        About BOOK ?</a></h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-1.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Apple
                                                                </a>
                                                                <h3><a href="product-details.html">
                                                                        Controversial BOOK By Social Media?</a>
                                                                </h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-2.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Apple
                                                                </a>
                                                                <h3><a href="product-details.html">iPad with
                                                                        Retina ready Display </a></h3>
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
                                                    <div class="product-card card-style-list">
                                                        <div class="card-image">
                                                            <img src="{{ asset('frontend_assets') }}/image/products/product-5.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="product-header">
                                                                <a href="#" class="author">
                                                                    Gpple
                                                                </a>
                                                                <h3><a href="product-details.html">Koss
                                                                        Lightweight Portable Headphone</a></h3>
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
                        </div>
                        <div class="single-block">
                            <div class="blog-slider sb-slick-slider slider-one-column" data-slick-setting='{
                            "autoplay": false,
                            "autoplaySpeed": 8000,
                            "slidesToShow": 1,
                            "dots": true
                        }'>
                                <div class="single-slide">
                                    <div class="blog-card">
                                        <div class="image">
                                            <img src="{{ asset('frontend_assets') }}/image/others/home-blog-1.jpg" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="content-header">
                                                <div class="date-badge">
                                                    <span class="date">
                                                        30
                                                    </span>
                                                    <span class="month">
                                                        OCT
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="blog-details.html">How to Water and Care
                                                        for Mounted</a></h3>
                                            </div>
                                            <p class="meta-para"><i class="fas fa-user-edit"></i>Post by <a
                                                    href="#">Hastech</a></p>
                                            <article class="blog-paragraph">
                                                <h2 class="sr-only">blog-paragraph</h2>
                                                <p>Virtual reality and 3-D technology are already well-established
                                                    in the entertainment...</p>
                                            </article>
                                            <a href="blog-details.html" class="card-link">Read More <i
                                                    class="fas fa-chevron-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="blog-card">
                                        <div class="image">
                                            <img src="{{ asset('frontend_assets') }}/image/others/home-blog-2.jpg" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="content-header">
                                                <div class="date-badge">
                                                    <span class="date">
                                                        30
                                                    </span>
                                                    <span class="month">
                                                        OCT
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="blog-details.html">How to Grow Epiphytic
                                                        Tropical Plants</a></h3>
                                            </div>
                                            <p class="meta-para"><i class="fas fa-user-edit"></i>Post by <a
                                                    href="#">Hastech</a></p>
                                            <article class="blog-paragraph">
                                                <h2 class="sr-only">blog-paragraph</h2>
                                                <p>Virtual reality and 3-D technology are already well-established
                                                    in the entertainment...</p>
                                            </article>
                                            <a href="blog-details.html" class="card-link">Read More <i
                                                    class="fas fa-chevron-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="blog-card">
                                        <div class="image">
                                            <img src="{{ asset('frontend_assets') }}/image/others/home-blog-1.jpg" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="content-header">
                                                <div class="date-badge">
                                                    <span class="date">
                                                        30
                                                    </span>
                                                    <span class="month">
                                                        OCT
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="blog-details.html">How To Pot Up and Care
                                                        For Juvenile</a></h3>
                                            </div>
                                            <p class="meta-para"><i class="fas fa-user-edit"></i>Post by <a
                                                    href="#">Hastech</a></p>
                                            <article class="blog-paragraph">
                                                <h2 class="sr-only">blog-paragraph</h2>
                                                <p>Virtual reality and 3-D technology are already well-established
                                                    in the entertainment...</p>
                                            </article>
                                            <a href="blog-details.html" class="card-link">Read More <i
                                                    class="fas fa-chevron-circle-right"></i></a>
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
<!-- Modal -->
    <div class="modal fade modal-quick-view" id="quickModal" tabindex="-1" role="dialog" aria-labelledby="quickModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="product-details-modal">
                    <div class="row">
                        <div class="col-lg-5">
                            <!-- Product Details Slider Big Image-->
                            <div class="product-details-slider sb-slick-slider arrow-type-two" data-slick-setting='{
                                        "slidesToShow": 1,
                                        "arrows": false,
                                        "fade": true,
                                        "draggable": false,
                                        "swipe": false,
                                        "asNavFor": ".product-slider-nav"
                                        }'>
                                <div class="single-slide">
                                    <img src="{{ asset('frontend_assets') }}/image/products/product-details-1.jpg" alt="">
                                </div>
                                <div class="single-slide">
                                    <img src="{{ asset('frontend_assets') }}/image/products/product-details-2.jpg" alt="">
                                </div>
                                <div class="single-slide">
                                    <img src="{{ asset('frontend_assets') }}/image/products/product-details-3.jpg" alt="">
                                </div>
                                <div class="single-slide">
                                    <img src="{{ asset('frontend_assets') }}/image/products/product-details-4.jpg" alt="">
                                </div>
                                <div class="single-slide">
                                    <img src="{{ asset('frontend_assets') }}/image/products/product-details-5.jpg" alt="">
                                </div>
                            </div>
                            <!-- Product Details Slider Nav -->
                            <div class="mt--30 product-slider-nav sb-slick-slider arrow-type-two" data-slick-setting='{
                "infinite":true,
                "autoplay": true,
                "autoplaySpeed": 8000,
                "slidesToShow": 4,
                "arrows": true,
                "prevArrow":{"buttonClass": "slick-prev","iconClass":"fa fa-chevron-left"},
                "nextArrow":{"buttonClass": "slick-next","iconClass":"fa fa-chevron-right"},
                "asNavFor": ".product-details-slider",
                "focusOnSelect": true
                }'>
                                <div class="single-slide">
                                    <img src="{{ asset('frontend_assets') }}/image/products/product-details-1.jpg" alt="">
                                </div>
                                <div class="single-slide">
                                    <img src="{{ asset('frontend_assets') }}/image/products/product-details-2.jpg" alt="">
                                </div>
                                <div class="single-slide">
                                    <img src="{{ asset('frontend_assets') }}/image/products/product-details-3.jpg" alt="">
                                </div>
                                <div class="single-slide">
                                    <img src="{{ asset('frontend_assets') }}/image/products/product-details-4.jpg" alt="">
                                </div>
                                <div class="single-slide">
                                    <img src="{{ asset('frontend_assets') }}/image/products/product-details-5.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 mt--30 mt-lg--30">
                            <div class="product-details-info pl-lg--30 ">
                                <p class="tag-block">Tags: <a href="#">Movado</a>, <a href="#">Omega</a></p>
                                <h3 class="product-title">Beats EP Wired On-Ear Headphone-Black</h3>
                                <ul class="list-unstyled">
                                    <li>Ex Tax: <span class="list-value"> £60.24</span></li>
                                    <li>Brands: <a href="#" class="list-value font-weight-bold"> Canon</a></li>
                                    <li>Product Code: <span class="list-value"> model1</span></li>
                                    <li>Reward Points: <span class="list-value"> 200</span></li>
                                    <li>Availability: <span class="list-value"> In Stock</span></li>
                                </ul>
                                <div class="price-block">
                                    <span class="price-new">£73.79</span>
                                    <del class="price-old">£91.86</del>
                                </div>
                                <div class="rating-widget">
                                    <div class="rating-block">
                                        <span class="fas fa-star star_on"></span>
                                        <span class="fas fa-star star_on"></span>
                                        <span class="fas fa-star star_on"></span>
                                        <span class="fas fa-star star_on"></span>
                                        <span class="fas fa-star "></span>
                                    </div>
                                    <div class="review-widget">
                                        <a href="#">(1 Reviews)</a> <span>|</span>
                                        <a href="#">Write a review</a>
                                    </div>
                                </div>
                                <article class="product-details-article">
                                    <h4 class="sr-only">Product Summery</h4>
                                    <p>Long printed dress with thin adjustable straps. V-neckline and wiring under
                                        the Dust with ruffles
                                        at the bottom
                                        of the
                                        dress.</p>
                                </article>
                                <div class="add-to-cart-row">
                                    <div class="count-input-block">
                                        <span class="widget-label">Qty</span>
                                        <input type="number" class="text-center form-control" value="1">
                                    </div>
                                    <div class="add-cart-btn">
                                        <a href="#" class="btn btn-outlined--primary"><span class="plus-icon">+</span>Add to
                                            Cart</a>
                                    </div>
                                </div>
                                <div class="compare-wishlist-row">
                                    <a href="#" class="add-link"><i class="fas fa-heart"></i>Add to Wish List</a>
                                    <a href="#" class="add-link"><i class="fas fa-random"></i>Add to Compare</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="widget-social-share">
                        <span class="widget-label">Share:</span>
                        <div class="modal-social-share">
                            <a href="#" class="single-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-youtube"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--=================================
        Footer
===================================== -->
    </div>
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

@endsection

@push('custom-js')

<script>
    $('.category-slider').slick({
    dots: false,
    infinite: true,
    autoplay: false,
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 1,
    prevArrow: '<i class="bi bi-arrow-left prev"></i>',
    nextArrow: '<i class="bi bi-arrow-right next"></i>',
    });
</script>

@endpush
