@extends('frontend.layouts.app_frontend')

@section('title')

Pustok - Book Store | Dashboard

@endsection

@section('content')
    <div class="page-section inner-page-sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <!-- My Account Tab Menu Start -->
                        <div class="col-lg-3 col-12">
                            <div class="myaccount-tab-menu nav" role="tablist">
                                <a href="#dashboad" class="active" data-bs-toggle="tab"><i
                                        class="fas fa-tachometer-alt"></i>
                                    Dashboard</a>
                                <a href="#orders" data-bs-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>
                                <a href="#download" data-bs-toggle="tab"><i class="fas fa-download"></i> Download</a>
                                <a href="#payment-method" data-bs-toggle="tab"><i class="fa fa-credit-card"></i>
                                    Payment
                                    Method</a>
                                <a href="#address-edit" data-bs-toggle="tab"><i class="fa fa-map-marker"></i>
                                    address</a>
                                <a href="#account-info" data-bs-toggle="tab"><i class="fa fa-user"></i> Account
                                    Details</a>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        <i class="fas fa-sign-out-alt"></i>
                                        Logout
                                    </a>
                                </form>
                            </div>
                        </div>
                        <!-- My Account Tab Menu End -->
                        <!-- My Account Tab Content Start -->
                        <div class="col-lg-9 col-12 mt--30 mt-lg--0">
                            <div class="tab-content" id="myaccountContent">
                                @if (session('success'))
                                    <div class="pt-2 pb-2 alert alert-success" id="success-alert">
                                        <span class="ml-2">{{ session('success') }}</span>
                                    </div>
                                @endif
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Dashboard</h3>
                                        <div class="mb-20 welcome">
                                            <p>Hello, <strong>{{ $customer_info->name }}</strong> (If Not <strong>{{ $customer_info->name }}
                                                    !</strong><a href="login-register.html" class="logout">
                                                    Logout</a>)</p>
                                        </div>
                                        <p class="mb-0">From your account dashboard. you can easily check &amp; view
                                            your
                                            recent orders, manage your shipping and billing addresses and edit your
                                            password and account details.</p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="orders" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Orders</h3>
                                        <div class="text-center myaccount-table table-responsive">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Name</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                        <th>Total</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Mostarizing Oil</td>
                                                        <td>Aug 22, 2018</td>
                                                        <td>Pending</td>
                                                        <td>$45</td>
                                                        <td><a href="cart.html" class="btn">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Katopeno Altuni</td>
                                                        <td>July 22, 2018</td>
                                                        <td>Approved</td>
                                                        <td>$100</td>
                                                        <td><a href="cart.html" class="btn">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Murikhete Paris</td>
                                                        <td>June 12, 2017</td>
                                                        <td>On Hold</td>
                                                        <td>$99</td>
                                                        <td><a href="cart.html" class="btn">View</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="download" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Downloads</h3>
                                        <div class="text-center myaccount-table table-responsive">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Date</th>
                                                        <th>Expire</th>
                                                        <th>Download</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Mostarizing Oil</td>
                                                        <td>Aug 22, 2018</td>
                                                        <td>Yes</td>
                                                        <td><a href="#" class="btn">Download File</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Katopeno Altuni</td>
                                                        <td>Sep 12, 2018</td>
                                                        <td>Never</td>
                                                        <td><a href="#" class="btn">Download File</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Payment Method</h3>
                                        <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Billing Address</h3>
                                        <address>
                                            <p><strong>Alex Tuntuni</strong></p>
                                            <p>1355 Market St, Suite 900 <br>
                                                San Francisco, CA 94103</p>
                                            <p>Mobile: (123) 456-7890</p>
                                        </address>
                                        <a href="#" class="btn btn--primary"><i class="fa fa-edit"></i>Edit
                                            Address</a>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="account-info" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Account Details</h3>
                                        <div class="account-details-form">
                                            <form action="{{ route('user.profile.update') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="active_tab" value="account-info">
                                                <div class="row">
                                                    <div class="col-12 mb--30">
                                                        <input id="display-name" value="{{ auth()->user()->name }}" name="name" placeholder="Full Name" type="text">
                                                        @error('name')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-12 mb--30">
                                                        <input id="email" value="{{ auth()->user()->email }}" name="email" placeholder="Email Address" type="email">
                                                        @error('email')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-12 mb--30">
                                                        <h4>Password change</h4>
                                                    </div>
                                                    <div class="col-12 mb--30">
                                                        <input id="current-pwd" name="password" placeholder="Current Password"
                                                            type="password">
                                                            @error('password')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror

                                                            @if (session('errorpass'))
                                                                <span class="text-danger">{{ session('errorpass') }}</span>
                                                            @endif
                                                    </div>
                                                    <div class="col-lg-6 col-12 mb--30">
                                                        <input id="new-pwd" name="new_password" placeholder="New Password" type="password">
                                                        @error('new_password')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-lg-6 col-12 mb--30">
                                                        <input id="confirm-pwd" name="confirm_new_password" placeholder="Confirm Password"
                                                            type="password">
                                                        @error('confirm_new_password')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror

                                                        @if (session('errornewpass'))
                                                            <span class="text-danger">{{ session('errornewpass') }}</span>
                                                        @endif
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="btn btn--primary">Save Changes</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                            </div>
                        </div>
                        <!-- My Account Tab Content End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

<script>
    $(document).ready(function () {
        // Tab active when validation error
        @if ($errors->any() || session('errorpass') || session('errornewpass'))
            $('.myaccount-tab-menu a[href="#account-info"]').tab('show');
            window.location.hash = '#account-info';
        @endif

        // Page load URL hash and active tab set
        if (window.location.hash) {
            $('.myaccount-tab-menu a[href="' + window.location.hash + '"]').tab('show');
        }

        // when click on tab URL hash update
        $('.myaccount-tab-menu a[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) {
            window.location.hash = e.target.hash;
        });

        // Alert fadeout
        setTimeout(function () {
            $('#success-alert').fadeOut('slow');
        }, 3500); // 3.5 seconds
    });
</script>

@endpush
