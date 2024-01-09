<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BlogCategory;

class AdminBlogCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $cats = BlogCategory::orderBy('id','desc')->get();
        return view('admin.cblog.index',compact('cats'));
    }

    public function create()
    {
        return view('admin.cblog.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
               'name' => 'unique:blog_categories',
               'slug' => 'unique:blog_categories'
           ],[ 
               'name.unique' => 'This name has already been taken.',
               'slug.unique' => 'This slug has already been taken.'
            ]);
        $cat = new BlogCategory;
        $input = $request->all();
        $cat->fill($input)->save();
        return redirect()->route('admin-cblog-index')->with('success','New Category added successfully.');
    }

    public function edit($id)
    {
        $cat = BlogCategory::findOrFail($id);
        return view('admin.cblog.edit',compact('cat'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
               'name' => 'unique:blog_categories,name,'.$id,
               'slug' => 'unique:blog_categories,slug,'.$id
           ],[ 
               'name.unique' => 'This name has already been taken.',
               'slug.unique' => 'This slug has already been taken.'
            ]);
        $cat = BlogCategory::findOrFail($id);
        $input = $request->all();
        $cat->update($input);
        return redirect()->route('admin-cblog-index')->with('success','Category updated successfully.');
    }

    public function destroy($id)
    {
        $cat = BlogCategory::findOrFail($id);
        if($cat->blogs->count() > 0)
        {
            foreach ($prod->blogs as $gal) {
                $gal->delete();
            }
        }
        $cat->delete();
        return redirect()->route('admin-cblog-index')->with('success','Category deleted successfully.');
    }
}
