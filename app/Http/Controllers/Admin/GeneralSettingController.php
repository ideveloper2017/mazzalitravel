<?php

namespace App\Http\Controllers\Admin;
use App\Models\Generalsetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreValidationRequest;
use Carbon\Carbon;
use App\Http\Controllers\Controller;

class GeneralSettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function logo()
    {
        $data = Generalsetting::findOrFail(1);
        return view('admin.generalsetting.logo',compact('data'));
    }

    public function logoup(StoreValidationRequest $request)
    {
        $input = $request->all();
        $logo = Generalsetting::findOrFail(1);
            if ($file = $request->file('logo'))
            {
                $name = time().$file->getClientOriginalName();
                $file->move('assets/images',$name);
                if($logo->logo != null)
                {
                    if (file_exists(public_path().'/assets/images/'.$logo->logo)) {
                        unlink(public_path().'/assets/images/'.$logo->logo);
                    }
                }
            $input['logo'] = $name;
            }
        $logo->update($input);
        Session::flash('success', 'Data Updated Successfully.');
        return redirect()->route('admin-gs-logo');
    }
    public function appoinments()
    {
        $data = Generalsetting::findOrFail(1);
        return view('admin.generalsetting.popup',compact('data'));
    }

    public function appoinmentsup(StoreValidationRequest $request)
    {
        $input = $request->all();
        $logo = Generalsetting::findOrFail(1);
        $logo->update($input);
        Session::flash('success', 'Data Updated Successfully.');
        return redirect()->route('admin-gs-popup');
    }

    public function bg()
    {
        $data = Generalsetting::findOrFail(1);
        return view('admin.generalsetting.video',compact('data'));
    }

    public function bgup(StoreValidationRequest $request)
    {
        $this->validate($request, [
               'video_image' => 'mimes:jpeg,jpg,png'
           ],[
               'video_image.mimes' => 'The Image type is invalid.'
            ]);
        $input = $request->all();
        $logo = Generalsetting::findOrFail(1);
            if ($file = $request->file('video_image'))
            {
                $name = time().$file->getClientOriginalName();
                $file->move('assets/images',$name);
                if($logo->video_image != null)
                {
                    if (file_exists(public_path().'/assets/images/'.$logo->video_image)) {
                        unlink(public_path().'/assets/images/'.$logo->video_image);
                    }
                }
            $input['video_image'] = $name;
            }
        $logo->update($input);
        Session::flash('success', 'Data Updated Successfully.');
        return redirect()->route('admin-gs-bg');
    }

    public function sl()
    {
        $data = Generalsetting::findOrFail(1);
        return view('admin.generalsetting.affilate',compact('data'));
    }

    public function slup(StoreValidationRequest $request)
    {
        $this->validate($request, [
               'top_image' => 'mimes:jpeg,jpg,png'
           ],[
               'top_image.mimes' => 'The Image type is invalid.'
            ]);
        $input = $request->all();
        $logo = Generalsetting::findOrFail(1);
            if ($file = $request->file('top_image'))
            {
                $name = time().$file->getClientOriginalName();
                $file->move('assets/images',$name);
                if($logo->top_image != null)
                {
                    if (file_exists(public_path().'/assets/images/'.$logo->top_image)) {
                        unlink(public_path().'/assets/images/'.$logo->top_image);
                    }
                }
            $input['top_image'] = $name;
            }
        $logo->update($input);
        Session::flash('success', 'Data Updated Successfully.');
        return redirect()->back();
    }

    public function bl()
    {
        $data = Generalsetting::findOrFail(1);
        return view('admin.generalsetting.blog',compact('data'));
    }

    public function blup(StoreValidationRequest $request)
    {
        $input = $request->all();
        $logo = Generalsetting::findOrFail(1);
        $logo->update($input);
        Session::flash('success', 'Data Updated Successfully.');
        return redirect()->back();
    }

    public function ts()
    {
        $data = Generalsetting::findOrFail(1);
        return view('admin.generalsetting.slider',compact('data'));
    }

    public function tsup(StoreValidationRequest $request)
    {
        $input = $request->all();
        $logo = Generalsetting::findOrFail(1);
        $logo->update($input);
        Session::flash('success', 'Data Updated Successfully.');
        return redirect()->back();
    }

    public function fp()
    {
        $data = Generalsetting::findOrFail(1);
        return view('admin.generalsetting.feature',compact('data'));
    }

    public function fpup(StoreValidationRequest $request)
    {
        $input = $request->all();
        $logo = Generalsetting::findOrFail(1);
        $logo->update($input);
        Session::flash('success', 'Data Updated Successfully.');
        return redirect()->back();
    }


  public function fav()
    {
        $data = Generalsetting::findOrFail(1);
        return view('admin.generalsetting.favicon',compact('data'));
    }

    public function favup(StoreValidationRequest $request)
    {
        $input = $request->all();
        $fav = Generalsetting::findOrFail(1);
            if ($file = $request->file('favicon'))
            {
                $name = time().$file->getClientOriginalName();
                $file->move('assets/images',$name);
                if($fav->favicon != null)
                {
                    if (file_exists(public_path().'/assets/images/'.$fav->favicon)) {
                        unlink(public_path().'/assets/images/'.$fav->favicon);
                    }
                }
            $input['favicon'] = $name;
            }
        $fav->update($input);
        Session::flash('success', 'Data Updated Successfully.');
        return redirect()->route('admin-gs-fav');
    }

    //Upadte FAQ Page Section Settings
    public function lungup($status)
    {
        $page = Generalsetting::findOrFail(1);
        $page->is_language = $status;
        $page->update();
        Session::flash('success', 'Language Status Updated Successfully.');
        return redirect()->back();
    }

  public function reg()
    {
        $data = Generalsetting::findOrFail(1);
        return view('admin.vendor.status',compact('data'));
    }

    public function regvendor($status)
    {


        $page = Generalsetting::findOrFail(1);
        $page->reg_vendor = $status;
        $page->update();
        Session::flash('success', 'Vendor Registration Status Upated Successfully.');
        return redirect()->route('admin-gs-reg');;
    }
    public function paypal($status)
    {

        $page = Generalsetting::findOrFail(1);
        $page->pcheck = $status;
        $page->update();
        Session::flash('success', 'Paypal Status Upated Successfully.');
        return redirect()->route('admin-gs-payments');;
    }
    public function rtl($status)
    {

        $page = Generalsetting::findOrFail(1);
        $page->rtl = $status;
        $page->update();
        Session::flash('success', 'RTL Status Upated Successfully.');
        return redirect()->back();
    }
    public function stripe($status)
    {

        $page = Generalsetting::findOrFail(1);
        $page->scheck = $status;
        $page->update();
        Session::flash('success', 'Stripe Status Upated Successfully.');
        return redirect()->route('admin-gs-payments');;
    }
    public function guest($status)
    {

        $page = Generalsetting::findOrFail(1);
        $page->guest_checkout = $status;
        $page->update();
        Session::flash('success', 'Guest Checkout Status Upated Successfully.');
        return redirect()->route('admin-gs-payments');;
    }
    public function cod($status)
    {

        $page = Generalsetting::findOrFail(1);
        $page->ccheck = $status;
        $page->update();
        Session::flash('success', 'Cash On Delivery Status Upated Successfully.');
        return redirect()->route('admin-gs-payments');;
    }
    public function comment($status)
    {
        $page = Generalsetting::findOrFail(1);
        $page->is_comment = $status;
        $page->update();
        Session::flash('success', 'Comment Status Upated Successfully.');
        return redirect()->back();
    }
    public function isaffilate($status)
    {
        $page = Generalsetting::findOrFail(1);
        $page->is_affilate = $status;
        $page->update();
        Session::flash('success', 'Affilate Status Upated Successfully.');
        return redirect()->back();
    }
    public function issmtp($status)
    {
        $page = Generalsetting::findOrFail(1);
        $page->is_smtp = $status;
        $page->update();
        Session::flash('success', 'SMTP Status Upated Successfully.');
        return redirect()->back();
    }
    public function talkto($status)
    {
        $page = Generalsetting::findOrFail(1);
        $page->is_talkto = $status;
        $page->update();
        Session::flash('success', 'Tawk.to Status Upated Successfully.');
        return redirect()->back();
    }
    public function issubscribe($status)
    {
        $page = Generalsetting::findOrFail(1);
        $page->is_subscribe = $status;
        $page->update();
        Session::flash('success', 'Subscribe PopUp Status Upated Successfully.');
        return redirect()->back();
    }
    public function isloader($status)
    {
        $page = Generalsetting::findOrFail(1);
        $page->is_loader = $status;
        $page->update();
        Session::flash('success', 'Loader Status Upated Successfully.');
        return redirect()->back();
    }
    public function isdisqus($status)
    {
        $page = Generalsetting::findOrFail(1);
        $page->is_disqus = $status;
        $page->update();
        Session::flash('success', 'Disqus Status Upated Successfully.');
        return redirect()->back();
    }
    public function bgimg()
    {
        $data = Generalsetting::findOrFail(1);
        return view('admin.generalsetting.backgroundimage',compact('data'));
    }

    public function bgimgup(StoreValidationRequest $request)
    {
        $this->validate($request, [
               'bgimg' => 'mimes:jpeg,jpg,png'
           ],[
               'bgimg.mimes' => 'The Image type is invalid.'
            ]);
        $input = $request->all();
        $bgimg = Generalsetting::findOrFail(1);
            if ($file = $request->file('bgimg'))
            {
                $name = time().$file->getClientOriginalName();
                $file->move('assets/images',$name);
                if($bgimg->bgimg != null)
                {
                    if (file_exists(public_path().'/assets/images/'.$bgimg->bgimg)) {
                        unlink(public_path().'/assets/images/'.$bgimg->bgimg);
                    }
                }
            $input['bgimg'] = $name;
            }
        $bgimg->update($input);
        Session::flash('success', 'Data Updated Successfully.');
        return redirect()->route('admin-gs-bgimg');
    }


    public function affilate()
    {
        $data = Generalsetting::findOrFail(1);
        return view('admin.generalsetting.affilate',compact('data'));
    }

    public function affilateup(StoreValidationRequest $request)
    {
        $this->validate($request, [
               'affilate_banner' => 'mimes:jpeg,jpg,png'
           ],[
               'affilate_banner.mimes' => 'The Image type is invalid.'
            ]);
        $input = $request->all();
        $data = Generalsetting::findOrFail(1);
            if ($file = $request->file('affilate_banner'))
            {
                $name = time().$file->getClientOriginalName();
                $file->move('assets/images',$name);
                if($data->affilate_banner != null)
                {
                    if (file_exists(public_path().'/assets/images/'.$data->affilate_banner)) {
                        unlink(public_path().'/assets/images/'.$data->affilate_banner);
                    }
                }
            $input['affilate_banner'] = $name;
            }
        $data->update($input);
        Session::flash('success', 'Data Updated Successfully.');
        return redirect()->route('admin-gs-affilate');
    }

    public function cimg()
    {
        $data = Generalsetting::findOrFail(1);
        return view('admin.generalsetting.customerimg',compact('data'));
    }

    public function cimgup(StoreValidationRequest $request)
    {
        $this->validate($request, [
               'cimg' => 'mimes:jpeg,jpg,png'
           ],[
               'cimg.mimes' => 'The Image type is invalid.'
            ]);
        $input = $request->all();
        $cimg = Generalsetting::findOrFail(1);
            if ($file = $request->file('cimg'))
            {
                $name = time().$file->getClientOriginalName();
                $file->move('assets/images',$name);
                if($cimg->cimg != null)
                {
                    if (file_exists(public_path().'/assets/images/'.$cimg->cimg)) {
                        unlink(public_path().'/assets/images/'.$cimg->cimg);
                    }
                }
            $input['cimg'] = $name;
            }
        $cimg->update($input);
        Session::flash('success', 'Data Updated Successfully.');
        return redirect()->route('admin-gs-cimg');
    }

    public function countdown()
    {
        $data = Generalsetting::findOrFail(1);
        return view('admin.count.index',compact('data'));
    }

    public function countdownup(StoreValidationRequest $request)
    {

        $input = $request->all();
        $cimg = Generalsetting::findOrFail(1);
        $cimg->update($input);
        Session::flash('success', 'Data Updated Successfully.');
        return redirect()->route('admin-gs-countdown');
    }


    public function contents()
    {
        $data = Generalsetting::findOrFail(1);
        return view('admin.generalsetting.websitecontent',compact('data'));
    }

    public function contentsup(Request $request)
    {
        $this->validate($request, [
               'bimg' => 'mimes:jpeg,jpg,png'
           ],[
               'bimg.mimes' => 'The Image type is invalid.'
            ]);
        $content = Generalsetting::findOrFail(1);
        $data = $request->all();
        if (!empty($request->tags))
         {
            $data['tags'] = implode(',', $request->tags);
         }
        if (empty($request->tags))
         {
            $data['tags'] = null;
         }
            if ($file = $request->file('bimg'))
            {
                $name = time().$file->getClientOriginalName();
                $file->move('assets/images',$name);
                if($content->bimg != null)
                {
                    if (file_exists(public_path().'/assets/images/'.$content->bimg)) {
                        unlink(public_path().'/assets/images/'.$content->bimg);
                    }
                }
            $data['bimg'] = $name;
            }
        if ($request->is_talkto == ""){
            $data['is_talkto'] = 0;
        }
        $content->update($data);

        Session::flash('success', 'Data Updated Successfully.');
        return redirect()->route('admin-gs-contents');
    }

    public function payments()
    {
        $data = Generalsetting::findOrFail(1);
        return view('admin.generalsetting.payments',compact('data'));
    }

    public function paymentsup(Request $request)
    {
        $data = Generalsetting::findOrFail(1);
        $data->update($request->all());
        Session::flash('success', 'Data Updated Successfully.');
        return redirect()->route('admin-gs-payments');
    }

    public function about()
    {
        $data = Generalsetting::findOrFail(1);
        return view('admin.generalsetting.about',compact('data'));
    }

    public function aboutup(Request $request)
    {
        $this->validate($request, [
               'footer_background' => 'mimes:jpeg,jpg,png'
           ],[
               'footer_background.mimes' => 'The Image type is invalid.'
            ]);
        $data = Generalsetting::findOrFail(1);
        $input = $request->all();
                if ($file = $request->file('footer_background'))
                {
                    $name = time().$file->getClientOriginalName();
                    $file->move('assets/images',$name);
                    if($data->footer_background != null)
                    {
                        if (file_exists(public_path().'/assets/images/'.$data->footer_background)) {
                            unlink(public_path().'/assets/images/'.$data->footer_background);
                        }
                    }
                $input['footer_background'] = $name;
                }
        $data->update($input);
        Session::flash('success', 'Data Updated Successfully.');
        return redirect()->route('admin-gs-about');
    }

    public function successm()
    {
        $data = Generalsetting::findOrFail(1);
        return view('admin.generalsetting.success',compact('data'));
    }

    public function successmup(Request $request)
    {
        $address = Generalsetting::findOrFail(1);
        $address->update($request->all());
        Session::flash('success', 'Data Updated Successfully.');
        return redirect()->route('admin-gs-successm');
    }

    public function bginfo()
    {
        $data = Generalsetting::findOrFail(1);
        return view('admin.generalsetting.bg-info',compact('data'));
    }

    public function bginfoup(Request $request)
    {
        $bginfo = Generalsetting::findOrFail(1);
        $data = $request->all();
        if ($request->slider == ""){
            $data['slider'] = 0;
        }
        if ($request->category == ""){
            $data['category'] = 0;
        }
        if ($request->sb == ""){
            $data['sb'] = 0;
        }
        if ($request->hv == ""){
            $data['hv'] = 0;
        }
        if ($request->ftp == ""){
            $data['ftp'] = 0;
        }
        if ($request->lp == ""){
            $data['lp'] = 0;
        }
        if ($request->pp == ""){
            $data['pp'] = 0;
        }
        if ($request->lb == ""){
            $data['lb'] = 0;
        }
        if ($request->bs == ""){
            $data['bs'] = 0;
        }
        if ($request->ts == ""){
            $data['ts'] = 0;
        }
        if ($request->bl == ""){
            $data['bl'] = 0;
        }
        $bginfo->update($data);
        Session::flash('success', 'Data Updated Successfully.');
        return redirect()->route('admin-gs-bginfo');
    }

    public function video()
    {
        $data = Generalsetting::findOrFail(1);
        return view('admin.generalsetting.video',compact('data'));
    }

    public function videoup(Request $request)
    {
        $this->validate($request, [
               'vidimg' => 'mimes:jpeg,jpg,png'
           ],[
               'vidimg.mimes' => 'The Image type is invalid.'
            ]);
        $data = Generalsetting::findOrFail(1);
        $url = $request->vid;

        if ( (strpos($url, 'youtube') !== false) || (strpos($url, 'vimeo') !== false) )
        {
            $input = $request->all();
                if ($file = $request->file('vidimg'))
                {
                    $name = time().$file->getClientOriginalName();
                    $file->move('assets/images',$name);
                    if($data->vidimg != null)
                    {
                    if (file_exists(public_path().'/assets/images/'.$data->vidimg)) {
                        unlink(public_path().'/assets/images/'.$data->vidimg);
                    }
                    }
                $input['vidimg'] = $name;
                }
            $data->update($input);
            return redirect()->route('admin-video')->with('success','Data Updated Successfully.');
        }

        else
        {
        return redirect()->route('admin-video')->with('unsuccess','The URL is Invaild.');
        }
    }
  public function load()
    {
        $data = Generalsetting::findOrFail(1);
        return view('admin.generalsetting.loader',compact('data'));
    }

    public function loadup(Request $request)
    {
        $this->validate($request, [
               'loader' => 'mimes:gif'
           ]);
        $input = $request->all();
        $fav = Generalsetting::findOrFail(1);
            if ($file = $request->file('loader'))
            {
                $name = time().$file->getClientOriginalName();
                $file->move('assets/images',$name);
                if($fav->loader != null)
                {
                    if (file_exists(public_path().'/assets/images/'.$fav->loader)) {
                        unlink(public_path().'/assets/images/'.$fav->loader);
                    }
                }
            $input['loader'] = $name;
            }
        $fav->update($input);
        Session::flash('success', 'Successfully updated the Loader');
        return redirect()->route('admin-gs-load');
    }

}
