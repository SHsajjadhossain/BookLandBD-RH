<?php

function allCategories(){
    return App\Models\Category::paginate(9);
}
