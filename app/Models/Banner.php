<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = ['ftitle','ftext','flink','stitle','stext','slink','ttitle','ttext','tlink'];
    public $timestamps = false;
}
