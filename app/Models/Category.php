<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['cat_name', 'cat_slug','featured','photo'];
    public $timestamps = false;

    public function doctors()
    {
        return $this->hasMany('App\Models\Doctor');
    }
}
