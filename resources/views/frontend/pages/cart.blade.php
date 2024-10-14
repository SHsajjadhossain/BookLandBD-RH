@extends('frontend.layouts.app_frontend')

@section('title')

Pustok - Cart

@endsection

@push('custom-css')

<style>
    .bread-active {
        font-weight: 700;
    }

    .cart-shoping-update-wrapper{
        display: flex;
    }

    .cart-continue-shopping{
        flex: 25%;
    }

    .cart-continue-shopping .btn-outlined{
        background: #62ab00;
        color: #ffffff;
        transition: .4s;
    }

    .cart-continue-shopping .btn-outlined:hover{
        background: #000000;
        border-color: #000000;
    }

    .cart-update{
        flex: 45%;
    }

    .cart-clear{
        flex: 25%;
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
                @if (session('cart_update_success'))
                <div class="alert alert-success cart_update_success">
                    {{ session('cart_update_success') }}
                </div>
                @endif
                @if (session('cart_remove_success'))
                <div class="alert alert-danger cart_remove_success">
                    {{ session('cart_remove_success') }}
                </div>
                @endif
            </div>
            <div class="row">
                <div class="col-12">
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
                                <form action="{{ route('cart.update') }}" method="POST">
                                    @csrf
                                @php
                                    $cart_total = 0;
                                    $flag = false;
                                @endphp
                                <!-- Product Row -->
                                @forelse (allCarts() as $single_cart)
                                <tr>
                                    <td class="pro-thumbnail">
                                        <a>
                                            <img src="{{ asset('uploads/product_photoes') }}/{{ $single_cart->relationWithProduct->product_photo }}" alt="Product photo not found">
                                        </a>
                                    </td>
                                    <td class="pro-title">
                                        <a>{{ $single_cart->relationWithProduct->product_name }}</a>
                                        <br>
                                        @if ($single_cart->quantity > available_quantity($single_cart->product_id))
                                        @php
                                            $flag = true;
                                        @endphp
                                        Availability : <span class="text-danger">Stock Out</span>
                                        @endif

                                        @if (session('cart_id') == $single_cart->id)
                                            @if (session('stockout'))
                                            Availability : <span class="text-danger">{{ session('stockout') }}</span>
                                            @endif
                                        @endif
                                    </td>
                                    <td class="pro-price"><span>৳{{ $single_cart->relationWithProduct->product_price }}</span></td>
                                    <td class="pro-quantity">
                                        <div class="pro-qty">
                                            {{-- <div class="count-input-block">
                                                <input type="number" class="text-center form-control" value="1">
                                            </div> --}}
                                            <div class="count-input-block">
                                                <input type="number" class="text-center form-control" name="quantity[{{ $single_cart->id }}]" value="{{ $single_cart->quantity }}">
                                                <div class="count-input-btns">
                                                    <div class="inc-ammount count-btn" style="cursor: pointer;"><i class="zmdi zmdi-chevron-up"></i></div>
                                                    <div class="dec-ammount count-btn" style="cursor: pointer;"><i class="zmdi zmdi-chevron-down"></i></div>
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
                                        <a href="{{ route('cart.remove', $single_cart->id) }}"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td><span>No Product In Cart</span></td>
                                </tr>
                                @endforelse
                                <!-- Discount Row  -->
                                <tr>
                                    <td colspan="6" class="actions">
                                        <div class="cart-shoping-update-wrapper">
                                            <div class="cart-continue-shopping">
                                                <a href="{{ route('frontend.shop') }}" class="btn btn-outlined">Continue Shopping</a>
                                            </div>
                                            <div class="cart-update">
                                                <button type="submit" class="btn btn-outlined">Update cart</button>
                                                </form>
                                            </div>
                                            <div class="cart-clear">
                                                <a href="#" class="btn btn-outlined">Clear Shopping Cart</a>
                                            </div>
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
                        @if ($flag)
                        <div class="text-center alert alert-danger" style="border-radius: 50px;">
                            <span class="checkout-btn" style="text-transform: uppercase;">Please Remove Stock Out Product First</span>
                        </div>
                        @else
                        <div class="cart-summary-button">
                            <a href="checkout.html" class="checkout-btn c-btn btn--primary">Proceed To Checkout</a>
                            {{-- <button class="update-btn c-btn btn-outlined">Update Cart</button> --}}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Cart Page End -->

@endsection

@push('custom-js')
<script>
    $(document).ready(function () {
        setTimeout(() => {
            $('.cart_update_success').fadeOut('slow');
        }, 3000);

        setTimeout(() => {
            $('.cart_remove_success').fadeOut('slow');
        }, 3000);
    });
</script>
@endpush
