<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $data['action_url'] = 'https://wa.me/62822333444555';
        return view('landing-page', $data);
    }
}
