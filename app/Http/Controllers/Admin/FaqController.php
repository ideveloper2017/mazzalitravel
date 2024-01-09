<?php

namespace App\Http\Controllers\Admin;

use App\Models\Faq;
use App\Models\Pagesetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

  public function index()
    {
        $faqs = Faq::orderBy('id','desc')->get();
        $pagedata = Pagesetting::find(1); 
        return view('admin.faq.index',compact('faqs','pagedata'));
    }


    public function create()
    {
        return view('admin.faq.create');
    }

    //Upadte FAQ Page Section Settings
    public function status($id,$status)
    {
        $faq = Faq::findOrFail($id);
        $faq->status = $status;
        $faq->update();
        return redirect()->route('admin-fq-index')->with('success','Successfully Updated The Status.');
    }

    public function store(Request $request)
    {
        $faq = new Faq();
        $data = $request->all();
        $faq->fill($data)->save();
        return redirect()->route('admin-fq-index')->with('success','New Faq Added Successfully.');
    }

    public function edit($id)
    {
        $faq = Faq::findOrFail($id);
        return view('admin.faq.edit',compact('faq'));
    }

    public function update(Request $request, $id)
    {
        $faq = Faq::findOrFail($id);
        $data = $request->all();
        $faq->update($data);
        return redirect()->route('admin-fq-index')->with('success','Faq Updated Successfully.');
    }


    public function destroy($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();
        return redirect()->route('admin-fq-index')->with('success','Faq Deleted Successfully.');
    }
}
