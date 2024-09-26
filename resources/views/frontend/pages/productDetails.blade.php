@extends('frontend.layouts.app_frontend')

@section('title')

Pustok - {{ $single_product_info->product_name }}

@endsection

@section('content')

<main class="inner-page-sec-padding-bottom">
    <div class="container">
        <div class="row mb--60">
            <div class="col-lg-5 mb--30">
                <!-- Product Details Slider Big Image-->
                <div class="product-details-slider sb-slick-slider arrow-type-two">
                    <div class="single-slide">
                        <img src="{{ asset('uploads/product_photoes') }}/{{ $single_product_info->product_photo }}" alt="product-image">
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="product-details-info pl-lg--30 ">
                    {{-- <p class="tag-block">Tags: <a href="#">Movado</a>, <a href="#">Omega</a></p> --}}
                    <h3 class="product-title">{{ $single_product_info->product_name }}</h3>
                    <ul class="list-unstyled">
                        {{-- <li>Brands: <a href="#" class="list-value font-weight-bold"> Canon</a></li> --}}
                        <li>Product Code: <span class="list-value"> {{ $single_product_info->product_code }}</span></li>
                        <li>Reward Points: <span class="list-value"> 200</span></li>
                        <li>Availability: <span class="list-value"> In Stock</span></li>
                    </ul>
                    <div class="price-block">
                        <span class="price-new">৳{{ $single_product_info->product_price }}</span>
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
                        <p>{{ $single_product_info->product_short_description }}</p>
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
                            @if ($wishlist_status)
                            <a href="{{ route('wishlist.remove', $wishlist_id) }}" class="add-link"><i class="fas fa-heart" style="color: #62ab00 !important; font-size: 15px; margin-right: 10px;"></i>Remove from
                                Wish List</a>
                            @else
                                <a href="{{ route('wishlist.insert', $single_product_info->id) }}" class="add-link"><i class="fas fa-heart"></i>Add to Wish List</a>
                            @endif
                        </div>
                    @endauth

                    @guest
                        <div class="compare-wishlist-row">
                            <a href="{{ route('login') }}" class="add-link"><i class="fas fa-heart"></i>Add to Wish List</a>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
        <div class="sb-custom-tab review-tab section-padding">
            <ul class="nav nav-tabs nav-style-2" id="myTab2" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="tab1" data-bs-toggle="tab" href="#tab-1" role="tab"
                        aria-controls="tab-1" aria-selected="true">
                        DESCRIPTION
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tab2" data-bs-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2"
                        aria-selected="true">
                        REVIEWS (1)
                    </a>
                </li>
            </ul>
            <div class="tab-content space-db--20" id="myTabContent">
                <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab1">
                    <article class="review-article">
                        <h1 class="sr-only">Tab Article</h1>
                        <p>{{ $single_product_info->product_long_description }}</p>
                    </article>
                </div>
                <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab2">
                    <div class="review-wrapper">
                        <h2 class="title-lg mb--20">1 REVIEW FOR AUCTOR GRAVIDA ENIM</h2>
                        <div class="review-comment mb--20">
                            <div class="avatar">
                                <img src="{{ asset('frontend_assets') }}/image/icon/author-logo.png" alt="">
                            </div>
                            <div class="text">
                                <div class="rating-block mb--15">
                                    <span class="ion-android-star-outline star_on"></span>
                                    <span class="ion-android-star-outline star_on"></span>
                                    <span class="ion-android-star-outline star_on"></span>
                                    <span class="ion-android-star-outline"></span>
                                    <span class="ion-android-star-outline"></span>
                                </div>
                                <h6 class="author">ADMIN – <span class="font-weight-400">March 23, 2015</span>
                                </h6>
                                <p>Lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio
                                    quis mi.</p>
                            </div>
                        </div>
                        <h2 class="title-lg mb--20 pt--15">ADD A REVIEW</h2>
                        <div class="pt-2 rating-row">
                            <p class="d-block">Your Rating</p>
                            <span class="rating-widget-block">
                                <input type="radio" name="star" id="star1">
                                <label for="star1"></label>
                                <input type="radio" name="star" id="star2">
                                <label for="star2"></label>
                                <input type="radio" name="star" id="star3">
                                <label for="star3"></label>
                                <input type="radio" name="star" id="star4">
                                <label for="star4"></label>
                                <input type="radio" name="star" id="star5">
                                <label for="star5"></label>
                            </span>
                            <form action="https://htmldemo.net/pustok/pustok/" class="mt--15 site-form ">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="message">Comment</label>
                                            <textarea name="message" id="message" cols="30" rows="10"
                                                class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="name">Name *</label>
                                            <input type="text" id="name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="email">Email *</label>
                                            <input type="text" id="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="website">Website</label>
                                            <input type="text" id="website" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="submit-btn">
                                            <a href="#" class="btn btn-black">Post Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="tab-product-details">
  <div class="brand">
    <img src="{{ asset('frontend_assets') }}/image/others/review-tab-product-details.jpg" alt="">
  </div>
  <h5 class="meta">Reference <span class="small-text">demo_5</span></h5>
  <h5 class="meta">In stock <span class="small-text">297 Items</span></h5>
  <section class="product-features">
    <h3 class="title">Data sheet</h3>
    <dl class="data-sheet">
      <dt class="name">Compositions</dt>
      <dd class="value">Viscose</dd>
      <dt class="name">Styles</dt>
      <dd class="value">Casual</dd>
      <dt class="name">Properties</dt>
      <dd class="value">Maxi Dress</dd>
    </dl>
  </section>
