<?php

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
