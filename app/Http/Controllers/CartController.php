<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Coupon;
use App\Models\Product;
use App\Models\Wishlist;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        if (isset($_GET['coupon_code'])) {
            if ($_GET['coupon_code']) {
                $coupon_name = $_GET['coupon_code'];
                if (Coupon::where('coupon_name', $coupon_name)->exists()) {
                    $coupon_info = Coupon::where('coupon_name', $coupon_name)->first();
                    if ($coupon_info->coupon_limit != 0) {
                        if ($coupon_info->coupon_validity < Carbon::today()->format('Y-m-d')) {
                            $discount_total = 0;
                            return redirect('cart')->with('coupon_error', $coupon_name .' coupon date is over');
                        }
                        else {
                            $discount_total = (session('s_cart_total') * $coupon_info->discount_percentage) / 100;
                            $coupon_name = $_GET['coupon_code'];
                        }

                    }
                    else {
                        $discount_total = 0;
                        return redirect('cart')->with('coupon_error', $coupon_name .' coupon limit is over');
                    }

                }
                else {
                    $discount_total = 0;
                    return redirect('cart')->with('coupon_error', $coupon_name.' coupon is invalid');
                }
            }
            else {
                $discount_total = 0;
                $coupon_name = "";
            }
        }
        else {
            $discount_total = 0;
            $coupon_name = "";
        }
        return view('frontend.pages.cart', compact('discount_total', 'coupon_name'));
    }

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

    public function addToCart(Request $request, $product_id)
    {
        $cart_status = Cart::where('user_id', auth()->id())->where('product_id', $product_id)->exists();

        if (Product::find($product_id)->product_quantity < $request->quantity) {
            return back()->with('stockout', 'Stock not available');
        }
        else {
            if ($cart_status)
            {
                if (Product::find($product_id)->product_quantity < (Cart::where('user_id', auth()->id())->where('product_id', $product_id)->first()->quantity +  $request->quantity)) {
                    return back()->with('stockout', 'Already in the cart');
                }
                else {
                    Cart::where('user_id', auth()->id())->where('product_id', $product_id)->increment('quantity', $request->quantity);
                }
            }
            else
            {
                Cart::insert([
                    'user_id' => auth()->id(),
                    'product_id' => $product_id,
                    'quantity' => $request->quantity,
                    'created_at' => Carbon::now(),
                ]);
            }
        }

        return back();
    }

    public function cartRemove($id)
    {
        Cart::find($id)->delete();
        return back()->with('cart_remove_success', 'Cart Removed Successfully !!');
    }

    public function cartUpdate(Request $request)
    {
        foreach ($request->quantity as $cart_id => $updated_quantity) {
            if (Product::find(Cart::find($cart_id)->product_id)->product_quantity < $updated_quantity) {
                return back()->with([
                    'stockout' => 'Stock not available',
                    'cart_id' => $cart_id,
                ]);
            }
            else{
                    Cart::find($cart_id)->update([
                    'quantity' => $updated_quantity
                ]);
            }
        }
        return back()->with('cart_update_success', 'Cart Updated Successfully !!');
    }

    public function cartClear($user_id)
    {
        // Cart::where('user_id', $user_id)->delete();
        // return back();
    }
}
