<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    function relationWithProduct(){
        return $this->belongsTo(Product::class, 'product_id');
    }
}
