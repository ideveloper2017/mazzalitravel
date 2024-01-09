<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateValidationRequest;
use App\Http\Controllers\Controller;
class AdminBlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $datas = Blog::orderBy('id','desc')->get();
        return view('admin.blog.index',compact('datas'));
    }

    public function create()
    {
        $cats = BlogCategory::all();
        return view('admin.blog.create',compact('cats'));
    }

    public function store(UpdateValidationRequest $request)
    {
        $blog = new Blog();
        $data = $request->all();
        if ($file = $request->file('photo')) 
         {      
            $name = time().$file->getClientOriginalName();
            $file->move('assets/images/blogs',$name);           
            $data['photo'] = $name;
        } 
        if (!empty($request->meta_tag)) 
         {
            $data['meta_tag'] = implode(',', $request->meta_tag);       
         }  
        if (!empty($request->tags)) 
         {
            $data['tags'] = implode(',', $request->tags);       
         }
        if ($request->secheck == "") 
         {
            $data['meta_tag'] = null;
            $data['meta_description'] = null;         
         } 
        $blog->fill($data)->save();
        return redirect()->route('admin-blog-index')->with('success','New Blog Added Successfully.');
    }


    public function edit($id)
    {
        $cats = BlogCategory::all();
        $data = Blog::findOrFail($id);
        return view('admin.blog.edit',compact('data','cats'));
    }

    public function update(UpdateValidationRequest $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $data = $request->all();

            if ($file = $request->file('photo')) 
            {              
                $name = time().$file->getClientOriginalName();
                $file->move('assets/images/blogs',$name);
                if($blog->photo != null)
                {
                    if (file_exists(public_path().'/assets/images/blogs/'.$blog->photo)) {
                        unlink(public_path().'/assets/images/blogs/'.$blog->photo);
                    }
                }            
            $data['photo'] = $name;
            } 
        if (!empty($request->meta_tag)) 
         {
            $data['meta_tag'] = implode(',', $request->meta_tag);       
         } 
        if (!empty($request->tags)) 
         {
            $data['tags'] = implode(',', $request->tags);       
         } 
        if ($request->secheck == "") 
         {
            $data['meta_tag'] = null;
            $data['meta_description'] = null;         
         } 
        $blog->update($data);
        return redirect()->route('admin-blog-index')->with('success','Blog Updated Successfully.');
    }


    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        if($blog->photo == null){
        $blog->delete();
        return redirect()->route('admin-blog-index')->with('success','Blog Deleted Successfully.');
        }
                    if (file_exists(public_path().'/assets/images/blogs/'.$blog->photo)) {
                        unlink(public_path().'/assets/images/blogs/'.$blog->photo);
                    }
        $blog->delete();
        return redirect()->route('admin-blog-index')->with('success','Blog Deleted Successfully.');
    }
}
