<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
        'category_photo',
    ];

    function relationWithSubCategory(){
        return $this->hasMany(SubCategory::class, 'category_id');
    }

    function relationWithProduct(){
        return $this->hasMany(Product::class, 'category_id');
    }
}
