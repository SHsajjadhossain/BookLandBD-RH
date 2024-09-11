<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        if (strpos(url()->previous(), "product/details")) {
            return redirect(url()->previous());
        }

        return view('frontend.user.layouts.dashboard');
    }
}
