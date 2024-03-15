<?php

namespace App\Http\Controllers;

use App\Models\Template;

class LandingPageController extends Controller
{
    public function index()
    {
        $data['action_url'] = 'https://wa.me/62822333444555';
        $data['recomended_templates'] = Template::inRandomOrder()->where('is_recommended', 1)->limit(6)->get();
        $data['latest_templates'] = Template::latest()->with('category')->paginate(12);
        $data['categories'] = Template::select('category_id')->distinct()->with('category')->get();
        // dd($data['categories']);
        return view('landing-page', $data);
    }
}
