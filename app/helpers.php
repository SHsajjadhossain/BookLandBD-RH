<?php

use Illuminate\Support\Facades\Auth;

function allCategories()
{
    return App\Models\Category::limit('9')->get();
}

function allWishlists()
{
    return App\Models\Wishlist::all();
}

function wishlistCheck($single_product)
{
    return App\Models\Wishlist::where('user_id', auth()->id())->where('product_id', $single_product)->exists();
}

function wishlist_id($single_product)
{
    return App\Models\Wishlist::where('user_id', auth()->id())->where('product_id', $single_product)->first()->id;
}

function allCarts()
{
    return App\Models\Cart::OrderBy('id', 'desc')->where('user_id', auth()->id())->take(3)->get();
}

function totalCarts()
{
    return App\Models\Cart::where('user_id', auth()->id())->get();
}
