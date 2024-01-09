<?php

namespace App\Providers;

use App\Models\Admin;
use App\Models\Blog;
use App\Models\Currency;
use App\Models\Generalsetting;
use App\Models\Language;
use App\Models\Page;
use App\Models\Pagesetting;
use App\Models\Seotool;
use App\Models\Sociallink;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Admin::auth_admins();
        Schema::defaultStringLength(191);
        $data = Generalsetting::find(1);
        Config::set('mail.port', $data->smtp_port);
        Config::set('mail.host', $data->smtp_host);
        Config::set('mail.username', $data->smtp_user);
        Config::set('mail.password', $data->smtp_pass);

        view()->composer('*',function($settings){
            $settings->with('curr', Currency::where('is_default','=',1)->first());
            $settings->with('gs', Generalsetting::find(1));
            $settings->with('sl', Sociallink::find(1));
            $settings->with('seo', Seotool::find(1));
            $settings->with('ps', Pagesetting::find(1));
            $settings->with('lang', Language::where('is_default','=',1)->first());
            $settings->with('lblogs', Blog::orderBy('created_at', 'desc')->limit(4)->get());
            $settings->with('pages', Page::all());
        });
    }
}
