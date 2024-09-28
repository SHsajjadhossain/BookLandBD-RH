<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Wishlist;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function wishlistCart($wishlist_id)
    {
        $product_id = Wishlist::find($wishlist_id)->product_id;
        $cart_status = Cart::where('user_id', auth()->id())->where('product_id', $product_id)->exists();
        if ($cart_status)
        {
            Cart::where('user_id', auth()->id())->where('product_id', $product_id)->increment('quantity', 1);
        }
        else
        {
            Cart::create([
                'user_id' => auth()->id(),
                'product_id' => $product_id,
                'created_at' => Carbon::now()
            ]);
        }

        Wishlist::find($wishlist_id)->delete();
        return back();
    }
}
