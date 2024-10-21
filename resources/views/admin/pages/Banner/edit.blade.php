@extends('admin.layouts.dashboard')

@section('title')

Dashboard Pustok | Banner

@endsection

@section('list-banner-active')

active

@endsection

@section('content')

<div class="content-wrapper">
    <!-- breadcrumb area start -->
    <div class="content-header row">
        <div class="mb-2 content-header-left col-md-9 col-12">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="float-left mb-0 content-header-title">Banner</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('banner.index') }}">Banner List</a>
                            </li>
                            <li class="breadcrumb-item active">Banner Edit</li>
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
                        <form class="form form-vertical" action="{{ route('banner.update', $single_banner->id) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="first-name-vertical">Banner Title Small<span
                                                class="text-danger">*</span></label>
                                        <input type="text" id="banner_title_small" class="form-control" name="banner_title_small"
                                            value="{{ $single_banner->banner_title_small }}" placeholder="Enter Banner Small Title" />
                                        @error('banner_title_small')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="first-name-vertical">Banner Title Big<span
                                                class="text-danger">*</span></label>
                                        <input type="text" id="banner_title_big" class="form-control" name="banner_title_big"
                                            value="{{ $single_banner->banner_title_big }}" placeholder="Enter Banner Big Title" />
                                        @error('banner_title_big')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Banner Text<span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control" name="banner_text"
                                            id="exampleFormControlTextarea1" style="resize:none"
                                            rows="3">{{ $single_banner->banner_text }}</textarea>
                                        @error('banner_text')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="custom-file">Banner Photo<small class="text-warning"> (Dimensions:
                                                825 x 420 px)</small> <span class="text-danger">*</span></label>
                                        <div class="mb-1 mr-1">
                                            <img src="{{ asset('uploads/banner_photoes') }}/{{ $single_banner->banner_photo }}"
                                                data-reset-src="" id="banner_photo_upload_img"
                                                class="rounded uploadedAvatar object-fit--cover" alt="banner photo"
                                                width="200" height="120">
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="banner_photo_upload"
                                                name="banner_photo"
                                                value="{{ asset('uploads/banner_photoes') }}/{{ $single_banner->banner_photo }}" />
                                            <label class="custom-file-label" for="customFile">Choose photo</label>
                                            @error('banner_photo')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="mt-1 mr-1 btn btn-primary">Update Banner</button>
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

@push('js')

<script>
    $(document).ready(function () {

        // Update & Reset Banner photo on click of button start
            let bannerUploadImg = $('#banner_photo_upload_img');
            let bannerUploadInput = $('#banner_photo_upload');
            let accountResetBtn = $('#account-reset');
            if (bannerUploadInput) {
                bannerUploadInput.on('change', function (e) {
                    var reader = new FileReader(),
                        files = e.target.files;
                    reader.onload = function () {
                        if (bannerUploadImg) {
                            bannerUploadImg.attr('src', reader.result);
                        }
                    };
                    reader.readAsDataURL(files[0]);
                });
            }
        // Update & Reset Banner photo on click of button end
    });
</script>

@endpush
