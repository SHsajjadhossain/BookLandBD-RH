@extends('admin.layouts.dashboard')

@section('title')

Dashboard Pustok | {{ $single_sub_cat->sub_category_name }} Details

@endsection

@push('custom-css')

<style>
    .dropdown-menu button.dropdown-item {
        width: 100%;
    }

    table td {
        font-family: Roboto, sans-serif !important;
        font-size: 1rem !important;
        font-weight: 400 !important;
        line-height: 1.45 !important;
        padding: 0.72rem 2rem !important;
        text-align: left;
    }

    .swal2-confirm {
        margin-left: 15px
    }
</style>

@endpush

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
                <div class="mb-2 table-responsive">
                    <table class="table table-bordered table-sm">
                        <tbody>
                            <tr>
                                <th>Sub Category Name :</th>
                                <td><span class="font-weight-bold">{{ $single_sub_cat->sub_category_name }}</span></td>
                            </tr>
                            <tr>
                                <th>Category Name :</th>
                                <td><span class="font-weight-bold">{{ $single_sub_cat->relationWithCategory->category_name }}</span></td>
                            </tr>
                            <tr>
                                <th>Created At :</th>
                                <td><span class="font-weight-bold">{{ $single_sub_cat->created_at->format('d M Y') }}</span></td>
                            </tr>
                            <tr>
                                <th>Updated At :</th>
                                @if ($single_sub_cat->updated_at)
                                <td><span class="font-weight-bold">{{ $single_sub_cat->updated_at->format('d M Y') }}</span></td>
                                @else
                                <td><span class="font-weight-bold">Not updated</span></td>
                                @endif
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Details ends -->
</div>

@endsection
