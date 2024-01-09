<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['title', 'slug', 'text','meta_tag','meta_description'];
    public $timestamps = false;
    public function getMetaTagAttribute($value)
    {
    	$common_rep  = ["value", "{", "}", "[","]",":","\""];
        return str_replace($common_rep, '', $value);
    }
}
