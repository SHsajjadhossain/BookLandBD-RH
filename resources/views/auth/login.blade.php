@extends('frontend.layouts.app_frontend')

@section('title')

Pustok - Book Store | Login

@endsection

@push('custom-css')

<style>

.custom-login-form{
    margin-left: 24%;
}

.password-flex{
    display: flex;
    justify-content: space-between;
}

.password-flex a{
    font-size: 13px;
}

.remember_me{
    display: block;
    margin-top: -36px
}

</style>

@endpush

@section('content')

<!--=============================================
        =   Login page content  =
=============================================-->
<main class="page-section inner-page-sec-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 col-xs-12 custom-login-form">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="login-form">
                        <h4 class="login-title">Returning Customer</h4>
                        <p><span class="font-weight-bold">I am a returning customer</span></p>
                        <div class="row">
                            <div class="col-md-12 col-12 mb--15">
                                <label for="email">Enter your email address here...</label>
                                <input class="mb-0 form-control" type="email" id="email1" name="email"
                                    placeholder="Enter you email address here...">
                            </div>
                            <div class="col-12 mb--20">
                                <div class="mt-2 password-flex">
                                    <label for="password">Password</label>
                                    <a href="#">Forget Password?</a>
                                </div>
                                <input class="mb-0 form-control" type="password" id="login-password" name="password"
                                    placeholder="Enter your password">
                            </div>
                            <!-- Remember Me -->
                            <div class="block mt-2 mb-2">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox" name="remember">
                                    <span class="text-sm text-gray-600 ms-4 remember_me">{{ __('Remember me') }}</span>
                                </label>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-outlined">Login</button>
                                <a href="{{ route('register') }}" class="ms-2 new-register">Don't have an account? <span class="font-weight-bold">Register</span></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

@endsection
