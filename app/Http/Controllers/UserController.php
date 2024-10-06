<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        // if (strpos(url()->previous(), "product/details")) {
        //     return redirect(url()->previous());
        // }

        return view('frontend.user.layouts.dashboard',[
            'customer_info' => User::find(Auth::user()->id)
        ]);
    }
}
