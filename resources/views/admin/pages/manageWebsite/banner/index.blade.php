@extends('admin.layouts.dashboard')

@section('title')

Dashboard Pustok | Banner

@endsection

@section('banner-active')

active

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
                    <h2 class="float-left mb-0 content-header-title">Banner</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Banner List
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
    <div class="content-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-block d-sm-flex">
                        <h4 class="card-title">Banner List</h4>
                    </div>
                    <div class="card-body">
                        <div class="mt-2 table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Actions</th>
                                        <th>Banner Title Samll</th>
                                        <th>Banner Title Big</th>
                                        <th>Banner Photo</th>
                                        <th>Banner Text</th>
                                        <th>Created At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($banners as $banner)
                                        <tr id="tr_">
                                            <td>
                                                <a href="{{ route('banner.edit', $banner->id) }}" class="btn btn-secondary">
                                                    <i data-feather="edit" class="mr-25"></i>
                                                    <span>Edit</span>
                                                </a>
                                            </td>
                                            <td>
                                                <span class="font-weight-bold">{{ $banner->banner_title_small }}</span>
                                            </td>
                                            <td>
                                                <span class="font-weight-bold">{{ $banner->banner_title_big }}</span>
                                            </td>
                                            <td class="text-center">
                                                <img src="{{ asset('uploads/banner_photoes') }}/{{ $banner->banner_photo }}" class="mr-75" height="120" width="250" alt="Banner Photo">
                                            </td>
                                            <td>
                                                <span class="font-weight-bold">{{ $banner->banner_text }}</span>
                                            </td>
                                            <td>
                                                <span class="font-weight-bold">{{ $banner->created_at->format('M d Y') }}</span>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="50" class="text-center"><span class="text-center text-danger font-weight-bold">No data to show</span>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
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
        // Tostr & SweetAlert2 success start

        @if (session("banner_update_success"))
            // toastr.success("{{ session('success') }}")
            Swal.fire({
                title: 'Done!',
                text: '{{ session("banner_update_success") }}',
                icon: 'success',
                customClass: {
                confirmButton: 'btn btn-primary'
                },
                buttonsStyling: false
            });
        @endif

        // Tostr & SweetAlert2 success end
    });
</script>

@endpush

