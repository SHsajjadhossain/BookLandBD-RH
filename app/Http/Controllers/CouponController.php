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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Coupon $coupon)
    {
        //
    }
}
