<?php

namespace App\Http\Controllers\Json;

use App\Models\Category;
use App\Models\Doctor;
use App\Models\Generalsetting;
use App\Models\Language;
use App\Models\Order;
use App\Models\Page;
use App\Models\PaymentGateway;
use App\Models\Package;
use App\Models\Gallery;
use App\Models\Review;
use App\Models\Subcategory;
use App\Models\UserNotification;
use App\Models\Wishlist;
Use App\Models\Notification;
use Auth;
use Illuminate\Http\Request;
use Session;
use App\Http\Controllers\Controller;

class JsonRequestController extends Controller
{

    public function count_notf()
    {
        $data = Notification::where('order_id','!=',null)->where('is_read','=',0)->get()->count();
        return response()->json($data);             
    }

    public function notf_clear()
    {
        $data = Notification::where('order_id','!=',null);
        $data->delete();            
    } 


    // Gallery Section
    public function gallery()
    {
        $data[0] = 0;
        $id = $_GET['id'];
        $prod = Package::findOrFail($id);
        if(count($prod->galleries))
        {
            $data[0] = 1;
            $data[1] = $prod->galleries;
        }
        return response()->json($data);              
    }  
    public function addgallery(Request $request)
    { 
        $data = null;
        $lastid = $request->package_id;
        if ($files = $request->file('gallery')){
            foreach ($files as  $key => $file){
                    $val = $file->getClientOriginalExtension();
                    $val = strtolower($val);
                    if($val == 'jpeg'|| $val == 'jpg'|| $val == 'png'|| $val == 'svg')
                    {
                    $gallery = new Gallery;
                    $name = time().$file->getClientOriginalName();
                    $file->move('assets/images/galleries',$name);
                    $gallery['photo'] = $name;
                    $gallery['package_id'] = $lastid;
                    $gallery->save();
                    $data[] = $gallery;                        
                    }


            }
        }
        return response()->json($data);      
    } 
    public function delgallery()
    {

        $id = $_GET['id'];
        $gal = Gallery::findOrFail($id);
                    if (file_exists(public_path().'/assets/images/galleries/'.$gal->photo)) {
                        unlink(public_path().'/assets/images/galleries/'.$gal->photo);
                    }
        $gal->delete();
            
    } 
    // Gallery Section Ends
}