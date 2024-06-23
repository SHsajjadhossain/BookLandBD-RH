@extends('frontend.layouts.app_frontend')

@section('title')

Pustok - Book Store | Register

@endsection

@push('custom-css')

<style>
    .custom-register-form {
        margin-left: 24%;
    }
</style>

@endpush

@section('content')

<!--=============================================
        =   Register page content  =
=============================================-->
<main class="page-section inner-page-sec-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12 col-lg-8 mb--30 mb-lg--0 custom-register-form">
                <!-- Register Form s-->
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="login-form">
                        <h4 class="login-title">New Customer</h4>
                        <p><span class="font-weight-bold">I am a new customer</span></p>
                        <div class="row">
                            <div class="col-md-12 col-12 mb--15">
                                <label for="email">Full Name</label>
                                <input class="mb-0 form-control" type="text" id="name" name="name"
                                    placeholder="Enter your full name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12 mb--20">
                                <label for="email">Email</label>
                                <input class="mb-0 form-control" type="email" id="email" name="email"
                                    placeholder="Enter Your Email Address Here..">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-6 mb--20">
                                <label for="password">Password</label>
                                <input class="mb-0 form-control" type="password" id="password" name="password"
                                    placeholder="Enter your password">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-6 mb--20">
                                <label for="password">Repeat Password</label>
                                <input class="mb-0 form-control" type="password" id="repeat-password" name="password_confirmation"
                                    placeholder="Repeat your password">
                                @error('password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-outlined">Register</button>
                                <a href="{{ route('login') }}" class="ms-2">Already have an account? <span class="font-weight-bold">Login</span></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

@endsection
