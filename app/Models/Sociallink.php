<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sociallink extends Model
{
    protected $fillable = ['facebook', 'twitter', 'gplus', 'linkedin', 'f_status', 't_status', 'g_status', 'l_status','fcheck','gcheck','fclient_id','fclient_secret','fredirect','gclient_id','gclient_secret','gredirect','pinterest','p_status'];
    public $timestamps = false;
}
