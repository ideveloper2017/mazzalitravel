<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use URL;
use Redirect;
use Input;
use Validator;
use App\Models\Order;
use App\Models\Package;
use App\Models\Generalsetting;

use App\Classes\GeniusMailer;
use App\Models\Notification;

use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Stripe\Error\Card;
use App\Http\Controllers\Controller;

class StripeController extends Controller
{

    public function __construct()
    {
        //Set Spripe Keys
        $stripe = Generalsetting::findOrFail(1);
        Config::set('services.stripe.key', $stripe->sk);
        Config::set('services.stripe.secret', $stripe->ss);
    }


    public function store(Request $request){
        $gs = Generalsetting::find(1);
        $pdetails = Package::findOrFail($request->package);
        $currency = $request->currency_code;
        $order = new Order;
        $success_url = action('App\Http\Controllers\Front\PaymentController@payreturn');
        $item_name = $pdetails->title." Tour Package";
        $item_number = rand(19,2).time();
        $item_amount = $request->total;

        $validator = Validator::make($request->all(),[
                        'card' => 'required',
                        'cvv' => 'required',
                        'month' => 'required',
                        'year' => 'required',
                    ]);

        if ($validator->passes()) {

            $stripe = Stripe::make(Config::get('services.stripe.secret'));
            try{
                $token = $stripe->tokens()->create([
                    'card' =>[
                            'number' => $request->card,
                            'exp_month' => $request->month,
                            'exp_year' => $request->year,
                            'cvc' => $request->cvv,
                        ],
                    ]);
                if (!isset($token['id'])) {
                    return back()->with('error','Token Problem With Your Token.');
                }

                $charge = $stripe->charges()->create([
                    'card' => $token['id'],
                    'currency' => $currency,
                    'amount' => $item_amount,
                    'description' => $item_name,
                    ]);

                //dd($charge);

                if ($charge['status'] == 'succeeded') {

                    $order['package_id'] = $request->package;
                    $order['pay_amount'] = $item_amount;
                    $order['method'] = "Stripe";
                    $order['customer_email'] = $request->customer_email;
                    $order['customer_state'] = $request->customer_state;
                    $order['customer_fname'] = $request->customer_fname;
                    $order['customer_lname'] = $request->customer_lname;
                    $order['customer_phone'] = $request->customer_phone;
                    $order['booking_date'] = date('Y-m-d H:i:s');
                    $order['order_number'] = $item_number;
                    $order['total_adults'] = $request->adults;
                    $order['total_childs'] = $request->childs;
                    $order['address'] = $request->address;
                    $order['city'] = $request->city;
                    $order['zip'] = $request->zip;
                    $order['txnid'] = $charge['balance_transaction'];
                    $order['charge_id'] = $charge['id'];
                    $order['payment_status'] = "Completed";
                    $order->save();
                    $notification = new Notification;
                    $notification->order_id = $order->id;
                    $notification->save();
        //Sending Email To Customer
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

                    return redirect($success_url);
                }

            }catch (Exception $e){
                return back()->with('unsuccess', $e->getMessage());
            }catch (\Cartalyst\Stripe\Exception\CardErrorException $e){
                return back()->with('unsuccess', $e->getMessage());
            }catch (\Cartalyst\Stripe\Exception\MissingParameterException $e){
                return back()->with('unsuccess', $e->getMessage());
            }
        }
        return back()->with('unsuccess', 'Please Enter Valid Credit Card Informations.');
    }
}

