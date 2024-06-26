<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function index(){
        return view('admin.pages.home');
    }

    public function myProfile(){
        $my_info = Auth::user();

        return view('admin.pages.myProfile',compact('my_info'));
    }

    public function myProfileUpdate(Request $request){
        $request->validate([
            'name'  => 'required',
            'email' => 'required | email',
            'profile_photo' => 'image|mimes:png,jpg,jpeg',
        ]);

        // if ($request->hasFile('profile_photo')) {
        //     $image = $request->file('profile_photo');
        //     $image_name = time().'_'.Str::random(10).'-'.uniqid().'.'.$request->file('profile_photo')->getClientOriginalExtension();
        //     $location = public_path('uploads/profile_photoes');
        //     $image->move($location, $image_name);
        //     User::find(Auth::id())->update([
        //         'profile_photo' => $image_name
        //     ]);
        // }

        User::find(Auth::id())->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return back()->with('success', 'Profile Updated Successfully!!');
    }
}
