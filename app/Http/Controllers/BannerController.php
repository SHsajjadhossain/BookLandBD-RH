<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        return view('admin.pages.manageWebsite.banner.index',[
            'banners' => Banner::all()
        ]);
    }

    public function edit($banner_id)
    {
        return view('admin.pages.manageWebsite.banner.edit', [
            'single_banner' => Banner::find($banner_id),
        ]);
    }

    public function update(Request $request, $banner_id)
    {

        $request->validate([
            'banner_title_small' => 'required',
            'banner_title_big' => 'required',
            'banner_text' => 'required',
            'banner_photo' => 'image|mimes:png,jpg,jpeg|dimensions:width=825, height=420',
        ]);

        if ($request->hasFile('banner_photo')) {
            $location = public_path('uploads/banner_photoes/');
            $image = $request->file('banner_photo');
            $image_name = uniqid() . time() .'.'. $image->getClientOriginalExtension();
            if (Banner::find($banner_id)->banner_photo == 'banner-1.jpg' || Banner::find($banner_id)->banner_photo == 'banner-2.jpg') {
                $image->move($location, $image_name);
                Banner::find($banner_id)->update([
                    'banner_photo' => $image_name,
                ]);
            }
            else {
                unlink($location.Banner::find($banner_id)->banner_photo);
                $image->move($location, $image_name);
                Banner::find($banner_id)->update([
                    'banner_photo' => $image_name,
                ]);
            }
        }

        Banner::find($banner_id)->update([
            'banner_title_small' => $request->banner_title_small,
            'banner_title_big' => $request->banner_title_big,
            'banner_text' => $request->banner_text,
        ]);

        return redirect(route('banner.index'))->with('banner_update_success', 'Banner updated successfully!!');

    }
}
