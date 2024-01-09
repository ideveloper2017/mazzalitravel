<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Requests\StoreValidationRequest;
use App\Http\Requests\UpdateValidationRequest;
use App\Http\Controllers\Controller;

class AdminServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

  public function index()
    {
        $ads = Service::orderBy('id','desc')->get();
        return view('admin.service.index',compact('ads'));
    }


    public function create()
    {
        return view('admin.service.create');
    }


    public function store(StoreValidationRequest $request)
    {
        $this->validate($request, [
               'photo' => 'required'
           ]);
        $ad = new Service();
        $data = $request->all();
        if ($file = $request->file('photo')) 
         {      
            $name = time().$file->getClientOriginalName();
            $file->move('assets/images/services',$name);           
            $data['photo'] = $name;
        } 
        $ad->fill($data)->save();
        return redirect()->route('admin-service-index')->with('success','New Data Added Successfully.');
    }


    public function edit($id)
    {
        $ad = Service::findOrFail($id);
        return view('admin.service.edit',compact('ad'));
    }

    public function update(StoreValidationRequest $request, $id)
    {
        $ad = Service::findOrFail($id);
        $data = $request->all();

            if ($file = $request->file('photo')) 
            {              
                $name = time().$file->getClientOriginalName();
                $file->move('assets/images/services',$name);
                if($ad->photo != null)
                {
                    if (file_exists(public_path().'/assets/images/services/'.$ad->photo)) {
                        unlink(public_path().'/assets/images/services/'.$ad->photo);
                    }
                }            
            $data['photo'] = $name;
            } 
        $ad->update($data);
        return redirect()->route('admin-service-index')->with('success','Data Updated Successfully.');
    }


    public function destroy($id)
    {
        $ad = Service::findOrFail($id);
        if($ad->photo == null){
        $ad->delete();
        return redirect()->route('admin-service-index')->with('success','Data Deleted Successfully.');
        }
                    if (file_exists(public_path().'/assets/images/services/'.$ad->photo)) {
                        unlink(public_path().'/assets/images/services/'.$ad->photo);
                    }
        $ad->delete();
        return redirect()->route('admin-service-index')->with('success','Data Deleted Successfully.');
    }
}
