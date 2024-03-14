<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class TemplateController extends Controller
{
    public function index()
    {
        $data['pageTitle'] = "Template";
        $data['breadcrumbs'] = [
            [
                'name'  => 'Home',
                'link'  => route('dashboard')
            ],
            [
                'name'  => 'Application',
            ],
            [
                'name'      => 'Template',
                'active'    => true
            ]
        ];
        $data['templates'] = [];
        return view('admin.template.index', $data);
    }

}
