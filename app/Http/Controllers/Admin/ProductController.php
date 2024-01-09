<?php

namespace App\Http\Controllers\Admin;
use App\Models\Product;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Currency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreValidationRequest;
use App\Http\Requests\UpdateValidationRequest;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $prods = Product::orderBy('id','desc')->get();
        $sign = Currency::where('is_default','=',1)->first();
        return view('admin.product.index',compact('prods','cats','sign'));
    }

    public function deactive()
    {
        $prods = Product::where('status','=',0)->get();
        $sign = Currency::where('is_default','=',1)->first();
        return view('admin.product.deactive',compact('prods','cats','sign'));
    }

    public function create()
    {
     	$cats = Category::all();
        $sign = Currency::where('is_default','=',1)->first();
        return view('admin.product.create',compact('cats','sign'));
    }

    public function status($id1,$id2)
    {
        $prod = Product::findOrFail($id1);
        $prod->status = $id2;
        $prod->update();
        Session::flash('success', 'Successfully Updated The Status.');
        return redirect()->back();
    }

    public function store(StoreValidationRequest $request)
    {
        $this->validate($request, [
               'photo' => 'required',
           ]);
        $prod = new Product;
        $sign = Currency::where('is_default','=',1)->first();
        $input = $request->all();
            if(in_array(null, $request->features) || in_array(null, $request->colors))
            {
                $input['features'] = null;  
                $input['colors'] = null;
            }
            else 
            {             
                $input['features'] = implode(',', $request->features);  
                $input['colors'] = implode(',', $request->colors);                 
            }

            if ($file = $request->file('photo')) 
            {              
                $name = time().$file->getClientOriginalName();
                $file->move('assets/images/products',$name);           
            $input['photo'] = $name;
            }       
         
        if (!empty($request->tags)) 
         {
            $input['tags'] = implode(',', $request->tags);       
         }  
        if ($request->shcheck == ""){
            $input['ship'] = null;
        }  
        if (!empty($request->meta_tag)) 
         {
            $input['meta_tag'] = implode(',', $request->meta_tag);       
         }  
        if ($request->mescheck == "") 
         {
            $input['measure'] = null;    
         } 
        if ($request->secheck == "") 
         {
            $input['meta_tag'] = null;
            $input['meta_description'] = null;         
         } 
         $input['cprice'] = ($input['cprice'] / $sign->value);
         $input['pprice'] = ($input['pprice'] / $sign->value);             
        $prod->fill($input)->save();
        $lastid = $prod->id;
        if ($files = $request->file('gallery')){
            foreach ($files as  $key => $file){
                if(in_array($key, $request->galval))
                {
                    $gallery = new Gallery;
                    $name = time().$file->getClientOriginalName();
                    $file->move('assets/images/galleries',$name);
                    $gallery['photo'] = $name;
                    $gallery['product_id'] = $lastid;
                    $gallery->save();
                }
            }
        }

        Session::flash('success', 'New Product added successfully.');
        return redirect()->route('admin-prod-index');
    }

    public function edit($id)
    {
        $cats = Category::all();
        $prod = Product::findOrFail($id);
        $sign = Currency::where('is_default','=',1)->first();
        if($prod->tags != null)
        {
            $tags = explode(',', $prod->tags);            
        }
        if($prod->meta_tag != null)
        {
            $metatags = explode(',', $prod->meta_tag);            
        }
        if($prod->features!=null && $prod->colors!=null)
        {
            $title = explode(',', $prod->features);
            $details = explode(',', $prod->colors);
        }

         return view('admin.product.edit',compact('cats','prod','sign','tags','metatags','title','details'));
    }

    public function update(UpdateValidationRequest $request, $id)
    {
        $prod = Product::findOrFail($id);
        $sign = Currency::where('is_default','=',1)->first();
        $input = $request->all();
        if(!in_array(null, $request->features) && !in_array(null, $request->colors))
        {             
            $input['features'] = implode(',', $request->features);  
            $input['colors'] = implode(',', $request->colors);                 
        }
        else
        {
            if(in_array(null, $request->features) || in_array(null, $request->colors))
            {
                $input['features'] = null;  
                $input['colors'] = null;
            }
            else
            {
                $features = explode(',', $prod->features);
                $colors = explode(',', $prod->colors);
                $input['features'] = implode(',', $features);  
                $input['colors'] = implode(',', $colors);
            }
        }  

            if ($file = $request->file('photo')) 
            {              
                $name = time().$file->getClientOriginalName();
                $file->move('assets/images/products',$name);   
                if($prod->photo != null)
                {
                    if (file_exists(public_path().'/assets/images/products'.$prod->photo)) {
                        unlink(public_path().'/assets/images/products'.$prod->photo);
                    }
                }          
                $input['photo'] = $name;
            }       
         
        if (!empty($request->tags)) 
         {
            $input['tags'] = implode(',', $request->tags);       
         }  
        if (empty($request->tags)) 
         {
            $input['tags'] = null;       
         }
        if ($request->shcheck == ""){
            $input['ship'] = null;
        }  
        if (!empty($request->meta_tag)) 
         {
            $input['meta_tag'] = implode(',', $request->meta_tag);       
         }  
        if ($request->secheck == "") 
         {
            $input['meta_tag'] = null;
            $input['meta_description'] = null;         
         }   
         $input['cprice'] = $input['cprice'] / $sign->value;
         $input['pprice'] = $input['pprice'] / $sign->value; 
      
        $prod->update($input);
        Session::flash('success', 'Product updated successfully.');
        return redirect()->route('admin-prod-index');
    }

    public function featured($id1,$id2)
    {
        $prod = Product::findOrFail($id1);
        $prod->featured = $id2;
        $prod->update();
        Session::flash('success', 'Successfully Updated The Status.');
        return redirect()->back();
    }


    public function destroy($id)
    {
        $prod = Product::findOrFail($id);
        if($prod->galleries->count() > 0)
        {
            foreach ($prod->galleries as $gal) {
                    if (file_exists(public_path().'/assets/images/gallery/'.$gal->photo)) {
                        unlink(public_path().'/assets/images/gallery/'.$gal->photo);
                    }
                $gal->delete();
            }

        }
        if($prod->reviews->count() > 0)
        {
            foreach ($prod->reviews as $gal) {
                $gal->delete();
            }
        }
        if($prod->wishlists->count() > 0)
        {
            foreach ($prod->wishlists as $gal) {
                $gal->delete();
            }
        }
        if($prod->clicks->count() > 0)
        {
            foreach ($prod->clicks as $gal) {
                $gal->delete();
            }
        }
        if($prod->comments->count() > 0)
        {
            foreach ($prod->comments as $gal) {
            if($gal->replies->count() > 0)
            {
                foreach ($gal->replies as $key) {
                    if($key->subreplies->count() > 0)
                    {
                        foreach ($key->subreplies as $key1) {
                            $key1->delete();
                        }
                    }
                    $key->delete();
                }
            }
                $gal->delete();
            }
        }
                    if (file_exists(public_path().'/assets/images/products/'.$prod->photo)) {
                        unlink(public_path().'/assets/images/products/'.$prod->photo);
                    }
                if($prod->file != null){
                    if (file_exists(public_path().'/assets/files/'.$prod->file)) {
                        unlink(public_path().'/assets/files/'.$prod->file);
                    }
                }
        $prod->delete();
        Session::flash('success', 'Product deleted successfully.');
        return redirect()->back();
    }
}
