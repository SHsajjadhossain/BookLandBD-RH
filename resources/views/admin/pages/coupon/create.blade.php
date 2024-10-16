@extends('admin.layouts.dashboard')

@section('title')

Dashboard Pustok | Add Coupon

@endsection

@section('add-coupon-active')

active

@endsection

@section('content')

<div class="content-wrapper">
    <!-- breadcrumb area start -->
    <div class="content-header row">
        <div class="mb-2 content-header-left col-md-9 col-12">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="float-left mb-0 content-header-title">Coupon</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Add Coupon</li>
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
                        <form class="form form-vertical" action="{{ route('coupon.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="first-name-vertical">Coupon Name<span
                                                class="text-danger">*</span></label>
                                        <input type="text" id="coupon_name" class="form-control" name="coupon_name"
                                            placeholder="Enter Coupon Name" />
                                        @error('coupon_name')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="password-vertical">Coupon Discount Percentage<span
                                                class="text-danger">*</span></label>
                                        <input type="number" id="password-vertical" class="form-control"
                                            name="discount_percentage" placeholder="Enter Coupon Discount Percentage" />
                                        @error('discount_percentage')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="password-vertical">Coupon Validity<span
                                                class="text-danger">*</span></label>
                                        <input type="date" id="password-vertical" class="form-control"
                                            name="coupon_validity" placeholder="Enter Coupon Validity" />
                                        @error('coupon_validity')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="password-vertical">Coupon Limit<span
                                                class="text-danger">*</span></label>
                                        <input type="number" id="password-vertical" class="form-control"
                                            name="coupon_limit" placeholder="Enter Coupon Limit" />
                                        @error('coupon_limit')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="mt-1 mr-1 btn btn-primary">Add Coupon</button>
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
    // Tostr & SweetAlert2 success start

        @if (session("success"))
            // toastr.success("{{ session('success') }}")
            Swal.fire({
                title: 'Done!',
                text: '{{ session("success") }}',
                icon: 'success',
                customClass: {
                confirmButton: 'btn btn-primary'
                },
                buttonsStyling: false
            });
        @endif

    // Tostr & SweetAlert2 success end
</script>

@endpush
