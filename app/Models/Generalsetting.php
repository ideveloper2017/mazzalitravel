<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Generalsetting extends Model
{
    protected $fillable = ['logo', 'favicon', 'title', 'site', 'bgimg','cimg', 'about', 'street', 'phone', 'fax', 'email', 'footer', 'bg_link','bg_video','bg_title','bg_text','np','fp','pb','sk','ss','vid','vidimg','tags','sign','slider','category','sb','hv','ftp','lp','pp','lb','bs','ts','bl','ship','mmi','bi','pcheck','scheck','mcheck','bcheck','ccheck','colors','bimg','loader','is_talkto','talkto','appoint_title','appoint_text','appoint_image','appoint_background','is_language','smtp_host', 'smtp_port', 'smtp_user', 'smtp_pass', 'from_email', 'from_name','is_smtp','is_comment','footer_background','is_loader','map_key','is_disqus','disqus','subscribe_title','subscribe_text','review_title','review_text','top_title','top_text','top_link','second_title','second_text','second_link','top_image','video_image','blog_title','blog_text','ts_title','ts_text','fp_title','fp_text'];

    public $timestamps = false;
}
