<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['package_id', 'pay_amount', 'txnid', 'order_number', 'payment_status', 'customer_state', 'customer_email', 'customer_phone', 'booking_date', 'total_adults', 'total_childs', 'status', 'customer_fname', 'customer_lname'];
    public $timestamps = false;
    public static $withoutAppends = false;


    public function package()
    {
        return $this->belongsTo('App\Models\Package');
    }
    public function notifications()
    {
        return $this->belongsTo('App\Models\Notification');
    }

}
