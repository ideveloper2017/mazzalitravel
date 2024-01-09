<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreValidationRequest;
use App\Http\Requests\UpdateValidationRequest;
use App\Http\Controllers\Controller;


class SubcategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $subcats = Subcategory::orderBy('id','desc')->get();
        return view('admin.subcategory.index',compact('subcats'));
    }

    public function create()
    {
    	$cats = Category::all();
        return view('admin.subcategory.create',compact('cats'));
    }

    public function status($id1,$id2)
    {
        $cat = Subcategory::findOrFail($id1);
        $cat->status = $id2;
        $cat->update();
        Session::flash('success', 'Successfully Updated The Status.');
        return redirect()->route('admin-subcat-index');
    }

    public function store(StoreValidationRequest $request)
    {
        $subcat = new Subcategory;
        $input = $request->all();
        $subcat->fill($input)->save();
        Session::flash('success', 'New Sub Category added successfully.');
        return redirect()->route('admin-subcat-index');
    }

    public function edit($id)
    {
    	$cats = Category::all();
        $subcat = Subcategory::findOrFail($id);
        return view('admin.subcategory.edit',compact('subcat','cats'));
    }

    public function update(UpdateValidationRequest $request, $id)
    {
        $subcat = Subcategory::findOrFail($id);
        $input = $request->all();
        $subcat->update($input);
        Session::flash('success', 'Sub Category updated successfully.');
        return redirect()->route('admin-subcat-index');
    }

    public function destroy($id)
    {
        $subcat = Subcategory::findOrFail($id);
        if($subcat->childs->count()>0)
        {
            Session::flash('unsuccess', 'Remove the Child Categories first !!!!');
            return redirect()->route('admin-subcat-index');
        }
        if($subcat->products->count()>0)
        {
            Session::flash('unsuccess', 'Remove the products first !!!!');
            return redirect()->route('admin-subcat-index');
        }
        $subcat->delete();
        Session::flash('success', 'Sub Category deleted successfully.');
        return redirect()->route('admin-subcat-index');
    }
}
