@extends('admin.layouts.dashboard')

@section('title')

Dashboard Pustok | Product Add

@endsection

@section('add-product-active')

active

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
                            <li class="breadcrumb-item active">Add Product</li>
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
    <div class="content-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    {{-- @if (session('success'))
                    <div class="p-2 alert alert-success">
                        <span>{{ session('success') }}</span>
                    </div>
                    @endif --}}
                    <div class="card-header d-block d-sm-flex">
                    </div>
                    <div class="card-body">
                        <form class="form form-vertical">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="first-name-vertical">Product Name</label>
                                        <input type="text" id="first-name-vertical" class="form-control" name="fname"
                                            placeholder="Enter Product Name" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email-id-vertical">Product Category</label>
                                        <input type="email" id="email-id-vertical" class="form-control" name="email-id"
                                            placeholder="Email" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="contact-info-vertical">Product Sub Category</label>
                                        <input type="number" id="contact-info-vertical" class="form-control" name="contact"
                                            placeholder="Mobile" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="password-vertical">Product Price</label>
                                        <input type="password" id="password-vertical" class="form-control" name="contact"
                                            placeholder="Enter Product Price" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="password-vertical">Product Short Description</label>
                                        <input type="password" id="password-vertical" class="form-control" name="contact"
                                            placeholder="Write Product Short Description" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="password-vertical">Product Long Description</label>
                                        <input type="password" id="password-vertical" class="form-control" name="contact"
                                            placeholder="Write Product Long Description" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="password-vertical">Product Code</label>
                                        <input type="password" id="password-vertical" class="form-control" name="contact"
                                            placeholder="Enter Product Code" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="password-vertical">Product Photo</label>
                                        <div action="#" class="dropzone dropzone-area" id="dpz-multiple-files">
                                            <div class="dz-message">Drop files here or click to upload.</div>
                                        </div>
                                        {{-- <form action="#" class="dropzone dropzone-area" id="dpz-multiple-files">
                                            <div class="dz-message">Drop files here or click to upload.</div>
                                        </form> --}}
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="reset" class="btn btn-primary mr-1">Add Product</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

