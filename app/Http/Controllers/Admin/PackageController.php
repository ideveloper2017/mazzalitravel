<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Gallery;
use App\Models\Currency;
use App\Http\Requests\StoreValidationRequest;
use App\Http\Requests\UpdateValidationRequest;
use Illuminate\Support\Facades\Session;

class PackageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $packages = Package::orderBy('id','desc')->get();
        $sign = Currency::where('is_default','=',1)->first();
        return view('admin.package.index',compact('packages','sign'));
    }

    public function create()
    {
        $sign = Currency::where('is_default','=',1)->first();
        return view('admin.package.create',compact('sign'));
    }

    public function store(StoreValidationRequest $request)
    {
        $this->validate($request, [
               'photo' => 'required',
           ]);
        $data = new Package;
        $sign = Currency::where('is_default','=',1)->first();
        $input = $request->all();
            if(empty($request->offer_title))
            {
                $input['offer_title'] = null;  
            }
            else 
            {             
                $input['offer_title'] = implode(',][,', $request->offer_title);            
            }  
            if(empty($request->offer_day))
            {
                $input['offer_day'] = null;  
            }
            else 
            {             
                $input['offer_day'] = implode(',][,', $request->offer_day);            
            } 
            if(empty($request->offer_day))
            {
                $input['offer_subtitle'] = null;  
            }
            else 
            {             
                $input['offer_subtitle'] = implode(',][,', $request->offer_subtitle);            
            }   
            if(empty($request->offer_tags))
            {
                $input['offer_tags'] = null;  
            }
            else 
            {             
                $input['offer_tags'] = implode(',][,', $request->offer_tags);            
            }  
            if(empty($request->offer_details))
            {
                $input['offer_details'] = null;  
            }
            else 
            {             
                $input['offer_details'] = implode(',][,', $request->offer_details);            
            }  
         $input['cost_adult'] = ($input['cost_adult'] / $sign->value);
         $input['cost_child'] = ($input['cost_child'] / $sign->value);      
         $input['cost_previous'] = ($input['cost_previous'] / $sign->value);           
         $data->fill($input);

        if ($file = $request->file('photo')){
            $photo_name = time().$request->file('photo')->getClientOriginalName();
            $file->move('assets/images/packages',$photo_name);
            $data['photo'] = $photo_name;
        }

        $data->save();
        $lastid = $data->id;

        if ($files = $request->file('gallery')){
            foreach ($files as  $key => $file){
                $val = $file->getClientOriginalExtension();
                $val = strtolower($val);
                if($val == 'jpeg'|| $val == 'jpg'|| $val == 'png'|| $val == 'svg')
                {
                    if(in_array($key, $request->galval))
                    {
                        $gallery = new Gallery;
                        $name = time().$file->getClientOriginalName();
                        $file->move('assets/images/galleries',$name);
                        $gallery['photo'] = $name;
                        $gallery['package_id'] = $lastid;
                        $gallery->save();
                    }                    
                }

            }
        }
        return redirect()->route('admin-package-index')->with('success','New Package Added Successfully.');
    }

    public function edit($id)
    {
        $sign = Currency::where('is_default','=',1)->first();
        $package = Package::findOrFail($id);
        $title = explode(',][,', $package->offer_title);
        $day = explode(',][,', $package->offer_day);
        $subtitle = explode(',][,', $package->offer_subtitle);
        $tags = explode(',][,', $package->offer_tags);
        $details = explode(',][,', $package->offer_details);
        return view('admin.package.edit',compact('package','title','day','subtitle','tags','details','sign'));
    }

    public function update(UpdateValidationRequest $request, $id)
    {
        $packages = Package::findOrFail($id);
        $sign = Currency::where('is_default','=',1)->first();
        $data = $request->all();
            if(empty($request->offer_title))
            {
                $data['offer_title'] = null;  
            }
            else 
            {             
                $data['offer_title'] = implode(',][,', $request->offer_title);            
            }  
            if(empty($request->offer_day))
            {
                $data['offer_day'] = null;  
            }
            else 
            {             
                $data['offer_day'] = implode(',][,', $request->offer_day);            
            } 
            if(empty($request->offer_subtitle))
            {
                $data['offer_subtitle'] = null;  
            }
            else 
            {             
                $data['offer_subtitle'] = implode(',][,', $request->offer_subtitle);            
            }   
            if(empty($request->offer_tags))
            {
                $data['offer_tags'] = null;  
            }
            else 
            {             
                $data['offer_tags'] = implode(',][,', $request->offer_tags);            
            }  
            if(empty($request->offer_details))
            {
                $data['offer_details'] = null;  
            }
            else 
            {             
                $data['offer_details'] = implode(',][,', $request->offer_details);            
            } 
        if ($file = $request->file('photo')){
            $photo_name = time().$request->file('photo')->getClientOriginalName();
            $file->move('assets/images/packages',$photo_name);
            $data['photo'] = $photo_name;
        }
         $data['cost_adult'] = ($data['cost_adult'] / $sign->value);
         $data['cost_child'] = ($data['cost_child'] / $sign->value);      
         $data['cost_previous'] = ($data['cost_previous'] / $sign->value); 
        $packages->update($data);
        return redirect()->route('admin-package-index')->with('success','Package Updated Successfully.');
    }

    public function featured($id1,$status)
    {
        $prod = Package::findOrFail($id1);
        $prod->featured = $status;
        $prod->update();
        Session::flash('success', 'Successfully Updated The Status.');
        return redirect()->back();
    }


    public function destroy($id)
    {
        $package = Package::findOrFail($id);
        if($package->galleries->count() > 0)
        {
            foreach ($package->galleries as $gal) {
                    if (file_exists(public_path().'/assets/images/galleries/'.$gal->photo)) {
                        unlink(public_path().'/assets/images/galleries/'.$gal->photo);
                    }
                $gal->delete();
            }
            foreach ($package->orders as $gal) {
                $gal->delete();
            }
        }
        if (file_exists(public_path().'/assets/images/packages/'.$package->photo)) {
            unlink(public_path().'/assets/images/packages/'.$package->photo);
        }
        $package->delete();
        Session::flash('success', 'Package deleted successfully.');
        return redirect()->back();
    }
}
