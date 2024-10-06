@extends('frontend.layouts.app_frontend')

@section('title')

Pustok - Cart

@endsection

@push('custom-css')

<style>
    .bread-active {
        font-weight: 700;
    }

    .update-block .btn{
        width: 90%;
        background: #62ab00;
        color: #ffffff;
        border-color: #62ab00;
        transition: .4s;
    }

    .update-block .btn:hover{
        background: #000000;
        border-color: #000000;
    }

    .cart-summary .cart-summary-button .c-btn{
        width: 100%;
        padding: 25px 20px;
    }

    .cart-summary{
        padding-left: 0;
    }

    .cart-table .table tbody tr td .coupon-block .coupon-text input{
        width: 50%;
        padding: 6px 10px 5px;
    }

    .cart-table td.pro-thumbnail a img{
        width: 110px;
    }

    .cart-table td.pro-quantity .pro-qty{
        margin-right: 30px;
    }
</style>

@endpush

@section('content')

<!-- breadcrumb-area start -->

<section class="breadcrumb-section">
    <h2 class="sr-only">Site Breadcrumb</h2>
    <div class="container">
        <div class="breadcrumb-contents">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                    <li class="breadcrumb-item bread-active active">Cart</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<!-- breadcrumb-area end -->

<!-- Cart Page Start -->
<main class="cart-page-main-block inner-page-sec-padding-bottom">
    <div class="cart_area cart-area-padding ">
        <div class="container">
            <div class="page-section-title">
                <h1>Shopping Cart</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <form action="#" class="">
                        <!-- Cart Table -->
                        <div class="cart-table table-responsive mb--40">
                            <table class="table">
                                <!-- Head Row -->
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Image</th>
                                        <th class="pro-title">Product</th>
                                        <th class="pro-price">Price</th>
                                        <th class="pro-quantity">Quantity</th>
                                        <th class="pro-subtotal">Total</th>
                                        <th class="pro-remove">Aciton</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $cart_total = 0;
                                    @endphp
                                    <!-- Product Row -->
                                    @forelse (allCarts() as $single_cart)
                                    <tr>
                                        <td class="pro-thumbnail">
                                            <a href="#">
                                                <img src="{{ asset('uploads/product_photoes') }}/{{ $single_cart->relationWithProduct->product_photo }}" alt="Product photo not found">
                                            </a>
                                        </td>
                                        <td class="pro-title"><a href="#">{{ $single_cart->relationWithProduct->product_name }}</a></td>
                                        <td class="pro-price"><span>৳{{ $single_cart->relationWithProduct->product_price }}</span></td>
                                        <td class="pro-quantity">
                                            <div class="pro-qty">
                                                {{-- <div class="count-input-block">
                                                    <input type="number" class="text-center form-control" value="1">
                                                </div> --}}
                                                <div class="count-input-block">
                                                    <input type="number" class="text-center form-control" value="{{ $single_cart->quantity }}">
                                                    <div class="count-input-btns">
                                                        <button class="inc-ammount count-btn"><i class="zmdi zmdi-chevron-up"></i></button>
                                                        <button class="dec-ammount count-btn"><i class="zmdi zmdi-chevron-down"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="pro-subtotal">
                                            <span>৳{{ $single_cart->quantity * $single_cart->relationWithProduct->product_price }}</span>
                                            @php
                                                $cart_total += $single_cart->quantity * $single_cart->relationWithProduct->product_price
                                            @endphp
                                        </td>
                                        <td class="pro-remove">
                                            <a href="#"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td><span>No Product In Cart</span></td>
                                    </tr>
                                    @endforelse
                                    <!-- Discount Row  -->
                                    <tr>
                                        <td colspan="6">
                                            <div class="text-right update-block">
                                                <input type="submit" class="btn btn-outlined" name="update_cart" value="Update cart">
                                                <input type="hidden" id="_wpnonce" name="_wpnonce" value="05741b501f"><input type="hidden" name="_wp_http_referer"
                                                    value="/petmark/cart/">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6" class="actions">
                                            <div class="coupon-block">
                                                <div class="coupon-text">
                                                    <label for="coupon_code">Coupon:</label>
                                                    <input type="text" name="coupon_code" class="input-text"
                                                        id="coupon_code" value="" placeholder="Coupon code">
                                                </div>
                                                <div class="coupon-btn">
                                                    <input type="submit" class="btn btn-outlined" name="apply_coupon"
                                                        value="Apply coupon">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="cart-section-2">
        <div class="container">
            <div class="row">
                {{-- <div class="col-lg-6 col-12 mb--30 mb-lg--0">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td colspan="5" class="actions">
                                    <div class="coupon-block">
                                        <div class="coupon-text">
                                            <label for="coupon_code">Coupon:</label>
                                            <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code">
                                        </div>
                                        <div class="coupon-btn">
                                            <input type="submit" class="btn btn-outlined" name="apply_coupon" value="Apply coupon">
                                        </div>
                                    </div>
                                    <div class="text-right update-block">
                                        <input type="submit" class="btn btn-outlined" name="update_cart" value="Update cart">
                                        <input type="hidden" id="_wpnonce" name="_wpnonce" value="05741b501f"><input type="hidden" name="_wp_http_referer"
                                            value="/petmark/cart/">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div> --}}
                <!-- Cart Summary -->
                <div class="col-lg-12 col-12 d-flex">
                    <div class="cart-summary">
                        <div class="cart-summary-wrap">
                            <h4><span>Cart Summary</span></h4>
                            <p>Sub Total <span class="text-primary">৳{{ $cart_total }}</span></p>
                            <p>Shipping Cost <span class="text-primary">$00.00</span></p>
                            <h2>Grand Total <span class="text-primary">$1250.00</span></h2>
                        </div>
                        <div class="cart-summary-button">
                            <a href="checkout.html" class="checkout-btn c-btn btn--primary">Proceed To Checkout</a>
                            {{-- <button class="update-btn c-btn btn-outlined">Update Cart</button> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Cart Page End -->

@endsection
