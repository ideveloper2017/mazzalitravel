<?php

use App\Http\Controllers\Front\FrontendController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('admin/notf', function() {
    return View::make('notf');
  });
  Route::get('/json/notf','Json\JsonRequestController@count_notf');
  Route::get('/json/notf/clear','Json\JsonRequestController@notf_clear');


  Route::get('/json/productsdata','Json\JsonRequestController@sectionProducts');
  Route::get('/json/suggest','Json\JsonRequestController@suggest');

  Route::get('/json/gallery','Json\JsonRequestController@gallery');
  Route::post('/json/addgallery','Json\JsonRequestController@addgallery');
  Route::get('/json/removegallery','Json\JsonRequestController@delgallery');

  Route::prefix('admin')->group(function() {

  Route::get('/dashboard', 'App\Http\Controllers\Admin\AdminController@index')->name('admin-dashboard');
  Route::get('/profile', 'App\Http\Controllers\Admin\AdminController@profile')->name('admin-profile');
  Route::post('/profile', 'App\Http\Controllers\Admin\AdminController@profileupdate')->name('admin-profile-update');
  Route::get('/reset-password', 'App\Http\Controllers\Admin\AdminController@passwordreset')->name('admin-password-reset');
  Route::post('/reset-password', 'App\Http\Controllers\Admin\AdminController@changepass')->name('admin-password-change');
  Route::get('/', 'App\Http\Controllers\Admin\AdminLoginController@showLoginForm')->name('admin-login');
  Route::post('/login', 'App\Http\Controllers\Admin\AdminLoginController@login')->name('admin-login-submit');
  Route::get('/logout', 'App\Http\Controllers\Admin\AdminLoginController@logout')->name('admin-logout');

  Route::get('/orders', 'App\Http\Controllers\Admin\AdminOrderController@index')->name('admin-order-index');
  Route::get('/orders/pending', 'App\Http\Controllers\Admin\AdminOrderController@pending')->name('admin-order-pending');
  Route::get('/orders/completed', 'App\Http\Controllers\Admin\AdminOrderController@completed')->name('admin-order-completed');
  Route::get('/orders/declined', 'App\Http\Controllers\Admin\AdminOrderController@declined')->name('admin-order-declined');
  Route::get('/order/{id}/show', 'App\Http\Controllers\Admin\AdminOrderController@show')->name('admin-order-show');
  Route::get('/order/{id1}/status/{status}', 'App\Http\Controllers\Admin\AdminOrderController@status')->name('admin-order-status');
  Route::post('/order/email/', 'App\Http\Controllers\Admin\AdminOrderController@emailsub')->name('admin-order-emailsub');



  Route::get('/package', 'App\Http\Controllers\Admin\PackageController@index')->name('admin-package-index');
  Route::get('/package/create', 'App\Http\Controllers\Admin\PackageController@create')->name('admin-package-create');
  Route::post('/package/create', 'App\Http\Controllers\Admin\PackageController@store')->name('admin-package-store');
  Route::get('/package/edit/{id}', 'App\Http\Controllers\Admin\PackageController@edit')->name('admin-package-edit');
  Route::post('/package/update/{id}', 'App\Http\Controllers\Admin\PackageController@update')->name('admin-package-update');
  Route::get('/package/delete/{id}', 'App\Http\Controllers\Admin\PackageController@destroy')->name('admin-package-delete');
  Route::get('/package/featured/{id}/{status}', 'App\Http\Controllers\Admin\PackageController@featured')->name('admin-package-featured');


  Route::get('/blog', 'App\Http\Controllers\Admin\AdminBlogController@index')->name('admin-blog-index');
  Route::get('/blog/create', 'App\Http\Controllers\Admin\AdminBlogController@create')->name('admin-blog-create');
  Route::post('/blog/create', 'App\Http\Controllers\Admin\AdminBlogController@store')->name('admin-blog-store');
  Route::get('/blog/edit/{id}', 'App\Http\Controllers\Admin\AdminBlogController@edit')->name('admin-blog-edit');
  Route::post('/blog/edit/{id}', 'App\Http\Controllers\Admin\AdminBlogController@update')->name('admin-blog-update');
  Route::get('/blog/delete/{id}', 'App\Http\Controllers\Admin\AdminBlogController@destroy')->name('admin-blog-delete');

  Route::get('/blog/category', 'App\Http\Controllers\Admin\AdminBlogCategoryController@index')->name('admin-cblog-index');
  Route::get('/blog/category/create', 'App\Http\Controllers\Admin\AdminBlogCategoryController@create')->name('admin-cblog-create');
  Route::post('/blog/category/create', 'App\Http\Controllers\Admin\AdminBlogCategoryController@store')->name('admin-cblog-store');
  Route::get('/blog/category/edit/{id}', 'App\Http\Controllers\Admin\AdminBlogCategoryController@edit')->name('admin-cblog-edit');
  Route::post('/blog/category/edit/{id}', 'App\Http\Controllers\Admin\AdminBlogCategoryController@update')->name('admin-cblog-update');
  Route::get('/blog/category/delete/{id}', 'App\Http\Controllers\Admin\AdminBlogCategoryController@destroy')->name('admin-cblog-delete');


  Route::group(['middleware'=>'admininistrator'],function(){

  Route::get('/bottom-banners', 'App\Http\Controllers\Admin\ImageController@index')->name('admin-img1-index');
  Route::get('/bottom-banner/create', 'App\Http\Controllers\Admin\ImageController@create')->name('admin-img1-create');
  Route::post('/bottom-banner/create', 'App\Http\Controllers\Admin\ImageController@store')->name('admin-img1-store');
  Route::get('/bottom-banner/edit/{id}', 'App\Http\Controllers\Admin\ImageController@edit')->name('admin-img1-edit');
  Route::post('/bottom-banner/edit/{id}', 'App\Http\Controllers\Admin\ImageController@update')->name('admin-img1-update');
  Route::get('/bottom-banner/delete/{id}', 'App\Http\Controllers\Admin\ImageController@destroy')->name('admin-img1-delete');


  Route::get('/faq', 'App\Http\Controllers\Admin\FaqController@index')->name('admin-fq-index');
  Route::get('/faq/create', 'App\Http\Controllers\Admin\FaqController@create')->name('admin-fq-create');
  Route::post('/faq/create', 'App\Http\Controllers\Admin\FaqController@store')->name('admin-fq-store');
  Route::get('/faq/edit/{id}', 'App\Http\Controllers\Admin\FaqController@edit')->name('admin-fq-edit');
  Route::post('/faq/update/{id}', 'App\Http\Controllers\Admin\FaqController@update')->name('admin-fq-update');
  Route::get('/faq/delete/{id}', 'App\Http\Controllers\Admin\FaqController@destroy')->name('admin-fq-delete');
  Route::get('/faq/status/{id}/{status}', 'App\Http\Controllers\Admin\FaqController@status')->name('admin-fq-status');

  Route::get('/page', 'App\Http\Controllers\Admin\PageController@index')->name('admin-page-index');
  Route::get('/page/create', 'App\Http\Controllers\Admin\PageController@create')->name('admin-page-create');
  Route::post('/page/create', 'App\Http\Controllers\Admin\PageController@store')->name('admin-page-store');
  Route::get('/page/edit/{id}', 'App\Http\Controllers\Admin\PageController@edit')->name('admin-page-edit');
  Route::post('/page/update/{id}', 'App\Http\Controllers\Admin\PageController@update')->name('admin-page-update');
  Route::get('/page/delete/{id}', 'App\Http\Controllers\Admin\PageController@destroy')->name('admin-page-delete');

  Route::get('/testimonial', 'App\Http\Controllers\Admin\PortfolioController@index')->name('admin-ad-index');
  Route::get('/testimonial/create', 'App\Http\Controllers\Admin\PortfolioController@create')->name('admin-ad-create');
  Route::post('/testimonial/create', 'App\Http\Controllers\Admin\PortfolioController@store')->name('admin-ad-store');
  Route::get('/testimonial/edit/{id}', 'App\Http\Controllers\Admin\PortfolioController@edit')->name('admin-ad-edit');
  Route::post('/testimonial/edit/{id}', 'App\Http\Controllers\Admin\PortfolioController@update')->name('admin-ad-update');
  Route::get('/testimonial/delete/{id}', 'App\Http\Controllers\Admin\PortfolioController@destroy')->name('admin-ad-delete');

  Route::get('/services', 'App\Http\Controllers\Admin\AdminServiceController@index')->name('admin-service-index');
  Route::get('/services/create', 'App\Http\Controllers\Admin\AdminServiceController@create')->name('admin-service-create');
  Route::post('/services/create', 'App\Http\Controllers\Admin\AdminServiceController@store')->name('admin-service-store');
  Route::get('/services/edit/{id}', 'App\Http\Controllers\Admin\AdminServiceController@edit')->name('admin-service-edit');
  Route::post('/services/edit/{id}', 'App\Http\Controllers\Admin\AdminServiceController@update')->name('admin-service-update');
  Route::get('/services/delete/{id}', 'App\Http\Controllers\Admin\AdminServiceController@destroy')->name('admin-service-delete');

  Route::get('/slider', 'App\Http\Controllers\Admin\SliderController@index')->name('admin-sl-index');
  Route::get('/slider/create', 'App\Http\Controllers\Admin\SliderController@create')->name('admin-sl-create');
  Route::post('/slider/create', 'App\Http\Controllers\Admin\SliderController@store')->name('admin-sl-store');
  Route::get('/slider/edit/{id}', 'App\Http\Controllers\Admin\SliderController@edit')->name('admin-sl-edit');
  Route::post('/slider/edit/{id}', 'App\Http\Controllers\Admin\SliderController@update')->name('admin-sl-update');
  Route::get('/slider/delete/{id}', 'App\Http\Controllers\Admin\SliderController@destroy')->name('admin-sl-delete');

  Route::get('/brand', 'App\Http\Controllers\Admin\BrandController@index')->name('admin-img-index');
  Route::get('/brand/create', 'App\Http\Controllers\Admin\BrandController@create')->name('admin-img-create');
  Route::post('/brand/create', 'App\Http\Controllers\Admin\BrandController@store')->name('admin-img-store');
  Route::get('/brand/edit/{id}', 'App\Http\Controllers\Admin\BrandController@edit')->name('admin-img-edit');
  Route::post('/brand/edit/{id}', 'App\Http\Controllers\Admin\BrandController@update')->name('admin-img-update');
  Route::get('/brand/delete/{id}', 'App\Http\Controllers\Admin\BrandController@destroy')->name('admin-img-delete');


  Route::get('/page-settings/contact', 'App\Http\Controllers\Admin\PageSettingController@contact')->name('admin-ps-contact');
  Route::post('/page-settings/contact', 'App\Http\Controllers\Admin\PageSettingController@contactupdate')->name('admin-ps-contact-submit');

  Route::get('/staff', 'App\Http\Controllers\Admin\AdminStaffController@index')->name('admin-staff-index');
  Route::get('/staff/create', 'App\Http\Controllers\Admin\AdminStaffController@create')->name('admin-staff-create');
  Route::post('/staff/create', 'App\Http\Controllers\Admin\AdminStaffController@store')->name('admin-staff-store');
  Route::get('/staff/edit/{id}', 'App\Http\Controllers\Admin\AdminStaffController@show')->name('admin-staff-show');
  Route::get('/staff/delete/{id}', 'App\Http\Controllers\Admin\AdminStaffController@destroy')->name('admin-staff-delete');

  Route::get('/currency', 'App\Http\Controllers\Admin\AdminCurrencyController@index')->name('admin-currency-index');
  Route::get('/currency/create', 'App\Http\Controllers\Admin\AdminCurrencyController@create')->name('admin-currency-create');
  Route::post('/currency/create', 'App\Http\Controllers\Admin\AdminCurrencyController@store')->name('admin-currency-store');
  Route::get('/currency/edit/{id}', 'App\Http\Controllers\Admin\AdminCurrencyController@edit')->name('admin-currency-edit');
  Route::post('/currency/update/{id}', 'App\Http\Controllers\Admin\AdminCurrencyController@update')->name('admin-currency-update');
  Route::get('/currency/delete/{id}', 'App\Http\Controllers\Admin\AdminCurrencyController@destroy')->name('admin-currency-delete');
  Route::get('/currency/status/{id1}/{id2}', 'App\Http\Controllers\Admin\AdminCurrencyController@status')->name('admin-currency-st');

  Route::post('/user/send/message', 'App\Http\Controllers\Admin\AdminController@usercontact')->name('admin-send-message');


  Route::get('/social', 'App\Http\Controllers\Admin\SocialSettingController@index')->name('admin-social-index');
  Route::post('/social/update', 'App\Http\Controllers\Admin\SocialSettingController@update')->name('admin-social-update');
  Route::get('/social/facebook', 'App\Http\Controllers\Admin\SocialSettingController@facebook')->name('admin-social-facebook');
  Route::post('/social/facebook', 'App\Http\Controllers\Admin\SocialSettingController@facebookupdate')->name('admin-social-ufacebook');
  Route::get('/social/google', 'App\Http\Controllers\Admin\SocialSettingController@google')->name('admin-social-google');
  Route::post('/social/google', 'App\Http\Controllers\Admin\SocialSettingController@googleupdate')->name('admin-social-ugoogle');
  Route::get('/seotools/analytics', 'App\Http\Controllers\Admin\SeoToolController@analytics')->name('admin-seotool-analytics');
  Route::post('/seotools/analytics/update', 'App\Http\Controllers\Admin\SeoToolController@analyticsupdate')->name('admin-seotool-analytics-update');
  Route::get('/seotools/keywords', 'App\Http\Controllers\Admin\SeoToolController@keywords')->name('admin-seotool-keywords');
  Route::post('/seotools/keywords/update', 'App\Http\Controllers\Admin\SeoToolController@keywordsupdate')->name('admin-seotool-keywords-update');

  Route::get('/general-settings/logo', 'App\Http\Controllers\Admin\GeneralSettingController@logo')->name('admin-gs-logo');
  Route::post('/general-settings/logo', 'App\Http\Controllers\Admin\GeneralSettingController@logoup')->name('admin-gs-logoup');

  Route::get('/general-settings/affilate', 'App\Http\Controllers\Admin\GeneralSettingController@affilate')->name('admin-gs-affilate');
  Route::post('/general-settings/affilate', 'App\Http\Controllers\Admin\GeneralSettingController@affilateup')->name('admin-gs-affilateup');

  Route::get('/general-settings/review-contents', 'App\Http\Controllers\Admin\GeneralSettingController@appoinments')->name('admin-gs-popup');
  Route::post('/general-settings/review-contents', 'App\Http\Controllers\Admin\GeneralSettingController@appoinmentsup')->name('admin-gs-popupup');

  Route::get('/general-settings/background', 'App\Http\Controllers\Admin\GeneralSettingController@bg')->name('admin-gs-bg');
  Route::post('/general-settings/background', 'App\Http\Controllers\Admin\GeneralSettingController@bgup')->name('admin-gs-bgup');

  Route::get('/general-settings/slider-content', 'App\Http\Controllers\Admin\GeneralSettingController@sl')->name('admin-gs-sl');
  Route::post('/general-settings/slider-content', 'App\Http\Controllers\Admin\GeneralSettingController@slup')->name('admin-gs-slup');

  Route::get('/general-settings/blog-content', 'App\Http\Controllers\Admin\GeneralSettingController@bl')->name('admin-gs-bl');
  Route::post('/general-settings/blog-content', 'App\Http\Controllers\Admin\GeneralSettingController@blup')->name('admin-gs-blup');

  Route::get('/general-settings/top-slider-content', 'App\Http\Controllers\Admin\GeneralSettingController@ts')->name('admin-gs-ts');
  Route::post('/general-settings/top-slider-content', 'App\Http\Controllers\Admin\GeneralSettingController@tsup')->name('admin-gs-tsup');

  Route::get('/general-settings/feature-content', 'App\Http\Controllers\Admin\GeneralSettingController@fp')->name('admin-gs-fp');
  Route::post('/general-settings/feature-content', 'App\Http\Controllers\Admin\GeneralSettingController@fpup')->name('admin-gs-fpup');

  Route::get('/general-settings/favicon', 'App\Http\Controllers\Admin\GeneralSettingController@fav')->name('admin-gs-fav');
  Route::post('/general-settings/favicon', 'App\Http\Controllers\Admin\GeneralSettingController@favup')->name('admin-gs-favup');

  Route::get('/general-settings/payments', 'App\Http\Controllers\Admin\GeneralSettingController@payments')->name('admin-gs-payments');
  Route::post('/general-settings/payments', 'App\Http\Controllers\Admin\GeneralSettingController@paymentsup')->name('admin-gs-paymentsup');
  Route::get('/general-settings/guest/{status}', 'App\Http\Controllers\Admin\GeneralSettingController@guest')->name('admin-gs-guest');
  Route::get('/general-settings/paypal/{status}', 'App\Http\Controllers\Admin\GeneralSettingController@paypal')->name('admin-gs-paypal');
  Route::get('/general-settings/stripe/{status}', 'App\Http\Controllers\Admin\GeneralSettingController@stripe')->name('admin-gs-stripe');
  Route::get('/general-settings/cod/{status}', 'App\Http\Controllers\Admin\GeneralSettingController@cod')->name('admin-gs-cod');

  Route::get('/general-settings/contents', 'App\Http\Controllers\Admin\GeneralSettingController@contents')->name('admin-gs-contents');
  Route::post('/general-settings/contents', 'App\Http\Controllers\Admin\GeneralSettingController@contentsup')->name('admin-gs-contentsup');

  Route::get('/general-settings/bgimg', 'App\Http\Controllers\Admin\GeneralSettingController@bgimg')->name('admin-gs-bgimg');
  Route::post('/general-settings/bgimgup', 'App\Http\Controllers\Admin\GeneralSettingController@bgimgup')->name('admin-gs-bgimgup');

  Route::get('/general-settings/cimg', 'App\Http\Controllers\Admin\GeneralSettingController@cimg')->name('admin-gs-cimg');
  Route::post('/general-settings/cimgup', 'App\Http\Controllers\Admin\GeneralSettingController@cimgup')->name('admin-gs-cimgup');

  Route::get('/general-settings/copyright', 'App\Http\Controllers\Admin\GeneralSettingController@about')->name('admin-gs-about');
  Route::post('/general-settings/copyright', 'App\Http\Controllers\Admin\GeneralSettingController@aboutup')->name('admin-gs-aboutup');

  Route::get('/general-settings/home-info', 'App\Http\Controllers\Admin\GeneralSettingController@bginfo')->name('admin-gs-bginfo');
  Route::post('/general-settings/home-info', 'App\Http\Controllers\Admin\GeneralSettingController@bginfoup')->name('admin-gs-bginfoup');

  Route::get('/general-settings/feature', 'App\Http\Controllers\Admin\GeneralSettingController@feature')->name('admin-gs-feature');
  Route::post('/general-settings/feature', 'App\Http\Controllers\Admin\GeneralSettingController@featureup')->name('admin-gs-featureup');

  Route::get('/general-settings/success', 'App\Http\Controllers\Admin\GeneralSettingController@successm')->name('admin-gs-successm');
  Route::post('/general-settings/success', 'App\Http\Controllers\Admin\GeneralSettingController@successmup')->name('admin-gs-successmup');

  Route::get('/subscribers', 'App\Http\Controllers\Admin\SubscriberController@index')->name('admin-subs-index');
  Route::get('/subscribers/download', 'App\Http\Controllers\Admin\SubscriberController@download')->name('admin-subs-download');

  Route::get('/languages', 'App\Http\Controllers\Admin\LanguageController@index')->name('admin-lang-index');
  Route::get('/languages/create', 'App\Http\Controllers\Admin\LanguageController@create')->name('admin-lang-create');
  Route::get('/languages/edit/{id}', 'App\Http\Controllers\Admin\LanguageController@edit')->name('admin-lang-edit');
  Route::post('/languages/create', 'App\Http\Controllers\Admin\LanguageController@store')->name('admin-lang-store');
  Route::post('/languages/edit/{id}', 'App\Http\Controllers\Admin\LanguageController@update')->name('admin-lang-update');
  Route::get('/languages/delete/{id}', 'App\Http\Controllers\Admin\LanguageController@destroy')->name('admin-lang-delete');
  Route::get('/languages/status/{id1}/{id2}', 'App\Http\Controllers\Admin\LanguageController@status')->name('admin-lang-st');
  Route::get('/regvendor/{status}', 'App\Http\Controllers\Admin\GeneralSettingController@regvendor')->name('admin-gs-regvendor');
  Route::get('/rtl/{status}', 'App\Http\Controllers\Admin\GeneralSettingController@rtl')->name('admin-gs-rtl');
  Route::get('/vendor/registration', 'App\Http\Controllers\Admin\GeneralSettingController@reg')->name('admin-gs-reg');

  Route::get('/general-settings/loader', 'App\Http\Controllers\Admin\GeneralSettingController@load')->name('admin-gs-load');
  Route::post('/general-settings/loader', 'App\Http\Controllers\Admin\GeneralSettingController@loadup')->name('admin-gs-loadup');


  Route::get('/email-templates', 'App\Http\Controllers\Admin\EmailController@index')->name('admin-mail-index');
  Route::get('/email-templates/{id}', 'App\Http\Controllers\Admin\EmailController@edit')->name('admin-mail-edit');
  Route::post('/email-templates/{id}', 'App\Http\Controllers\Admin\EmailController@update')->name('admin-mail-update');
  Route::get('/email-config', 'App\Http\Controllers\Admin\EmailController@config')->name('admin-mail-config');
  Route::post('/email-config', 'App\Http\Controllers\Admin\EmailController@configupdate')->name('admin-mail-configupdate');
  Route::get('/groupemail', 'App\Http\Controllers\Admin\EmailController@groupemail')->name('admin-group-show');
  Route::post('/groupemailpost', 'App\Http\Controllers\Admin\EmailController@groupemailpost')->name('admin-group-submit');
  Route::get('/faqup/{status}', 'App\Http\Controllers\Admin\PageSettingController@faqupdate')->name('admin-faq-update');
  Route::get('/contact/{status}', 'App\Http\Controllers\Admin\PageSettingController@contactup')->name('admin-ps-contactup');
  Route::get('/issmtp/{status}', 'App\Http\Controllers\Admin\GeneralSettingController@issmtp')->name('admin-gs-issmtp');
  Route::get('/talkto/{status}', 'App\Http\Controllers\Admin\GeneralSettingController@talkto')->name('admin-gs-talkto');
  Route::get('/loader/{status}', 'App\Http\Controllers\Admin\GeneralSettingController@isloader')->name('admin-gs-isloader');
  Route::get('/currencyup/{status}', 'App\Http\Controllers\Admin\PageSettingController@currencyup')->name('admin-cur-update');
  Route::get('/langup/{status}', 'App\Http\Controllers\Admin\GeneralSettingController@lungup')->name('admin-lung-update');
  Route::get('/facebook/{status}', 'App\Http\Controllers\Admin\SocialSettingController@facebookup')->name('admin-social-facebookup');
  Route::get('/google/{status}', 'App\Http\Controllers\Admin\SocialSettingController@googleup')->name('admin-social-googleup');
  Route::get('/loader/{status}', 'App\Http\Controllers\Admin\GeneralSettingController@isloader')->name('admin-gs-isloader');
  Route::get('/disqus/{status}', 'App\Http\Controllers\Admin\GeneralSettingController@isdisqus')->name('admin-gs-isdisqus');


    });
  });


  Route::post('the/genius/ocean/2441139', [FrontendController::class,'subscription']);
  Route::get('finalize', [FrontendController::class,'finalize']);



  Route::get('/',[FrontendController::class,'index'])->name('front.index');

  // BLOG SECTION

  Route::get('/blog','App\Http\Controllers\Front\FrontendController@blog')->name('front.blog');
  Route::get('/blog/{id}','App\Http\Controllers\Front\FrontendController@blogshow')->name('front.blogshow');
  Route::get('/blog/category/{slug}','App\Http\Controllers\Front\FrontendController@blogcategory')->name('front.blogcategory');
  Route::get('/blog/tag/{slug}','App\Http\Controllers\Front\FrontendController@blogtags')->name('front.blogtags');
  Route::get('/blog-search','App\Http\Controllers\Front\FrontendController@blogsearch')->name('front.blogsearch');
  Route::get('/blog/archive/{slug}','App\Http\Controllers\Front\FrontendController@blogarchive')->name('front.blogarchive');

  // BLOG SECTION ENDS

  Route::get('/packages','App\Http\Controllers\Front\FrontendController@packages')->name('front.packages');
  Route::get('/package/{id}/{slug}','App\Http\Controllers\Front\FrontendController@package')->name('front.package');

  Route::get('/faq','App\Http\Controllers\Front\FrontendController@faq')->name('front.faq');
  Route::get('/contact','App\Http\Controllers\Front\FrontendController@contact')->name('front.contact');
  Route::post('/contact','App\Http\Controllers\Front\FrontendController@contactemail')->name('front.contact.submit');
  Route::post('/subscribe','App\Http\Controllers\Front\FrontendController@subscribe')->name('front.subscribe.submit');
  Route::get('/contact/refresh_code','App\Http\Controllers\Front\FrontendController@refresh_code');

  Route::post('/tour/order/{id}', 'App\Http\Controllers\Front\FrontendController@order');
  Route::get('/tour/order/{id}', 'App\Http\Controllers\Front\FrontendController@orders')->name('front.orders');

  Route::post('/payment', 'App\Http\Controllers\Front\PaymentController@store')->name('payment.submit');
  Route::get('/payment/cancle', 'App\Http\Controllers\Front\PaymentController@paycancle')->name('payment.cancle');
  Route::get('/payment/return', 'App\Http\Controllers\Front\PaymentController@payreturn')->name('payment.return');
  Route::post('/payment/notify', 'App\Http\Controllers\Front\PaymentController@notify')->name('payment.notify');

  Route::post('/stripe-submit', 'App\Http\Controllers\Front\StripeController@store')->name('stripe.submit');

  Route::get('/{slug}','App\Http\Controllers\Front\FrontendController@page')->name('front.page');
