<?php

namespace App\Http\Controllers\Admin;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Requests\StoreValidationRequest;
use App\Http\Requests\UpdateValidationRequest;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

  public function index()
    {
        $datas = Slider::orderBy('id','desc')->get();
        return view('admin.slider.index',compact('datas'));
    }


    public function create()
    {
        return view('admin.slider.create');
    }


    public function store(StoreValidationRequest $request)
    {
        $this->validate($request, [
               'photo' => 'required',
           ]);
        $slider = new Slider();
        $data = $request->all();
        if ($file = $request->file('photo')) 
         {      
            $name = time().$file->getClientOriginalName();
            $file->move('assets/images/sliders',$name);           
            $data['photo'] = $name;
        } 
        $slider->fill($data)->save();
        return redirect()->route('admin-sl-index')->with('success','New Slider Added Successfully.');
    }


    public function edit($id)
    {
        $data = Slider::findOrFail($id);
        return view('admin.slider.edit',compact('data'));
    }

    public function update(StoreValidationRequest $request, $id)
    {
        $slider = Slider::findOrFail($id);
        $data = $request->all();

            if ($file = $request->file('photo')) 
            {              
                $name = time().$file->getClientOriginalName();
                $file->move('assets/images/sliders',$name);
                if($slider->photo != null)
                {
                    if (file_exists(public_path().'/assets/images/sliders/'.$slider->photo)) {
                        unlink(public_path().'/assets/images/sliders/'.$slider->photo);
                    }
                }            
            $data['photo'] = $name;
            } 
            else
            {
                $data['photo'] = $slider->photo;
            }
        $slider->update($data);
        return redirect()->route('admin-sl-index')->with('success','Slider Updated Successfully.');
    }


    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
                    if (file_exists(public_path().'/assets/images/sliders/'.$slider->photo)) {
                        unlink(public_path().'/assets/images/sliders/'.$slider->photo);
                    }
        $slider->delete();
        return redirect()->route('admin-sl-index')->with('success','Slider Deleted Successfully.');
    }
}
