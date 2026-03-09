<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckOutController extends Controller
{
    public function index(){
        // $carts = allCarts(); // cart data
        // $cart_total = 0;

        // foreach ($carts as $cart) {
        //     $cart_total += $cart->quantity * $cart->relationWithProduct->product_price;
        // }

        // $shipping_fee = 0; // shipping logic
        // $grand_total = $cart_total + $shipping_fee;

        if (strpos(url()->previous(), 'cart') || strpos(url()->previous(), 'checkout')) {
            return view('frontend.pages.checkOut');
            // return view('frontend.checkout', [
            //     'countries' => Country::where('status', 'active' )->get(['id', 'name'])
            // ]);
        }
        else {
            abort(404);
        }

    }
}
