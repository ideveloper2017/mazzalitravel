<?php

namespace App\Http\Controllers\Admin;

use App\Models\Resume;
use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateValidationRequest;
use App\Http\Controllers\Controller;

class ResumeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $datas = Resume::orderBy('id','desc')->get();
        return view('admin.resume.index',compact('datas'));
    }

    public function create()
    {
        $doctors = Doctor::all();
        return view('admin.resume.create',compact('doctors'));
    }

    public function store(UpdateValidationRequest $request)
    {
        $resume = new Resume();
        $data = $request->all();
        $resume->fill($data)->save();
        return redirect()->route('admin-resume-index')->with('success','New Resume Added Successfully.');
    }

    public function edit($id)
    {
        $doctors = Doctor::all();
        $data = Resume::findOrFail($id);
        return view('admin.resume.edit',compact('data','doctors'));
    }

    public function update(UpdateValidationRequest $request, $id)
    {
        $resume = Resume::findOrFail($id);
        $data = $request->all();
        $resume->update($data);
        return redirect()->route('admin-resume-index')->with('success','Resume Updated Successfully.');
    }

    public function destroy($id)
    {
        $resume = Resume::findOrFail($id);
        $resume->delete();
        return redirect()->route('admin-resume-index')->with('success','Resume Deleted Successfully.');
    }
}
