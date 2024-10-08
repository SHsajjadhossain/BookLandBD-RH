@extends('admin.layouts.dashboard')

@section('title')

Dashboard Pustok | {{ $single_product->product_name }} Details

@endsection

@section('content')

<div class="content-wrapper">

    <!-- breadcrumb area start -->
    <div class="content-header row">
        <div class="mb-2 content-header-left col-md-9 col-12">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="float-left mb-0 content-header-title">Product</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item "><a href="{{ route('product.index') }}">Product List</a>
                            </li>
                            <li class="breadcrumb-item active"> Product Details
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

    <!-- Product Details starts -->
    <div class="content-body">
        <div class="card">
            <div class="card-body">
                <div class="my-2 row">
                    <div class="mb-2 col-12 col-md-5 d-flex align-items-center justify-content-center mb-md-0">
                        <div class="d-flex align-items-center justify-content-center">
                            {{-- <img src="{{ asset('dashboard_assets') }}/app-assets/images/pages/eCommerce/1.png"
                                class="img-fluid product-img" alt="product image" /> --}}
                            <img src="{{ asset('uploads/product_photoes') }}/{{ $single_product->product_photo }}"
                                class="img-fluid product-img" alt="product image" />
                        </div>
                    </div>
                    <div class="col-12 col-md-7">
                        <h4>{{ $single_product->product_name }}</h4>
                        {{-- <div class="flex-wrap mt-1 ecommerce-details-price d-flex">
                            <h4 class="mr-1 item-price">$499.99</h4>
                            <ul class="pl-1 unstyled-list list-inline border-left">
                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                            </ul>
                        </div>
                        <p class="card-text">Available - <span class="text-success">In stock</span></p> --}}
                        <hr />
                        <div class="product-color-options">
                            <div class="flex-wrap mt-1 ecommerce-details-price d-flex">
                                <h4 class="mr-1 item-price">Created At</h4>
                                <ul class="pl-1 unstyled-list list-inline border-left">
                                    <li class="ratings-list-item">{{ $single_product->created_at->format('d M Y') }}</li>
                                </ul>
                            </div>
                        </div>
                        <hr />

                        @if ($single_product->updated_at)
                        <hr />
                        <div class="product-color-options">
                            <div class="flex-wrap mt-1 ecommerce-details-price d-flex">
                                <h4 class="mr-1 item-price">Updated At</h4>
                                <ul class="pl-1 unstyled-list list-inline border-left">
                                    <li class="ratings-list-item">{{ $single_product->updated_at->format('d M Y') }}</li>
                                </ul>
                            </div>
                        </div>
                        <hr />
                        @endif

                        <hr />
                        <div class="product-color-options">
                            <div class="flex-wrap mt-1 ecommerce-details-price d-flex">
                                <h4 class="mr-1 item-price">Category</h4>
                                <ul class="pl-1 unstyled-list list-inline border-left">
                                    <li class="ratings-list-item">{{ $single_product->relationWithCategory->category_name }}</li>
                                </ul>
                            </div>
                        </div>
                        <hr />

                        @if ($single_product->sub_category_id)
                        <hr />
                        <div class="product-color-options">
                            <div class="flex-wrap mt-1 ecommerce-details-price d-flex">
                                <h4 class="mr-1 item-price">Sub Category</h4>
                                <ul class="pl-1 unstyled-list list-inline border-left">
                                    <li class="ratings-list-item">{{ $single_product->relationWithSubCategory->sub_category_name }}</li>
                                </ul>
                            </div>
                        </div>
                        <hr />
                        @endif

                        <hr />
                        <div class="product-color-options">
                            <div class="flex-wrap mt-1 ecommerce-details-price d-flex">
                                <h4 class="mr-1 item-price">Price</h4>
                                <ul class="pl-1 unstyled-list list-inline border-left">
                                    <li class="ratings-list-item">৳ {{ $single_product->product_price }}</li>
                                </ul>
                            </div>
                        </div>
                        <hr />

                        <hr />
                        <div class="product-color-options">
                            <div class="flex-wrap mt-1 ecommerce-details-price d-flex">
                                <h4 class="mr-1 item-price">Product Quantity</h4>
                                <ul class="pl-1 unstyled-list list-inline border-left">
                                    <li class="ratings-list-item">{{ $single_product->product_quantity }} ({{ ($single_product->product_quantity == 0) ? 'Stock Out' : 'In Stock' }})</li>
                                </ul>
                            </div>
                        </div>
                        <hr />

                        <hr />
                        <div class="product-color-options">
                            <div class="flex-wrap mt-1 ecommerce-details-price d-flex">
                                <h4 class="mr-1 item-price">Product Code</h4>
                                <ul class="pl-1 unstyled-list list-inline border-left">
                                    <li class="ratings-list-item">{{ $single_product->product_code }}</li>
                                </ul>
                            </div>
                        </div>
                        <hr />

                        <hr />
                        <div class="product-color-options">
                            <div class="flex-wrap mt-1 ecommerce-details-price d-flex">
                                <h4 class="mr-1 item-price">Short Description</h4>
                                <ul class="pl-1 unstyled-list list-inline border-left">
                                    <li class="ratings-list-item">{{ $single_product->product_short_description }}</li>
                                </ul>
                            </div>
                        </div>
                        <hr />

                        <hr />
                        <div class="product-color-options">
                            <div class="flex-wrap mt-1 ecommerce-details-price d-flex">
                                <h4 class="mr-1 item-price">Long Description</h4>
                                <ul class="pl-1 unstyled-list list-inline border-left">
                                    <li class="ratings-list-item">{{ $single_product->product_long_description }}</li>
                                </ul>
                            </div>
                        </div>
                        <hr />

                        <hr />
                        <div class="product-color-options">
                            <div class="flex-wrap mt-1 ecommerce-details-price d-flex">
                                <h4 class="mr-1 item-price">Product Slug</h4>
                                <ul class="pl-1 unstyled-list list-inline border-left">
                                    <li class="ratings-list-item">{{ $single_product->product_slug }}</li>
                                </ul>
                            </div>
                        </div>
                        <hr />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Details ends -->
</div>

@endsection
