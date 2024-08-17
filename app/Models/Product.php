<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    function relationWithCategory(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    function relationWithSubCategory(){
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }
}
