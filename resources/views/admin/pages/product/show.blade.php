@extends('admin.layouts.dashboard')

@section('title')
Dashboard Pustok | {{ $single_product->product_name }} Details
@endsection

@section('product-list-active')

active

@endsection

@section('content')

<style>
/* ===== GLOBAL ===== */
.product-hero {
    background: linear-gradient(135deg, #f9fafb, #ffffff);
    border-radius: 18px;
    padding: 30px;
    position: relative;
    overflow: hidden;
}

.product-hero::after {
    content: "";
    position: absolute;
    right: -40px;
    top: -40px;
    /* width: 160px; */
    height: 160px;
    background: rgba(40,167,69,0.08);
    border-radius: 50%;
}

.product-image {
    max-height: 340px;
    object-fit: contain;
    border-radius: 18px;
    box-shadow: 0 16px 35px rgba(0,0,0,0.18);
}

.price-tag {
    background: #eafaf1;
    display: inline-block;
    padding: 10px 22px;
    font-size: 22px;
    font-weight: 700;
    border-radius: 30px;
    color: #28a745;
}

.badge-pill {
    padding: 7px 16px;
    font-size: 12px;
    border-radius: 20px;
}

/* ===== INFO CARD ===== */
.info-card {
    background: #fff;
    border-radius: 14px;
    padding: 20px;
    height: 100%;
    transition: 0.3s ease;
    border-left: 4px solid transparent;
    box-shadow: 0 6px 18px rgba(0,0,0,0.06);
}

.info-card:hover {
    transform: translateY(-4px);
    border-left-color: #28a745;
    box-shadow: 0 14px 30px rgba(0,0,0,0.12);
}

.info-icon {
    font-size: 22px;
    color: #28a745;
}

.info-label {
    font-size: 13px;
    color: #6c757d;
}

.info-value {
    font-size: 15px;
    font-weight: 600;
}

/* ===== DESCRIPTION ===== */
.section-title {
    font-weight: 700;
    font-size: 18px;
    border-left: 4px solid #28a745;
    padding-left: 12px;
}

.description-box {
    background: #f8f9fa;
    border-radius: 14px;
    padding: 22px;
    line-height: 1.8;
}

/* ===== META ===== */
.meta-text {
    font-size: 13px;
    color: #6c757d;
}
</style>

<div class="content-wrapper">

    <div class="content-body">
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
                                <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Product List</a>
                                </li>
                                <li class="breadcrumb-item active">Product Details</li>
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
        <!-- HERO SECTION -->
        <div class="card mb-3">
            <div class="card-body product-hero">
                <div class="row align-items-center">

                    <!-- IMAGE -->
                    <div class="col-md-5 text-center mb-2 mb-md-0">
                        <!-- Product Name on top of image -->
                        {{-- <h3 class="mb-2 font-weight-bold">{{ $single_product->product_name }}</h3> --}}

                        <img src="{{ asset('uploads/product_photoes') }}/{{ $single_product->product_photo }}"
                            class="img-fluid product-image"
                            alt="product image">
                    </div>

                    <!-- HERO INFO -->
                    <div class="col-md-7">
                        <h3 class="mb-2 font-weight-bold">{{ $single_product->product_name }}</h3>

                        <div class="price-tag mb-2">
                            ৳ {{ $single_product->product_price }}
                        </div>
                        <div class="mb-1">
                            <span>Category : <small class="badge badge-info ">
                                    <i class="fa fa-tags"></i>
                                    {{ $single_product->relationWithCategory->category_name }}
                                </small>
                            </span>

                        </div>
                        <div class="mb-2">
                            @if ($single_product->sub_category_id)
                                <span>Sub Category : <small class="badge badge-secondary">
                                        <i class="fa fa-tag"></i>
                                        {{ $single_product->relationWithSubCategory->sub_category_name }}
                                    </small>
                                </span>
                            @endif
                        </div>
                        <div class="mb-2">
                            <span class="badge badge-pill {{ $single_product->product_quantity > 0 ? 'badge-success' : 'badge-danger' }}">
                                <i class="fa fa-box"></i>
                                {{ $single_product->product_quantity > 0 ? 'In Stock' : 'Stock Out' }}
                            </span>

                            @if ($single_product->product_featured)
                                <span class="badge badge-pill badge-warning">
                                    <i class="fa fa-star"></i> Featured
                                </span>
                            @endif
                        </div>

                        <p class="text-muted mt-2">
                            {{ $single_product->product_short_description }}
                        </p>

                    </div>
                </div>
            </div>
        </div>


        <!-- INFO CARDS -->
        <div class="row mb-3">

            <div class="col-md-4 mb-2">
                <div class="info-card">
                    <div class="d-flex">
                        <div class="info-icon mr-2"><i class="fa fa-barcode"></i></div>
                        <div>
                            <div class="info-label">Product Code</div>
                            <div class="info-value">{{ $single_product->product_code }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-2">
                <div class="info-card">
                    <div class="d-flex">
                        <div class="info-icon mr-2"><i class="fa fa-layer-group"></i></div>
                        <div>
                            <div class="info-label">Quantity</div>
                            <div class="info-value">{{ $single_product->product_quantity }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-2">
                <div class="info-card">
                    <div class="d-flex">
                        <div class="info-icon mr-2"><i class="fa fa-link"></i></div>
                        <div>
                            <div class="info-label">Product Slug</div>
                            <div class="info-value text-muted">{{ $single_product->product_slug }}</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- DESCRIPTION -->
        <div class="card">
            <div class="card-body">
                <h5 class="section-title mb-2">Product Description</h5>

                <div class="description-box mb-2">
                    {{ $single_product->product_long_description }}
                </div>

                <div class="meta-text">
                    Created: {{ $single_product->created_at->format('d M Y') }}
                    @if($single_product->updated_at)
                        | Updated: {{ $single_product->updated_at->format('d M Y') }}
                    @endif
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
