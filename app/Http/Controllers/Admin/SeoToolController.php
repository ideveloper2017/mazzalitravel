<?php

namespace App\Http\Controllers\Admin;

use App\Models\ProductClick;
use App\Models\Seotool;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class SeoToolController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function analytics()
    {
        $tool = Seotool::find(1);
        return view('admin.seotool.googleanalytics',compact('tool'));
    }

    public function analyticsupdate(Request $request)
    {
        $tool = Seotool::findOrFail(1);
        $tool->update($request->all());
        Session::flash('success', 'Data updated successfully.');
        return redirect()->back();
    }  

    public function keywords()
    {
        $tool = Seotool::find(1);
        return view('admin.seotool.meta-keywords',compact('tool'));
    }

    public function keywordsupdate(Request $request)
    {
        $tool = Seotool::findOrFail(1);
        $tool->update($request->all());
        Session::flash('success', 'Data updated successfully.');
        return redirect()->back();
    }
     
}
