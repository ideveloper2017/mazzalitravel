<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = ['title', 'name', 'description', 'start_date', 'return_date', 'location', 'photo', 'cost_adult', 'cost_child', 'includes', 'excludes', 'highlight_discount', 'featured', 'created_at', 'updated_at','status','cost_previous','highlights','offer_title','offer_day','offer_subtitle','offer_tags','offer_details'];

    public static $withoutAppends = true;

    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }
    public function galleries()
    {
        return $this->hasMany('App\Models\Gallery');
    }

    public function getIncludesAttribute($includes)
    {
        if(self::$withoutAppends){
            return $includes;
        }
        return explode(',', $includes);
    }
    public function getExcludesAttribute($excludes)
    {
        if(self::$withoutAppends){
            return $excludes;
        }
        return explode(',', $excludes);
    }
    public function setStartDateAttribute($value)
    {
        $this->attributes['start_date'] = \Carbon\Carbon::parse($value)->format('Y-m-d');
    }
    public function setReturnDateAttribute($value)
    {
        $this->attributes['return_date'] = \Carbon\Carbon::parse($value)->format('Y-m-d');
    }
    public function setIncludesAttribute($value)
    {
        $common_rep  = ["value", "{", "}", "[","]",":","\""];
        $this->attributes['includes'] = str_replace($common_rep, '', $value);
    }
    public function setExcludesAttribute($value)
    {
        $common_rep  = ["value", "{", "}", "[","]",":","\""];
        $this->attributes['excludes'] = str_replace($common_rep, '', $value);
    }
    public function setHighlightsAttribute($value)
    {
        $common_rep  = ["value", "{", "}", "[","]",":","\""];
        $this->attributes['highlights'] = str_replace($common_rep, '', $value);
    }
}
