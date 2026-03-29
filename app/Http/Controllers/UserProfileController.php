<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    // function of user profile update
    public function update(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'email' => 'required'
        ]);

        User::find(Auth::id())->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        if ($request->password != null) {
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

                    return back()->with('success', 'Your password updated successfully!!')->withFragment('account-info');
                }
                else {
                    return back()->with('errornewpass', 'The password does not match')->withFragment('account-info');
                }
            }
            else {
                return back()->with('errorpass', 'The current password does not match')->withFragment('account-info');
            }
        }

        return back()->with('success', 'Profile Updated Successfully!!')->withFragment('account-info');
    }
}
