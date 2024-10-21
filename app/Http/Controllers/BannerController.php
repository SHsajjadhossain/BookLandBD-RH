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

    public function edit($banner_id)
    {
        return view('admin.pages.Banner.edit', [
            'single_banner' => Banner::find($banner_id),
        ]);
    }

    public function update(Request $request, $banner_id)
    {
        $request->validate([
            'banner_title_small' => 'required',
            'banner_title_big' => 'required',
            'banner_title_text' => 'required',
            'banner_photo' => 'required|image|mimes:png,jpg,jpeg|dimensions:width=825, height=420',
        ]);
    }
}
