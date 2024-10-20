<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        return view('admin.pages.Banner.index',[
            'banners' => Banner::all()
        ]);
    }
}
