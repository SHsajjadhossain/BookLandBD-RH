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
                                @forelse ($all_wishlist as $single_wishlist)
                                    <tr>
                                        <td class="pro-thumbnail"><a href="{{ route('product.productDetails', $single_wishlist->relationWithProduct->product_slug) }}"><img class="w-100" src="{{ asset('uploads/product_photoes') }}/{{ $single_wishlist->relationWithProduct->product_photo }}" alt="Product"></a></td>
                                        <td class="pro-title"><a href="{{ route('product.productDetails', $single_wishlist->relationWithProduct->product_slug) }}">{{ $single_wishlist->relationWithProduct->product_name }}</a></td>
                                        <td class="pro-price"><span>৳{{ $single_wishlist->relationWithProduct->product_price }}</span></td>
                                        <td class="pro-remove"><a href="{{ route('wishlist.remove', $single_wishlist->id) }}"><i class="far fa-trash-alt"></i></a></td>
                                        <td>
                                            <div class="add-cart-btn">
                                                <a href="cart.html" class="btn btn-outlined--primary"><span class="plus-icon">+</span>Add to Cart</a>
                                            </div>
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
                </form>
            </div>
        </div>
        <!-- Pagination Block -->
        <div class="row pt--30">
            <div class="col-md-12">
                <div class="pagination-block">
                    {{--........................ --}}
                    {{ $all_wishlist->links('frontend.pages.paginate') }}
                    {{--........................ --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart Page End -->

@endsection
