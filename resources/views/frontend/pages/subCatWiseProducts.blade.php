@extends('frontend.layouts.app_frontend')

@section('title')

Pustok - {{ $single_sub_cat->sub_category_name }}

@endsection

@push('custom-css')

<style>
    .bread-active{
        font-weight: 700;
    }

    .add-cart-btn .btn:hover {
        color: #fff !important;
        background: #62ab00 !important;
    }

    .custom-edit-cart-btn{
        margin-right: 30px;
    }
</style>

@endpush

@section('content')

<main class="inner-page-sec-padding-bottom">
    <div class="container">
        <section class="breadcrumb-section">
            <h2 class="sr-only">Site Breadcrumb</h2>
            <div class="container">
                <div class="breadcrumb-contents">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('frontend.shop') }}">Shop</a></li>
                            <li class="breadcrumb-item bread-active active">{{ $cat_info->category_name }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <div class="row">
            <div class="col-lg-9 order-lg-2">
                <div class="shop-toolbar with-sidebar mb--30">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-2 col-sm-6">
                            <!-- Product View Mode -->
                            <div class="product-view-mode">
                                <a href="#" class="sorting-btn active" data-target="grid"><i class="fas fa-th"></i></a>
                                <a href="#" class="sorting-btn" data-target="grid-four">
                                    <span class="grid-four-icon">
                                        <i class="fas fa-grip-vertical"></i><i class="fas fa-grip-vertical"></i>
                                    </span>
                                </a>
                                <a href="#" class="sorting-btn" data-target="list "><i class="fas fa-list"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6 mt--10 mt-sm--0">
                            <span class="toolbar-status">
                                {{ $sub_catwise_products->links('frontend.pages.paginateNumberOfPagesShowing') }}
                            </span>
                        </div>
                        {{-- <div class="col-lg-2 col-md-2 col-sm-6 mt--10 mt-md--0">
                            <div class="sorting-selection">
                                <span>Show:</span>
                                <select class="form-control nice-select sort-select">
                                    <option value="" selected="selected">3</option>
                                    <option value="">9</option>
                                    <option value="">5</option>
                                    <option value="">10</option>
                                    <option value="">12</option>
                                </select>
                            </div>
                        </div> --}}
                        <div class="col-lg-4 col-md-4 col-sm-6 mt--10 mt-md--0 ">
                            <div class="sorting-selection">
                                <span>Sort By:</span>
                                <select class="mr-0 form-control nice-select sort-select">
                                    <option value="" selected="selected">Default Sorting</option>
                                    <option value="">Sort
                                        By:Name (A - Z)</option>
                                    <option value="">Sort
                                        By:Name (Z - A)</option>
                                    <option value="">Sort
                                        By:Price (Low &gt; High)</option>
                                    <option value="">Sort
                                        By:Price (High &gt; Low)</option>
                                    <option value="">Sort
                                        By:Rating (Highest)</option>
                                    <option value="">Sort
                                        By:Rating (Lowest)</option>
                                    <option value="">Sort
                                        By:Model (A - Z)</option>
                                    <option value="">Sort
                                        By:Model (Z - A)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shop-toolbar d-none">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-2 col-sm-6">
                            <!-- Product View Mode -->
                            <div class="product-view-mode">
                                <a href="#" class="sorting-btn active" data-target="grid"><i class="fas fa-th"></i></a>
                                <a href="#" class="sorting-btn" data-target="grid-four">
                                    <span class="grid-four-icon">
                                        <i class="fas fa-grip-vertical"></i><i class="fas fa-grip-vertical"></i>
                                    </span>
                                </a>
                                <a href="#" class="sorting-btn" data-target="list "><i class="fas fa-list"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-md-4 col-sm-6 mt--10 mt-sm--0">
                            <span class="toolbar-status">
                                Showing 1 to 9 of 14 (2 Pages)
                            </span>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6 mt--10 mt-md--0">
                            <div class="sorting-selection">
                                <span>Show:</span>
                                <select class="form-control nice-select sort-select">
                                    <option value="" selected="selected">3</option>
                                    <option value="">9</option>
                                    <option value="">5</option>
                                    <option value="">10</option>
                                    <option value="">12</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt--10 mt-md--0 ">
                            <div class="sorting-selection">
                                <span>Sort By:</span>
                                <select class="mr-0 form-control nice-select sort-select">
                                    <option value="" selected="selected">Default Sorting</option>
                                    <option value="">Sort
                                        By:Name (A - Z)</option>
                                    <option value="">Sort
                                        By:Name (Z - A)</option>
                                    <option value="">Sort
                                        By:Price (Low &gt; High)</option>
                                    <option value="">Sort
                                        By:Price (High &gt; Low)</option>
                                    <option value="">Sort
                                        By:Rating (Highest)</option>
                                    <option value="">Sort
                                        By:Rating (Lowest)</option>
                                    <option value="">Sort
                                        By:Model (A - Z)</option>
                                    <option value="">Sort
                                        By:Model (Z - A)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid shop-product-wrap with-pagination row space-db--30 shop-border">
                    @forelse ($sub_catwise_products as $single_product)
                        <div class="col-lg-4 col-sm-6">
                            <div class="product-card">
                                <div class="product-grid-content">
                                    <div class="product-header">
                                        {{-- <a href="#" class="author">
                                            Epple
                                        </a> --}}
                                        <h3><a href="{{ route('product.productDetails', $single_product->product_slug) }}">{{ $single_product->product_name }}</a></h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="{{ asset('uploads/product_photoes') }}/{{ $single_product->product_photo }}" alt="Product photo not found">
                                            <div class="hover-contents">
                                                <a href="{{ route('product.productDetails', $single_product->product_slug) }}" class="hover-image">
                                                    <img src="{{ asset('uploads/product_photoes') }}/{{ $single_product->product_photo }}" alt="Product photo not found">
                                                </a>
                                                <div class="hover-btns">
                                                    <form action="{{ route('addToCart', $single_product->id) }}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </button>
                                                    </form>
                                                    @auth
                                                        @if (wishlistCheck($single_product->id))
                                                        <a href="{{ route('wishlist.remove', wishlist_id($single_product->id)) }}" class="single-btn">
                                                            <i class="fas fa-heart" style="color: #62ab00 !important; font-size: 15px; margin-right: 10px;"></i>
                                                        </a>
                                                        @else
                                                        <a href="{{ route('wishlist.insert', $single_product->id) }}" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        @endif
                                                    @endauth

                                                    @guest
                                                        <a href="{{ route('login') }}" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                    @endguest
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal{{ $single_product->id }}" class="single-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">৳{{ $single_product->product_price }}</span>
                                            {{-- <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <div class="card-image">
                                        <img src="{{ asset('uploads/product_photoes') }}/{{ $single_product->product_photo }}" alt="Product photo not found">
                                    </div>
                                    <div class="product-card--body">
                                        <div class="product-header">
                                            {{-- <a href="#" class="author">
                                                Gpple
                                            </a> --}}
                                            <h3><a href="{{ route('product.productDetails', $single_product->product_slug) }}" tabindex="0">{{ $single_product->product_name }}</a></h3>
                                        </div>
                                        <article>
                                            {{-- <h2 class="sr-only">Card List Article</h2> --}}
                                            <p>{{ Str::limit($single_product->product_short_description, 140, '...') }}</p>
                                        </article>
                                        <div class="price-block">
                                            <span class="price">৳{{ $single_product->product_price }}</span>
                                            {{-- <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span> --}}
                                        </div>
                                        <div class="rating-block">
                                            <span class="fas fa-star star_on"></span>
                                            <span class="fas fa-star star_on"></span>
                                            <span class="fas fa-star star_on"></span>
                                            <span class="fas fa-star star_on"></span>
                                            <span class="fas fa-star "></span>
                                        </div>
                                        <div class="btn-block">
                                            {{-- <a href="#" class="card-link"><i class="fas fa-random"></i> Add To
                                                Cart</a> --}}
                                            <form action="{{ route('addToCart', $single_product->id) }}" method="POST">
                                                @csrf
                                                <div class="add-cart-btn custom-edit-cart-btn">
                                                    <button type="submit" class="btn btn-outlined--primary"><span class="plus-icon">+</span>Add to Cart</button>
                                                </div>
                                            </form>
                                            @auth
                                                @if (wishlistCheck($single_product->id))
                                                <a href="{{ route('wishlist.remove', wishlist_id($single_product->id)) }}" class="add-link"><i class="fas fa-heart"
                                                        style="color: #62ab00 !important; font-size: 15px; margin-right: 10px;"></i>Remove from
                                                    Wish List</a>
                                                @else
                                                    <a href="{{ route('wishlist.insert', $single_product->id) }}" class="add-link"><i class="fas fa-heart"></i>Add to
                                                        Wish List</a>
                                                @endif
                                            @else
                                                    <a href="{{ route('login') }}" class="add-link"><i class="fas fa-heart"></i>Add to
                                                        Wish List</a>
                                            @endauth
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade modal-quick-view" id="quickModal{{ $single_product->id }}" tabindex="-1" role="dialog" aria-labelledby="quickModal"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <div class="product-details-modal">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <!-- Product Details Slider Big Image-->
                                                <div class="product-details-slider sb-slick-slider arrow-type-two">
                                                    <div class="single-slide">
                                                        <img src="{{ asset('uploads/product_photoes') }}/{{ $single_product->product_photo }}" alt="Product photo not found">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 mt--30 mt-lg--30">
                                                <div class="product-details-info pl-lg--30 ">
                                                    {{-- <p class="tag-block">Tags: <a href="#">Movado</a>, <a href="#">Omega</a></p> --}}
                                                    <h3 class="product-title">{{ $single_product->product_name }}</h3>
                                                    <ul class="list-unstyled">
                                                        {{-- <li>Ex Tax: <span class="list-value"> £60.24</span></li>
                                                        <li>Brands: <a href="#" class="list-value font-weight-bold"> Canon</a>
                                                        </li> --}}
                                                        <li>Product Code: <span class="list-value"> {{ $single_product->product_code }}</span></li>
                                                        {{-- <li>Reward Points: <span class="list-value"> 200</span></li> --}}
                                                        <li>Availability: <span class="list-value"> In Stock</span></li>
                                                    </ul>
                                                    <div class="price-block">
                                                        <span class="price-new">৳{{ $single_product->product_price }}</span>
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
                                                            {{-- <a href="#">Write a review</a> --}}
                                                        </div>
                                                    </div>
                                                    <article class="product-details-article">
                                                        <h4 class="sr-only">Product Summery</h4>
                                                        <p>{{ $single_product->product_short_desciption }}</p>
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
                                                    @auth
                                                    <div class="compare-wishlist-row">
                                                            @if (wishlistCheck($single_product->id))
                                                            <a href="{{ route('wishlist.remove', wishlist_id($single_product->id)) }}" class="add-link"><i class="fas fa-heart"
                                                                    style="color: #62ab00 !important; font-size: 15px; margin-right: 10px;"></i>Remove from
                                                                Wish List</a>
                                                            @else
                                                            <a href="{{ route('wishlist.insert', $single_product->id) }}" class="add-link"><i class="fas fa-heart"></i>Add to
                                                                Wish List</a>
                                                            @endif
                                                    </div>
                                                    @else
                                                    <div class="compare-wishlist-row">
                                                        <a href="{{ route('login') }}" class="add-link"><i class="fas fa-heart"></i>Add to
                                                            Wish List</a>
                                                    </div>
                                                    @endauth
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
                    @empty
                        <span class="mb-4 text-center text-danger">No Product To Show</span>
                    @endforelse
                </div>
                <!-- Pagination Block -->
                <div class="row pt--30">
                    <div class="col-md-12">
                        <div class="pagination-block">
                            {{--........................ --}}
                            {{ $sub_catwise_products->links('frontend.pages.paginate') }}
                            {{--........................ --}}
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                {{-- <div class="modal fade modal-quick-view" id="quickModal" tabindex="-1" role="dialog"
                    aria-labelledby="quickModal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="product-details-modal">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <!-- Product Details Slider Big Image-->
                                        <div class="product-details-slider sb-slick-slider arrow-type-two"data-slick-setting='{
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
                                        <div class="mt--30 product-slider-nav sb-slick-slider arrow-type-two"
                                            data-slick-setting='{
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
                                                <li>Brands: <a href="#" class="list-value font-weight-bold"> Canon</a>
                                                </li>
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
                                                <p>Long printed dress with thin adjustable straps. V-neckline and wiring
                                                    under
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
                                                    <a href="#" class="btn btn-outlined--primary"><span
                                                            class="plus-icon">+</span>Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="compare-wishlist-row">
                                                <a href="#" class="add-link"><i class="fas fa-heart"></i>Add to Wish
                                                    List</a>
                                                <a href="#" class="add-link"><i class="fas fa-random"></i>Add to
                                                    Compare</a>
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
                </div> --}}
            </div>
            <div class="col-lg-3 mt--40 mt-lg--0">
                <div class="inner-page-sidebar">
                    <!-- Accordion -->
                    <div class="single-block">
                        <h3 class="sidebar-title">Categories</h3>
                        <ul class="sidebar-menu--shop">
                            {{-- @foreach ($all_categories as $single_category)
                                @if ($single_category->relationWithSubCategory->count() > 0) --}}
                                    <li><a href="#">{{ $cat_info->category_name }}</a>
                                        <ul class="inner-cat-items">
                                            @foreach ($cat_info->relationWithSubCategory as $single_sub_cat)
                                                <li><a href="{{ route('subcatwiseproducts', [$single_sub_cat->id, Str::random(5)]) }}">{{ $single_sub_cat->sub_category_name }} ({{ $sub_catwise_products->count() }})</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                {{-- @else
                                    <li><a href="#">{{ $single_category->category_name }} (5)</a></li>
                                @endif --}}
                            {{-- <li><a href="#">More Categories</a></li>
                            <li><a href="#">Shop (16)</a>
                                <ul class="inner-cat-items">
                                    <li><a href="#">Saws (0)</a></li>
                                    <li><a href="#">Concrete Tools (7)</a></li>
                                    <li><a href="#">Drills (2)</a></li>
                                    <li><a href="#">Sanders (1)</a></li>
                                </ul>
                            </li> --}}
                        </ul>
                    </div>
                    {{-- <div class="single-block">
                        <h3 class="sidebar-title">Categories</h3>
                        <ul class="sidebar-menu--shop">
                            @foreach ($all_categories as $single_category)
                                @if ($single_category->relationWithSubCategory->count() > 0)
                                    <li><a href="#">{{ $single_category->category_name }} (16)</a>
                                        <ul class="inner-cat-items">
                                            @foreach ($single_category->relationWithSubCategory as $single_sub_cat)
                                                <li><a href="#">{{ $single_sub_cat->sub_category_name }} (0)</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @else
                                    <li><a href="#">{{ $single_category->category_name }} (5)</a></li>
                                @endif
                            @endforeach
                            <li><a href="#">More Categories</a></li>
                            <li><a href="#">Shop (16)</a>
                                <ul class="inner-cat-items">
                                    <li><a href="#">Saws (0)</a></li>
                                    <li><a href="#">Concrete Tools (7)</a></li>
                                    <li><a href="#">Drills (2)</a></li>
                                    <li><a href="#">Sanders (1)</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div> --}}
                    <!-- Price -->
                    <div class="single-block">
                        <h3 class="sidebar-title">Fillter By Price</h3>
                        <div class="range-slider pt--30">
                            <div class="sb-range-slider"></div>
                            <div class="slider-price">
                                <p>
                                    <input type="text" id="amount" readonly="">
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Size -->
                    <div class="single-block">
                        <h3 class="sidebar-title">Manufacturer</h3>
                        <ul class="sidebar-menu--shop menu-type-2">
                            <li><a href="#">Christian Dior <span>(5)</span></a></li>
                            <li><a href="#">Diesel <span>(8)</span></a></li>
                            <li><a href="#">Ferragamo <span>(11)</span></a></li>
                            <li><a href="#">Hermes <span>(14)</span></a></li>
                            <li><a href="#">Louis Vuitton <span>(12)</span></a></li>
                            <li><a href="#">Tommy Hilfiger <span>(0)</span></a></li>
                            <li><a href="#">Versace <span>(0)</span></a></li>
                        </ul>
                    </div>
                    <!-- Color -->
                    <div class="single-block">
                        <h3 class="sidebar-title">Select By Color</h3>
                        <ul class="sidebar-menu--shop menu-type-2">
                            <li><a href="#">Black <span>(5)</span></a></li>
                            <li><a href="#">Blue <span>(6)</span></a></li>
                            <li><a href="#">Brown <span>(4)</span></a></li>
                            <li><a href="#">Green <span>(7)</span></a></li>
                            <li><a href="#">Pink <span>(6)</span></a></li>
                            <li><a href="#">Red <span>(5)</span></a></li>
                            <li><a href="#">White <span>(8)</span></a></li>
                            <li><a href="#">Yellow <span>(11)</span> </a></li>
                        </ul>
                    </div>
                    <!-- Promotion Block -->
                    <div class="single-block">
                        <a href="#" class="promo-image sidebar">
                            <img src="{{ asset('frontend_assets') }}/image/others/home-side-promo.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
