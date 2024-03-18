<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function app()
    {
        $data['pageTitle'] = "Application Setting";
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
                'name'  => 'Application',
                'active'    => true
            ]
        ];
        return view('admin.setting.app', $data);
    }

    public function updateAppSetting(Request $request)
    {
        // Validate the request data
        $request->validate([
            'key' => 'required',
            'value' => 'required',
        ]);

        // Update the setting in the database
        // Assuming you have a Setting model
        $setting = Setting::where('key', $request->key)->first();
        if ($setting) {
            $setting->value = $request->value;
            $setting->save();
        }

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Setting updated successfully');
    }

    public function landingPageSetting()
    {
        $data['pageTitle'] = "Landing Page Setting";
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
                'name'  => 'Landing Page',
                'active'    => true
            ]
        ];
        return view('admin.setting.landing', $data);
    }

    public function updateLandingPageSetting(Request $request)
    {
        // Validate the request data
        $request->validate([
            'key' => 'required',
            'value' => 'required',
        ]);

        // Update the setting in the database
        // Assuming you have a Setting model
        $setting = Setting::where('key', $request->key)->first();
        if ($setting) {
            $setting->value = $request->value;
            $setting->save();
        }

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Landing page setting updated successfully');
    }
}
