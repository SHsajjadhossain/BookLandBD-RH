<?php

function allCategories(){
    return App\Models\Category::limit('9')->get();
}


