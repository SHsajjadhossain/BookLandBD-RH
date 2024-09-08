@extends('frontend.layouts.app_frontend')

@section('title')

Pustok - Shop

@endsection

@section('content')

<section class="breadcrumb-section">
    <h2 class="sr-only">Site Breadcrumb</h2>
    <div class="container">
        <div class="breadcrumb-contents">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Shop</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<main class="inner-page-sec-padding-bottom">
    <div class="container">
        <div class="shop-toolbar mb--30">
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
                        {{ $all_products->links('frontend.pages.paginateNumberOfPagesShowing') }}
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
            @forelse ($all_products as $single_product)
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
                                    <a href="{{ route('product.productDetails', $single_product->id) }}" class="hover-image">
                                        <img src="{{ asset('uploads/product_photoes') }}/{{ $single_product->product_photo }}" alt="Product photo not found">
                                    </a>
                                    <div class="hover-btns">
                                        <a href="cart.html" class="single-btn">
                                            <i class="fas fa-shopping-basket"></i>
                                        </a>
                                        <a href="wishlist.html" class="single-btn">
                                            <i class="fas fa-heart"></i>
                                        </a>
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
                                <a href="#" class="btn btn-outlined">Add To Cart</a>
                                <a href="#" class="card-link"><i class="fas fa-heart"></i> Add To Wishlist</a>
                                {{-- <a href="#" class="card-link"><i class="fas fa-random"></i> Add To Cart</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade modal-quick-view" id="quickModal{{ $single_product->id }}" tabindex="-1" role="dialog"
                aria-labelledby="quickModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="product-details-modal">
                            <div class="row">
                                <div class="col-lg-5">
                                    <!-- Product Details Slider Big Image-->
                                    <div class="product-details-slider sb-slick-slider arrow-type-two">
                                        <div class="single-slide">
                                            <img src="{{ asset('uploads/product_photoes') }}/{{ $single_product->product_photo }}"
                                                alt="Product photo not found">
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
                                            <li>Product Code: <span class="list-value"> {{ $single_product->product_code }}</span>
                                            </li>
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
                                                <a href="#">Write a review</a>
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
                                        <div class="compare-wishlist-row">
                                            <a href="#" class="add-link"><i class="fas fa-heart"></i>Add to Wish
                                                List</a>
                                            {{-- <a href="#" class="add-link"><i class="fas fa-random"></i>Add to
                                                Compare</a> --}}
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
            @empty
                <span class="mb-4 text-center text-danger">No Product To Show</span>
            @endforelse
        </div>
        <!-- Pagination Block -->
        <div class="row pt--30">
            <div class="col-md-12">
                <div class="pagination-block">
                    {{--........................ --}}
                    {{ $all_products->links('frontend.pages.paginate') }}
                    {{--........................ --}}
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
