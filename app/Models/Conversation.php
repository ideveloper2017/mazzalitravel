<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
	protected $table = "doctor_user_conversations";
    protected $fillable = ['subject', 'user_id', 'doctor_id', 'message'];

	public function user()
	{
	    return $this->belongsTo('App\Models\User');
	}
	public function doctor()
	{
	    return $this->belongsTo('App\Models\Doctor');
	}
	public function messages()
	{
	    return $this->hasMany('App\Models\Message');
	}
	public function notifications()
	{
	    return $this->hasMany('App\Models\Notification','doctor_conv_id');
	}
}
