@extends('admin.layouts.dashboard')

@section('title')

Dashboard Pustok | My Profile

@endsection

@section('content')

<div class="content-wrapper">
    <!-- breadcrumb area start -->
    <div class="content-header row">
        <div class="mb-2 content-header-left col-md-9 col-12">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="float-left mb-0 content-header-title">Admin Dashboard</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">My Profile
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

                <!-- profile header -->
                <ul class="mb-2 nav nav-pills" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-toggle="pill" href="#pills-account" role="tab" aria-selected="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-user mr-50">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            Account
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-toggle="pill" href="#pills-security" id="password-security" role="tab" aria-selected="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-lock mr-50">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                            </svg>
                            Security
                        </a>
                    </li>
                </ul>
                <!--/ profile header -->

                @if (session('success'))
                <div class="pt-2 pb-2 alert alert-success">
                    <span class="ml-2">{{ session('success') }}</span>
                </div>
                @endif

                @if (session('successpass'))
                <div class="pt-2 pb-2 alert alert-success">
                    <span class="ml-2">{{ session('successpass') }}</span>
                </div>
                @endif

                <!-- profile info section -->
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="pills-account" role="tabpanel">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">Profile Details</h4>
                            </div>
                            <div class="py-2 card-body">
                                <form action="{{ route('my-profile.update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="flex-wrap d-flex align-items-end">
                                        <div class="mb-1 mr-1">
                                            <img src="{{ asset('uploads/profile_photoes') }}/{{ $my_info->profile_photo }}" id="account-upload-img" class="rounded uploadedAvatar object-fit--cover"
                                            alt="profile image" width="100" height="100">
                                            {{-- <img src="https://i.pravatar.cc/300" data-reset-src="https://i.pravatar.cc/300"
                                                id="account-upload-img" class="rounded uploadedAvatar object-fit--cover"
                                                alt="profile image" width="100" height="100"> --}}
                                        </div>
                                        <!-- upload and reset button -->
                                        <div class="mb-1 d-flex align-items-end">
                                            <div>
                                                <label role="button" for="account-upload"
                                                     class="btn btn-sm btn-primary mb-75 mr-75 waves-effect waves-float waves-light">Upload</label>
                                                <input type="file" name="profile_photo" id="account-upload" accept="image/*"
                                                    hidden="">
                                                <p class="mb-0">Allowed file types: png, jpg, jpeg.</p>
                                            </div>
                                        </div>
                                        <!--/ upload and reset button -->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="first_name">Name</label>
                                                <input type="text" id="first_name" class="form-control" name="name" value="{{ $my_info->name }}"
                                                    placeholder="Enter your Name" fdprocessedid="vm95u">
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" id="email" class="form-control" name="email" value="{{ $my_info->email }}"
                                                    placeholder="demo@demo.com" fdprocessedid="ofhax">
                                                 @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            {{-- <button type="submit"
                                                class="btn btn-success waves-effect waves-float waves-light w-100 w-sm-auto"
                                                fdprocessedid="2s5rw8">Submit</button> --}}
                                                <button type="submit" class="btn btn-primary waves-effect waves-float waves-light">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-security" role="tabpanel">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">Change Password</h4>
                            </div>
                            <div class="py-2 card-body">
                                <form action="{{ route('my-profile.update.password') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="account-old-password">Current password</label>
                                                <div class="input-group form-password-toggle">
                                                    <input type="password" class="form-control" id="account-old-password"
                                                        name="password" placeholder="Enter current password">
                                                    <div class="cursor-pointer input-group-append">
                                                        <span role="button" class="input-group-text">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" class="feather feather-eye">
                                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                </path>
                                                                <circle cx="12" cy="12" r="3"></circle>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                                @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                @if (session('errorpass'))
                                                <span class="text-danger">{{ session('errorpass') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="account-new-password">New Password</label>
                                                <div class="input-group form-password-toggle">
                                                    <input type="password" class="form-control" id="account-new-password"
                                                        name="new_password" placeholder="Enter new password">
                                                    <div class="cursor-pointer input-group-append">
                                                        <span role="button" class="input-group-text">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" class="feather feather-eye">
                                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                </path>
                                                                <circle cx="12" cy="12" r="3"></circle>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                                @error('new_password')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="account-retype-new-password">Retype New Password</label>
                                                <div class="input-group form-password-toggle">
                                                    <input type="password" class="form-control"
                                                        id="account-retype-new-password" name="confirm_new_password"
                                                        placeholder="Retype new password">
                                                    <div class="cursor-pointer input-group-append">
                                                        <span role="button" class="input-group-text">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" class="feather feather-eye">
                                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                </path>
                                                                <circle cx="12" cy="12" r="3"></circle>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                                @error('confirm_new_password')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                @if (session('errornewpass'))
                                                <span class="text-danger">{{ session('errornewpass') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary waves-effect waves-float waves-light">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- profile info section -->
            </div>
        </div>

    </div>
</div>

@endsection

@push('js')

<script>
    // Update & Reset Profile photo on click of button
        $(document).ready(function(){
            let accountUploadImg = $('#account-upload-img');
            let accountUploadInput = $('#account-upload');
            let accountResetBtn = $('#account-reset');
            if (accountUploadInput) {
                accountUploadInput.on('change', function (e) {
                    var reader = new FileReader(),
                        files = e.target.files;
                    reader.onload = function () {
                        if (accountUploadImg) {
                            accountUploadImg.attr('src', reader.result);
                        }
                    };
                    reader.readAsDataURL(files[0]);
                });
            }
            // accountResetBtn.on('click', function(e){
            //     if (accountUploadImg) {
            //         accountUploadImg.attr('src', accountUploadImg.attr('data-reset-src'));
            //         // Reset accountUploadInput value
            //         if (accountUploadInput.val() != '') {
            //             accountUploadInput.val('');
            //         }
            //     }
            // });
        })

        $(document).ready(function () {

        });
</script>

@endpush
