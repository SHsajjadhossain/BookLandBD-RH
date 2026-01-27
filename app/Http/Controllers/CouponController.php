<?php

namespace App\Http\Controllers;

use App\Http\Requests\CouponFormRequest;
use App\Models\Category;
use App\Models\Coupon;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coupons = Coupon::orderBy('created_at', 'desc')->paginate();
        return view('admin.pages.coupon.index',[
            'coupons' => $coupons,
            'categories' => Category::orderBy('created_at', 'desc')->paginate(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.coupon.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CouponFormRequest $request)
    {
        $request->validate([
            'coupon_name' => 'required',
            'discount_percentage' => 'required',
            'coupon_validity' => 'required|date|after:today',
            'coupon_limit' => 'required|integer|min:1',
        ]);
        Coupon::insert($request->except('_token') + [
            'created_at' => Carbon::now(),
        ]);
        return back()->with('success', 'Coupon Created Successfully !!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Coupon $coupon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Coupon $coupon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Coupon $coupon)
    {
        $request->validate([
            'coupon_name' => 'required',
            'discount_percentage' => 'required',
            'coupon_validity' => 'required|date|after:today',
            'coupon_limit' => 'required|integer',
        ]);

        Coupon::findOrFail($coupon->id)->update([
            'coupon_name' => $request->coupon_update_name,
            'discount_percentage' => $request->discount_update_percentage,
            'coupon_validity' => $request->coupon_update_validity,
            'coupon_limit' => $request->coupon_update_limit,
        ]);

        return back()->with('success', 'Coupon Updated Successfully !!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Coupon $coupon)
    {
        Coupon::findOrFail($coupon->id)->delete();

        return response([
            'status' => 'success',
            'message' => 'Coupon Deleted Successfully'
        ]);
    }
}
