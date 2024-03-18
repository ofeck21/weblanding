<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class UserControlller extends Controller
{
    public function profile()
    {
        $data['pageTitle'] = "Profile";
        $data['breadcrumbs'] = [
            [
                'name'  => 'Home',
                'link'  => route('dashboard')
            ],
            [
                'name'  => 'Settings',
                'link'  => '#'
            ],
            [
                'name'  => 'Profile',
                'active'    => true
            ]
        ];
        return view('admin.profile', $data);
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

        $user = auth()->user();
        User::where('id', $user->id)->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return redirect()->back()->with('success', 'Profile updated successfully');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|confirmed'
        ]);

        $user = auth()->user();
        if (Auth::check($request->current_password, $user->new_password)) {
            User::where('id', $user->id)->update([
                'password' => \Hash::make($request->new_password)
            ]);
            return redirect()->back()->with('success', 'Password updated successfully');
        } else {
            return redirect()->back()->with('error', 'Current password is incorrect');
        }
    }
}
