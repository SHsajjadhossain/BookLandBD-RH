@extends('frontend.layouts.app_frontend')

@section('title')

Pustok - Wishlist

@endsection

@push('custom-css')

<style>
    .add-cart-btn .btn {
        padding: 0 20px;
        color: #333;
        font-size: 14px;
        font-weight: 600;
        text-transform: capitalize;
    }
</style>

@endpush

@section('content')

<section class="breadcrumb-section">
    <h2 class="sr-only">Site Breadcrumb</h2>
    <div class="container">
        <div class="breadcrumb-contents">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Wishlist</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<!-- Wishlist Page Start -->
<div class="cart_area inner-page-sec-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="https://htmldemo.net/pustok/pustok/">
                    <!-- Cart Table -->
                    <div class="cart-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="pro-thumbnail">Image</th>
                                    <th class="pro-title">Product</th>
                                    <th class="pro-price">Price</th>
                                    <th class="pro-remove">Remove</th>
                                    <th class="pro-remove">Add To Cart</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img src="image/products/product-1.jpg"
                                                alt="Product"></a></td>
                                    <td class="pro-title"><a href="#">Rinosin Glasses</a></td>
                                    <td class="pro-price"><span>$395.00</span></td>
                                    <td class="pro-remove"><a href="#"><i class="far fa-trash-alt"></i></a></td>
                                    <td>
                                        <div class="add-cart-btn">
                                            <a href="cart.html" class="btn btn-outlined--primary"><span class="plus-icon">+</span>Add to Cart</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img src="image/products/product-2.jpg"
                                                alt="Product"></a></td>
                                    <td class="pro-title"><a href="#">Silacon Glasses</a></td>
                                    <td class="pro-price"><span>$275.00</span></td>
                                    <td class="pro-remove"><a href="#"><i class="far fa-trash-alt"></i></a></td>
                                    <td>
                                        <div class="add-cart-btn">
                                            <a href="cart.html" class="btn btn-outlined--primary"><span class="plus-icon">+</span>Add to Cart</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img src="image/products/product-3.jpg"
                                                alt="Product"></a></td>
                                    <td class="pro-title"><a href="#">Easin Glasses</a></td>
                                    <td class="pro-price"><span>$295.00</span></td>
                                    <td class="pro-remove"><a href="#"><i class="far fa-trash-alt"></i></a></td>
                                    <td>
                                        <div class="add-cart-btn">
                                            <a href="cart.html" class="btn btn-outlined--primary"><span class="plus-icon">+</span>Add to Cart</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img src="image/products/product-4.jpg"
                                                alt="Product"></a></td>
                                    <td class="pro-title"><a href="#">Macrox Glasses</a></td>
                                    <td class="pro-price"><span>$220.00</span></td>
                                    <td class="pro-remove"><a href="#"><i class="far fa-trash-alt"></i></a></td>
                                    <td>
                                        <div class="add-cart-btn">
											<a href="cart.html" class="btn btn-outlined--primary"><span class="plus-icon">+</span>Add to Cart</a>
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
<!-- Cart Page End -->

@endsection
