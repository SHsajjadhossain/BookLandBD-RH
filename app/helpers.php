<?php

function allCategories(){
    return App\Models\Category::limit('9')->get();
}

function allWishlists(){
    return App\Models\Wishlist::all();
}
