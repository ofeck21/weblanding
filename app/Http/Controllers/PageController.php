<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function faq() {
        $data['faqs'] = Faq::all();
        return view('landing-page.page.faq', $data);
    }
}
