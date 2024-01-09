<?php

namespace App\Http\Controllers\Admin;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Requests\StoreValidationRequest;
use App\Http\Requests\UpdateValidationRequest;
use App\Http\Controllers\Controller;


class ImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

  	public function index()
    {
        $ads = Image::orderBy('id','desc')->get();
        return view('admin.image.index',compact('ads'));
    }

    public function create()
    {
        return view('admin.image.create');
    }

    public function store(StoreValidationRequest $request)
    {

        $ad = new Image();
        $data = $request->all();
        $ad->fill($data)->save();
        return redirect()->route('admin-img1-index')->with('success','New Data Added Successfully.');
    }

    public function edit($id)
    {
        $ad = Image::findOrFail($id);
        return view('admin.image.edit',compact('ad'));
    }

    public function update(StoreValidationRequest $request, $id)
    {
        $ad = Image::findOrFail($id);
        $data = $request->all();
        $ad->update($data);
        return redirect()->route('admin-img1-index')->with('success','Data Updated Successfully.');
    }

    public function destroy($id)
    {
        $ad = Image::findOrFail($id);
        $ad->delete();
        return redirect()->route('admin-img1-index')->with('success','Data Deleted Successfully.');
    }
}
