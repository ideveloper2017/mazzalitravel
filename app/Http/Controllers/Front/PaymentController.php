<?php

namespace App\Http\Controllers\Front;

use App\Models\Order;
use App\Models\Package;
use App\Models\Generalsetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\GeniusMailer;
use App\Models\Notification;

class PaymentController extends Controller
{


 public function store(Request $request){


     $pdetails = Package::findOrFail($request->package);

     $order = new Order;
     $gs = Generalsetting::findOrFail(1);

     $paypal_email = $gs->pb;
     $return_url = action('Front\PaymentController@payreturn');
     $cancel_url = action('Front\PaymentController@paycancle');
     $notify_url = action('Front\PaymentController@notify');

     $item_name = $pdetails->title." Package";
     $item_number = str_random(2).time();
     $item_amount = $request->total;

     $querystring = '';

     // Firstly Append paypal account to querystring
     $querystring .= "?business=".urlencode($paypal_email)."&";

     // Append amount& currency (£) to quersytring so it cannot be edited in html

     //The item name and amount can be brought in dynamically by querying the $_POST['item_number'] variable.
     $querystring .= "item_name=".urlencode($item_name)."&";
     $querystring .= "amount=".urlencode($item_amount)."&";
     $querystring .= "item_number=".urlencode($item_number)."&";

    $querystring .= "cmd=".urlencode(stripslashes($request->cmd))."&";
    $querystring .= "bn=".urlencode(stripslashes($request->bn))."&";
    $querystring .= "lc=".urlencode(stripslashes($request->lc))."&";
    $querystring .= "currency_code=".urlencode(stripslashes($request->currency_code))."&";

     // Append paypal return addresses
     $querystring .= "return=".urlencode(stripslashes($return_url))."&";
     $querystring .= "cancel_return=".urlencode(stripslashes($cancel_url))."&";
     $querystring .= "notify_url=".urlencode($notify_url)."&";

     $querystring .= "custom=".$request->package;

        $order['package_id'] = $request->package;
        $order['method'] = $request->method;
        $order['pay_amount'] = $item_amount;
        $order['customer_email'] = $request->email;
        $order['customer_state'] = $request->customer_state;
        $order['customer_fname'] = $request->customer_fname;
        $order['customer_lname'] = $request->customer_lname;
        $order['customer_phone'] = $request->phone;
        $order['booking_date'] = date('Y-m-d H:i:s');
        $order['total_adults'] = $request->adults;
        $order['address'] = $request->address;
        $order['city'] = $request->city;
        $order['zip'] = $request->zip;
        $order['total_childs'] = $request->childs;
        $order['order_number'] = $item_number;
        $order['payment_status'] = "Pending";
        $order->save();

        // Redirect to paypal IPN
        return redirect('https://www.paypal.com/cgi-bin/webscr'.$querystring);


 }


 public function paycancle(){
     return redirect()->back();
 }

public function payreturn(){
     return view('payreturn');
 }

public function notify(Request $request){

    $raw_post_data = file_get_contents('php://input');
    $raw_post_array = explode('&', $raw_post_data);
    $myPost = array();
    foreach ($raw_post_array as $keyval) {
        $keyval = explode ('=', $keyval);
        if (count($keyval) == 2)
            $myPost[$keyval[0]] = urldecode($keyval[1]);
    }

// Read the post from PayPal system and add 'cmd'
    $req = 'cmd=_notify-validate';
    if(function_exists('get_magic_quotes_gpc')) {
        $get_magic_quotes_exists = true;
    }
    foreach ($myPost as $key => $value) {
        if($get_magic_quotes_exists == true && get_magic_quotes_gpc() == 1) {
            $value = urlencode(stripslashes($value));
        } else {
            $value = urlencode($value);
        }
        $req .= "&$key=$value";
    }

    /*
     * Post IPN data back to PayPal to validate the IPN data is genuine
     * Without this step anyone can fake IPN data
     */
    $paypalURL = "https://www.paypal.com/cgi-bin/webscr";
    $ch = curl_init($paypalURL);
    if ($ch == FALSE) {
        return FALSE;
    }
    curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
    curl_setopt($ch, CURLOPT_SSLVERSION, 6);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);

// Set TCP timeout to 30 seconds
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close', 'User-Agent: company-name'));
    $res = curl_exec($ch);

    /*
     * Inspect IPN validation result and act accordingly
     * Split response headers and payload, a better way for strcmp
     */
    $tokens = explode("\r\n\r\n", trim($res));
    $res = trim(end($tokens));
    if (strcmp($res, "VERIFIED") == 0 || strcasecmp($res, "VERIFIED") == 0) {
        $gs = Generalsetting::find(1);
        $order = Order::where('packageid',$_POST['custom'])
            ->where('order_number',$_POST['item_number']);
        $data['txnid'] = $_POST['txn_id'];
        $data['payment_status'] = $_POST['payment_status'];
        $data['txnid'] = $_POST['txn_id'];
        $order->update($data);
                    $notification = new Notification;
                    $notification->order_id = $order->id;
                    $notification->save();
        if($gs->is_smtp == 1)
        {
        $data = [
            'to' => $request->customer_email,
            'type' => "confirm_booking",
            'cname' => $request->customer_fname.' '.$request->customer_lname,
            'bdate' => $order->booking_date,
        ];    
        $mailer = new GeniusMailer();
        $mailer->sendAutoMail($data);        
        }

        else
        {
       $to = $request->customer_email;
       $subject = 'Welcome To'.$gs->title;
       $msg = "Hello ".$request->customer_fname.' '.$request->customer_lname.","."\n You have successfully booked the package."."\n We wish you will have a wonderful experience using our service.";
        $headers = "From: ".$gs->from_name."<".$gs->from_email.">";
       mail($to,$subject,$msg.$headers);
        }

    }else{

        $fh = fopen('newresag.txt', 'w');
        fwrite($fh, $req);
        fclose($fh);
    }

}



}
