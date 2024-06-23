<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('admin.pages.home');
    }

    public function myProfile() {
        return view('admin.pages.myProfile');
    }
}
