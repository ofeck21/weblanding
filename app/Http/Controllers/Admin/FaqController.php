<?php

namespace App\Http\Controllers\Admin;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
    public function index()
    {
        $data['pageTitle'] = "FAQ";
        $data['breadcrumbs'] = [
            [
                'name'  => 'Home',
                'link'  => route('dashboard')
            ],
            [
                'name'  => 'Application',
            ],
            [
                'name'      => 'FAQ',
                'active'    => true
            ]
        ];
        $data['faqs'] = Faq::latest()->paginate(8);
        return view('admin.faq.index', $data);
    }

    public function create()
    {
        $data['pageTitle'] = "Add FAQ";
        $data['breadcrumbs'] = [
            [
                'name'  => 'Home',
                'link'  => route('dashboard')
            ],
            [
                'name'  => 'Application',
            ],
            [
                'name'  => 'FAQ',
                'link'  => route('faqs.index')
            ],
            [
                'name'      => 'Create',
                'active'    => true
            ]
        ];
        return view('admin.faq.form', $data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'question'          => 'required',
            'answer'   => 'required',
        ]);

        $faq = new Faq();
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();

        return redirect()->route('faqs.index')->with('success', 'FAQ has been added');
    }

    public function edit($id)
    {
        $data['pageTitle'] = "Edit FAQ";
        $data['breadcrumbs'] = [
            [
                'name'  => 'Home',
                'link'  => route('dashboard')
            ],
            [
                'name'  => 'Application',
            ],
            [
                'name'  => 'FAQ',
                'link'  => route('faqs.index')
            ],
            [
                'name'      => 'Edit',
                'active'    => true
            ]
        ];
        $data['faq'] = Faq::find($id);
        return view('admin.faq.form', $data);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'question'          => 'required',
            'answer'   => 'required',
        ]);

        $faq = Faq::find($id);
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();

        return redirect()->route('faqs.index')->with('success', 'FAQ has been updated');
    }

    public function destroy($id)
    {
        $faq = Faq::find($id);
        $faq->delete();

        return redirect()->route('faqs.index')->with('success', 'FAQ has been deleted');
    }
}
