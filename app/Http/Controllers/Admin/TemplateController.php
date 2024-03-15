<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Template;
use Illuminate\Http\Request;

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

    public function create()
    {
        $data['pageTitle'] = "Add Template";
        $data['breadcrumbs'] = [
            [
                'name'  => 'Home',
                'link'  => route('dashboard')
            ],
            [
                'name'  => 'Application',
            ],
            [
                'name'  => 'Template',
                'link'  => route('templates.index')
            ],
            [
                'name'      => 'Create',
                'active'    => true
            ]
        ];
        $data['categories'] = Category::all();
        return view('admin.template.form', $data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required',
            'category'   => 'required',
            'demo_url'      => 'required',
            'thumbnail'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'is_recommended'=> 'required|boolean'
        ]);

        try {
            $thumbnail = $request->file('thumbnail');
            $thumbnailName = time() . '.' . $thumbnail->extension();
            $thumbnail->move(public_path('themes'), $thumbnailName);

            try {
                Template::create([
                    'name'          => $request->name,
                    'category_id'   => $request->category,
                    'demo_url'      => $request->demo_url,
                    'thumbnail'     => $thumbnailName,
                    'is_recommended'=> $request->is_recommended
                ]);
                return redirect()->route('templates.index')->with('success', 'Template added successfully')->withInput($request->input());
            } catch (\Throwable $th) {
                return back()->withInput($request->input())->with('error', 'Failed to add template : ' . $th->getMessage());
            }
        } catch (\Throwable $th) {
            return back()->withInput($request->input())->with('error', 'Failed to upload thumbnail');
        }


    }

}