</div> -->
    </div>
<!--=================================
    RELATED PRODUCTS BOOKS
===================================== -->
    <section class="">
        <div class="container">
            <div class="section-title section-title--bordered">
                <h2>RELATED PRODUCTS</h2>
            </div>
            <div class="product-slider sb-slick-slider slider-border-single-row" data-slick-setting='{
                "autoplay": true,
                "autoplaySpeed": 8000,
                "slidesToShow": 4,
                "dots":true
            }' data-slick-responsive='[
                {"breakpoint":1200, "settings": {"slidesToShow": 4} },
                {"breakpoint":992, "settings": {"slidesToShow": 3} },
                {"breakpoint":768, "settings": {"slidesToShow": 2} },
                {"breakpoint":480, "settings": {"slidesToShow": 1} }
            ]'>
                @forelse ($related_products as $related_product)
                    <div class="single-slide">
                        <div class="product-card">
                            <div class="product-header">
                                {{-- <a href="#" class="author">
                                    Lpple
                                </a> --}}
                                <h3><a href="{{ route('product.productDetails', $related_product->product_slug) }}">{{ $related_product->product_name }}</a></h3>
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img src="{{ asset('uploads/product_photoes') }}/{{ $related_product->product_photo }}" alt="Product photo not found">
                                    <div class="hover-contents">
                                        <a href="{{ route('product.productDetails', $related_product->product_slug) }}" class="hover-image">
                                            <img src="{{ asset('uploads/product_photoes') }}/{{ $related_product->product_photo }}" alt="Product photo not found">
                                        </a>
                                        <div class="hover-btns">
                                            <a href="cart.html" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            @if (wishlistCheck($related_product->id))
                                            <a href="{{ route('wishlist.remove', wishlist_id($related_product->id)) }}" class="single-btn">
                                                <i class="fas fa-heart" style="color: #62ab00 !important; font-size: 15px; margin-right: 10px;"></i>
                                            </a>
                                            @else
                                            <a href="{{ route('wishlist.insert', $related_product->id) }}" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            @endif
                                            {{-- <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal{{ $related_product->id }}" class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="price-block">
                                    <span class="price">৳{{ $related_product->product_price }}</span>
                                    {{-- <del class="price-old">£51.20</del>
                                    <span class="price-discount">20%</span> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <span class="mb-4 text-center text-danger">No Product To Show</span>
                @endforelse
            </div>
        </div>
    </section>

</main>

@endsection
