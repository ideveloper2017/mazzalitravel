<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title','category_id', 'details', 'photo', 'source', 'views', 'created_at', 'updated_at', 'status','meta_tag','meta_description','tags'];

    public function category()
    {
    	return $this->belongsTo('App\Models\BlogCategory','category_id');
    }    

    public function getMetaTagAttribute($value)
    {
    	$common_rep  = ["value", "{", "}", "[","]",":","\""];
        return str_replace($common_rep, '', $value);
    }
    public function getTagsAttribute($value)
    {
    	$common_rep  = ["value", "{", "}", "[","]",":","\""];
        return str_replace($common_rep, '', $value);
    }
}
