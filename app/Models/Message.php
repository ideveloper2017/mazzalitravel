<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
	protected $table = "doctor_user_messages";
    protected $fillable = ['conversation_id', 'user_id', 'doctor_id', 'message'];

	public function conversation()
	{
	    return $this->belongsTo('App\Models\Conversation');
	}
	public function user()
	{
	    return $this->belongsTo('App\Models\User');
	}
	public function doctor()
	{
	    return $this->belongsTo('App\Models\Doctor');
	}
}
