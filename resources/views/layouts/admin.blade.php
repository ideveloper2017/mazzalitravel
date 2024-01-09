<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="{{$seo->meta_keys}}">
    <meta name="author" content="GeniusOcean">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/'.$gs->favicon)}}">
    <!-- Title  -->
    <title>{{$gs->title}}</title>

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/font-awesome.css') }}">

    <!-- Themify CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/themify-icons.css') }}">

    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap.min.css') }}">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/animate.css') }}">

    <!-- Bootstrap datatables CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/dataTables.bootstrap4.css') }}">

    <!-- Bootstrap color picker CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap-coloroicker.css') }}">

    <!-- Tagify CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/tagify.css') }}">

    <!-- Responsive bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/responsive.bootstrap.min.css') }}">

    <!-- Perfect Scrollbar CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/perfect-scrollbar.min.css') }}">

    <!-- Global CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/global-style.css') }}">

    <!-- Common CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/common.css') }}">
    
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/responsive.css') }}">

    @yield('styles')

</head>
<body>
    <div class="admin__wrap">
        <!-- Menu start -->
        <div class="wrap__left">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-right">
                        <button type="button" id="sidebarCollapse" class="navbar-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </nav>

            <div class="admin__sidebar" style="background-image: url({{asset('assets/images/'.$gs->bimg)}});">
                <div class="sidebar__wrap">
                    <nav id="sidebar__menu">
                        <ul class="list-unstyled profile">
                            <li>
                                <div class="admin d-flex align-items-center">
                                    <div class="admin__img">
                                        <img src="{{ Auth::guard('admin')->user()->photo ? asset('assets/images/admins/'.Auth::guard('admin')->user()->photo):asset('assets/images/noimage.png') }}" alt="profile image">
                                    </div>
                                    <div class="admin__title">    
                                        <a href="#homeSubmenu">{{ Auth::guard('admin')->user()->name }} <span>{{ Auth::guard('admin')->user()->role}}</span></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-unstyled components">
                            <li><a href="{{ route('admin-dashboard') }}"><i class="fas fa-fw fa-home"></i>Dashboard</a></li>
                            <li>
                                <a href="#orders" data-toggle="collapse" aria-expanded="false"><i class="fas fa-fw fa-balance-scale"></i>Orders</a>
                                <ul class="collapse list-unstyled submenu" id="orders">
                                    <li><a href="{{ route('admin-order-index') }}"><i class="ti-angle-right"></i>All Orders</a></li>
                                    <li><a href="{{ route('admin-order-pending') }}"><i class="ti-angle-right"></i>Pending Orders</a></li>
                                    <li><a href="{{ route('admin-order-completed') }}"><i class="ti-angle-right"></i>Completed Orders</a></li>
                                    <li><a href="{{ route('admin-order-declined') }}"><i class="ti-angle-right"></i>Declined Orders</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('admin-package-index') }}"><i class="fas fa-fw fa-gift"></i>Packages</a></li>

                            <li>
                                <a href="#blog" data-toggle="collapse" aria-expanded="false"><i class="fas fa-fw fa-newspaper"></i>Manage Blog</a>
                                <ul class="collapse list-unstyled submenu" id="blog">
                                    <li><a href="{{route('admin-cblog-index')}}"><i class="ti-angle-right"></i>Categories</a></li>
                                    <li><a href="{{route('admin-blog-index')}}"><i class="ti-angle-right"></i>Posts</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#generalSettings" data-toggle="collapse" aria-expanded="false"><i class="fas fa-cogs"></i>General Settings</a>
                                <ul class="collapse list-unstyled submenu" id="generalSettings">
                                    <li><a href="{{ route('admin-gs-logo') }}"><i class="ti-angle-right"></i>Logo</a></li>
                                    <li><a href="{{ route('admin-gs-fav') }}"><i class="ti-angle-right"></i>Favicon</a></li>
                                    <li><a href="{{ route('admin-gs-load') }}"><i class="ti-angle-right"></i>Loader</a></li>
                                    <li><a href="{{ route('admin-gs-bgimg') }}"><i class="ti-angle-right"></i>Background Image</a></li>
                                    <li><a href="{{ route('admin-gs-contents') }}"><i class="ti-angle-right"></i>Website Contents</a></li>
                                    <li><a href="{{ route('admin-img1-index') }}"><i class="ti-angle-right"></i>Why Us</a></li>
                                    <li><a href="{{ route('admin-gs-about') }}"><i class="ti-angle-right"></i>Footer</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#homePageSettings" data-toggle="collapse" aria-expanded="false"><i class="fas fa-edit"></i>Home Page Settings</a>
                                <ul class="collapse list-unstyled submenu" id="homePageSettings">
                                    <li><a href="{{ route('admin-gs-bg') }}"><i class="ti-angle-right"></i>Home Background Contents</a></li>
                                    <li><a href="{{ route('admin-service-index') }}"><i class="ti-angle-right"></i>Services</a></li>
                                    <li><a href="{{ route('admin-gs-sl') }}"><i class="ti-angle-right"></i>About Area</a></li>
                                    <li><a href="{{ route('admin-sl-index') }}"><i class="ti-angle-right"></i>About Area Sliders</a></li>
                                    <li><a href="{{ route('admin-gs-ts') }}"><i class="ti-angle-right"></i>Package Gallery Contents</a></li>
                                    <li><a href="{{ route('admin-img-index') }}"><i class="ti-angle-right"></i>Package Galleries</a></li>
                                    <li><a href="{{ route('admin-gs-fp') }}"><i class="ti-angle-right"></i>Feature Package Contents</a></li>
                                    <li><a href="{{ route('admin-gs-popup') }}"><i class="ti-angle-right"></i>Review Contents</a></li>
                                    <li><a href="{{ route('admin-gs-cimg') }}"><i class="ti-angle-right"></i>Review Background Image</a></li>
                                    <li><a href="{{ route('admin-ad-index') }}"><i class="ti-angle-right"></i>Testimonials</a></li>
                                    <li><a href="{{ route('admin-gs-bl') }}"><i class="ti-angle-right"></i>Latest Blog Contents</a></li>
                                    <li><a href="{{ route('admin-gs-bginfo') }}"><i class="ti-angle-right"></i>Customizations</a></li>
                                </ul>
                            </li>
                            <li>
                            <a href="#menuPageSettings" data-toggle="collapse" aria-expanded="false"><i class="fas fa-file-code"></i> Menu Page Settings</a>
                                <ul class="collapse list-unstyled submenu" id="menuPageSettings">
                                    <li><a href="{{ route('admin-fq-index') }}"><i class="ti-angle-right"></i>FAQ Page</a></li>
                                    <li><a href="{{ route('admin-ps-contact') }}"><i class="ti-angle-right"></i>Contact Us Page</a></li>
                                    <li><a href="{{ route('admin-page-index') }}"><i class="ti-angle-right"></i>Other Pages</a></li>
                                </ul>
                            </li>
                                <li>
                                    <a href="#payments" data-toggle="collapse" aria-expanded="false"><i class="fas fa-fw fa-dollar-sign"></i>Payment Settings</a>
                                    <ul class="collapse list-unstyled submenu" id="payments">
                                        <li><a href="{{route('admin-gs-payments')}}"><i class="ti-angle-right"></i> Payment Informations</a></li>
                                        <li><a href="{{route('admin-currency-index')}}"><i class="ti-angle-right"></i>Currencies</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#mailSettings" data-toggle="collapse" aria-expanded="false"><i class="fas fa-fw fa-at"></i>Email Settings</a>
                                    <ul class="collapse list-unstyled submenu" id="mailSettings">
                                        <li><a href="{{route('admin-mail-index')}}"><i class="ti-angle-right"></i>Email Templates</a></li>
                                        <li><a href="{{route('admin-mail-config')}}"><i class="ti-angle-right"></i>Email Configurations</a></li>
                                        <li><a href="{{route('admin-group-show')}}"><i class="ti-angle-right"></i>Group Email</a></li>
                                    </ul>
                                </li>
                            <li>
                                <a href="{{ route('admin-social-index') }}"><i class="fas fa-paper-plane"></i>Social Settings</a>
                            </li>
                            <li><a href="{{ route('admin-staff-index') }}"><i class="fas fa-user-secret"></i>Manage Staffs</a></li>
                            <li><a href="{{ route('admin-lang-index') }}"><i class="fas fa-language"></i>Language Settings</a></li>
                                <li>
                                    <a href="#seoTools" data-toggle="collapse" aria-expanded="false"><i class="fas fa-wrench"></i>SEO Tools</a>
                                    <ul class="collapse list-unstyled submenu" id="seoTools">
                                        <li><a href="{{route('admin-seotool-analytics')}}"><i class="ti-angle-right"></i> Google analytics</a></li>
                                        <li><a href="{{route('admin-seotool-keywords')}}"><i class="ti-angle-right"></i> Website meta keywords</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('admin-subs-index') }}"><i class="fas fa-users-cog"></i>Subscribers</a></li>
                            </ul>
                        </nav>
                    </div>
                </div> 
            </div>
            <!-- Menu end -->
            <!-- Content start -->
                @yield('content')
            <!-- Content end -->
        </div>

        <script type="text/javascript">
          var mainurl = "{{url('/')}}";
          var imgpath = '{{asset('assets/images/')}}';
          var gs      = {!! json_encode($gs->toArray()) !!};
        </script>

        <!-- jQuary Library -->
        <script src="{{ asset('assets/admin/js/vendor/modernizr-3.5.0.min.js') }}"></script>
        <script src="{{ asset('assets/admin/js/vendor/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('assets/admin/js/popper.min.js') }}"></script>

        <!-- Bootstrap Min JS -->
        <script src="{{ asset('assets/admin/js/bootstrap.min.js') }}"></script>

        <!--Datatables JS-->
        <script src="{{ asset('assets/admin/js/jquery.dataTables.min.js') }}"></script>

        <!-- Bootstrap datatables JS -->
        <script src="{{ asset('assets/admin/js/dataTables.bootstrap4.js') }}"></script>

        <!-- Datatables responsive JS-->
        <script src="{{ asset('assets/admin/js/dataTables.responsive.min.js') }}"></script>

        <!-- Bootstrap colorpicker JS -->
        <script src="{{ asset('assets/admin/js/bootstrap-colorpicker.min.js') }}"></script>

        <!-- Jquery Tagify -->
        <script src="{{ asset('assets/admin/js/tagify.min.js') }}"></script>

        <!-- Jquery Tagify -->
        <script src="{{ asset('assets/admin/js/jQuery.tagify.min.js') }}"></script>

        <!-- Responsive Bootstrap JS-->
        <script src="{{ asset('assets/admin/js/responsive.bootstrap.min.js') }}"></script>

        <!--Easing JS-->
        <script src="{{ asset('assets/admin/js/jquery.easing.1.3.js') }}"></script>

        <!--Wow JS-->
        <script src="{{ asset('assets/admin/js/wow.min.js') }}"></script>

        <!--Perfect scrollbar JS-->
        <script src="{{ asset('assets/admin/js/perfect-scrollbar.jquery.min.js') }}"></script>

        <!--Canvas JS-->
        <script src="{{ asset('assets/admin/js/jquery.canvasjs.min.js') }}"></script>

        <!--NICEDITOR JS-->
        <script src="{{ asset('assets/admin/js/nicEdit.js') }}"></script>

        <!--NOTIFY JS-->
        <script src="{{ asset('assets/admin/js/notify.js') }}"></script>

        <!-- Google Main JS(all jQuary activation code here and always it will be bottom of all script tag) -->
        <script src="{{ asset('assets/admin/js/main.js') }}"></script>

        <script src="{{ asset('assets/admin/js/script.js') }}"></script>

        @yield('scripts')
    </body>
    </html>