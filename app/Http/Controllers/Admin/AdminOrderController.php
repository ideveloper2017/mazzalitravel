<?php

namespace App\Http\Controllers\Admin;

use App\Classes\GeniusMailer;
use App\Models\Order;
use App\Models\Generalsetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminOrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $orders = Order::orderBy('id','desc')->get();
        return view('admin.order.index',compact('orders'));
    }
    public function pending()
    {
        $orders = Order::where('status','=','pending')->get();
        return view('admin.order.pending',compact('orders'));
    }
    public function completed()
    {
        $orders = Order::where('status','=','completed')->get();
        return view('admin.order.completed',compact('orders'));
    }
    public function declined()
    {
        $orders = Order::where('status','=','declined')->get();
        return view('admin.order.declined',compact('orders'));
    }
    public function show($id)
    {
        $order = Order::findOrFail($id);
        $cart = unserialize(bzdecompress(utf8_decode($order->cart)));
        return view('admin.order.details',compact('order','cart'));
    }
    public function emailsub(Request $request)
    {
        $gs = Generalsetting::findOrFail(1);
        if($gs->is_smtp == 1)
        {
            $data = [
                    'to' => $request->to,
                    'subject' => $request->subject,
                    'body' => $request->message,
            ];

            $mailer = new GeniusMailer();
            $mailer->sendCustomMail($data);                
        }
        else
        {
            $data = 0;
            $headers = "From: ".$gs->from_name."<".$gs->from_email.">";
            $mail = mail($request->to,$request->subject,$request->message,$headers);
            if($mail) {   
                $data = 1;
            }
        }

        return response()->json($data);
    }


    public function status($id,$status)
    {
        $mainorder = Order::findOrFail($id);
        if ($mainorder->status == "completed"){
            return redirect()->back()->with('success','This Order is Already Completed');
        }
        $stat['status'] = $status;
        $mainorder->update($stat);
        return redirect()->back()->with('success','Order Status Updated Successfully');
    }

}
