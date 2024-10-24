<?php

namespace App\Http\Controllers;

use App\Models\CategorySectionOne;
use App\Models\CategorySectionTwo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.pages.home.home');
    }

    public function myProfile()
    {
        $my_info = Auth::user();

        return view('admin.pages.myProfile',compact('my_info'));
    }

    public function myProfileUpdate(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'email' => 'required|email',
            'profile_photo' => 'image|mimes:png,jpg,jpeg',
        ]);

        if ($request->hasFile('profile_photo')) {
            $location = public_path('uploads/profile_photoes/');
            if (Auth::user()->profile_photo == 'default.png') {
                $image = $request->file('profile_photo');
                $image_name = time().'_'.Str::random(3).'-'.uniqid().'.'.$request->file('profile_photo')->getClientOriginalExtension();
                $image->move($location, $image_name);
                User::find(Auth::id())->update([
                    'profile_photo' => $image_name
                ]);
            }
            else {
                unlink($location.Auth::user()->profile_photo);
                $image = $request->file('profile_photo');
                $image_name = time().'_'.Str::random(3).'-'.uniqid().'.'.$request->file('profile_photo')->getClientOriginalExtension();
                $image->move($location, $image_name);
                User::find(Auth::id())->update([
                    'profile_photo' => $image_name
                ]);
            }
        }

        User::find(Auth::id())->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return back()->with('success', 'Profile Updated Successfully!!');
    }

    public function myProfileUpdatePassword(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'new_password' => 'required|min:8',
            'confirm_new_password' => 'required',
        ]);

        if (Hash::check($request->password, Auth::user()->password)) {
            if ($request->new_password == $request->confirm_new_password) {
                User::find(Auth::id())->update([
                    'password' => bcrypt($request->new_password)
                ]);

                return back()->with('successpass', 'Your password updated successfully!!');
            }
            else {
                return back()->with('errornewpass', 'The password does not match');
            }
        }
        else {
            return back()->with('errorpass', 'The current password does not match');
        }
    }

    public function catSectionOneIndex()
    {
        return view('admin.pages.manageWebsite.categorySection.sectionOne.index',[
            'sectionOne_info' => CategorySectionOne::all(),
        ]);
    }

    public function catSectionTwoIndex()
    {
        return view('admin.pages.manageWebsite.categorySection.sectionTwo.index',[
            'sectionTwo_info' => CategorySectionTwo::all(),
        ]);
    }

    public function catSectionOneUpdate(Request $request, $id)
    {
        return $id;
    }

    public function catSectionTwoUpdate(Request $request, $id)
    {
        return $id;
    }
}
