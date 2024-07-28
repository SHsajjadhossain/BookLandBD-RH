@extends('admin.layouts.dashboard')

@section('title')

Dashboard Pustok | {{ $single_sub_cat->sub_category_name }} Details

@endsection

@section('content')

<div class="content-wrapper">

    <!-- breadcrumb area start -->
    <div class="content-header row">
        <div class="mb-2 content-header-left col-md-9 col-12">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="float-left mb-0 content-header-title">Product Sub Category</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item "><a href="{{ route('subcategory.index') }}">Sub Category</a>
                            </li>
                            <li class="breadcrumb-item active"> Details
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
                    <div class="col-12 col-md-7">
                        <h4>{{ $single_sub_cat->sub_category_name }}</h4>
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
                                <ul class="pl-4 unstyled-list list-inline border-left">
                                    <li class="ratings-list-item">{{ $single_sub_cat->created_at->format('d M Y') }}</li>
                                    {{-- {{ $single_cat->created_at->format('d M Y') }} --}}
                                </ul>
                            </div>
                        </div>
                        <hr />
                        <hr />
                        <div class="product-color-options">
                            <div class="flex-wrap mt-1 ecommerce-details-price d-flex">
                                <h4 class="mr-1 item-price">Updated At</h4>
                                <ul class="pl-3 unstyled-list list-inline border-left">
                                    <li class="ratings-list-item">{{ $single_sub_cat->updated_at->format('d M Y') }}</li>
                                    {{-- {{ $single_cat->updated_at->format('d M Y') }} --}}
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
