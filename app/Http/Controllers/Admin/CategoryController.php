<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreValidationRequest;
use App\Http\Requests\UpdateValidationRequest;
use App\Http\Controllers\Controller;


class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $cats = Category::orderBy('id','desc')->get();
        return view('admin.category.index',compact('cats'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function status($id1,$id2)
    {
        $cat = Category::findOrFail($id1);
        $cat->status = $id2;
        $cat->update();
        Session::flash('success', 'Successfully Updated The Status.');
        return redirect()->route('admin-cat-index');
    }

    public function store(StoreValidationRequest $request)
    {
        $cat = new Category;
        $input = $request->all(); 
        $cat->fill($input)->save();
        Session::flash('success', 'New Department added successfully.');
        return redirect()->route('admin-cat-index');
    }

    public function edit($id)
    {
        $cat = Category::findOrFail($id);
        return view('admin.category.edit',compact('cat'));
    }

    public function update(UpdateValidationRequest $request, $id)
    {
        $cat = Category::findOrFail($id);
        $input = $request->all();
        $cat->update($input);
        Session::flash('success', 'Department updated successfully.');
        return redirect()->route('admin-cat-index');
    }

    public function destroy($id)
    {
        $cat = Category::findOrFail($id);
        $cat->delete();
        Session::flash('success', 'Department deleted successfully.');
        return redirect()->route('admin-cat-index');
    }
}
