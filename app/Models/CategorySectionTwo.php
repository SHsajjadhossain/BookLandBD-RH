<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorySectionTwo extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    function relationWithCategory()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
