<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    function relationWithCategory(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    function relationWithProduct(){
        return $this->hasMany(Product::class, 'sub_category_id');
    }
}
