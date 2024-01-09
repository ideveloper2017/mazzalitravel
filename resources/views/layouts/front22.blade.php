<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @if(isset($page_meta_tag) && isset($page_meta_description))
    <meta name="keywords" content="{{ $page_meta_tag }}">
    <meta name="description" content="{{ $page_meta_description }}"> 
  @elseif(isset($blog_meta_tag) && isset($blog_meta_description))
    <meta name="keywords" content="{{ $blog_meta_tag }}">
    <meta name="description" content="{{ $blog_meta_description }}"> 
  @else
    <meta name="keywords" content="{{ $seo->meta_keys }}">
  @endif
  <title> {{ $gs->title }}</title>
  <!-- favicon -->
  <link rel="shortcut icon" href="{{ asset('assets/images/'.$gs->favicon) }}" type="image/x-icon">
  <!-- bootstrap -->
  <link rel="stylesheet" href="{{ asset('assets/front/css/bootstrap.min.css') }}">
  <!-- fontawesome -->
  <link rel="stylesheet" href="{{ asset('assets/front/css/fontawesome.css') }}">

  <!-- jQuery Ui Css-->
  <link rel="stylesheet" href="{{ asset('assets/front/jquery-ui/jquery-ui.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/front/jquery-ui/jquery-ui.structure.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/front/jquery-ui/jquery-ui.theme.min.css') }}">

  <!-- IcoFont -->
  <link rel="stylesheet" href="{{ asset('assets/front/css/icofont.min.css') }}">

  <!-- Owl Carousel -->
  <link rel="stylesheet" href="{{ asset('assets/front/css/owl.carousel.min.css') }}">
  <!-- animate -->
  <link rel="stylesheet" href="{{ asset('assets/front/css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/front/css/magnific-popup.css')}}">

  <!-- stylesheet -->
  <link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}">
  <!-- responsive -->
  <link rel="stylesheet" href="{{ asset('assets/front/css/responsive.css') }}">

    <!--Updated CSS-->
  <link rel="stylesheet" href="{{ asset('assets/front/css/styles.php?color='.str_replace('#','',$gs->colors)) }}">

  @yield('styles')

</head>

<body>
@if($gs->is_loader == 1)
<div id="cover" style="background: url({{asset('assets/images/'.$gs->loader)}});"></div>
@endif
  <!-- Navebar Area start -->
  <header class="navigation">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 p-0">
            <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand" href="{{ route('front.index') }}">
                <img src="{{ asset('assets/images/'.$gs->logo) }}" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu"
               aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="mainmenu">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="{{ route('front.index') }}">{{ $lang->lang1 }}</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('front.packages') }}">{{ $lang->lang2 }}</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('front.blog') }}">{{ $lang->lang3 }}</a>
                  </li>
                  @if($ps->f_status == 1)
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('front.faq') }}">{{ $lang->lang4 }}</a>
                  </li>
                  @endif
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      {{ $lang->lang5 }}
                    </a>
                    <div class="dropdown-menu">
                      @foreach ($pages as $page)
                        <a class="dropdown-item" href="{{ route('front.page',$page->slug) }}">{{ $page->title }}</a>
                      @endforeach
                    </div>
                  </li>
                </ul>
                @if($ps->c_status == 1)
                <a href="{{ route('front.contact') }}" class="contact-btn">{{ $lang->lang6 }}</a>
                @endif
              </div>
            </nav>
          </div>
        </div>
      </div>
  </header>
  <!-- Navebar Area End -->  

  @yield('content')

    <!-- Footer Area Start -->
    <footer class="footer-area" style="background-image: url({{asset('assets/images/'.$gs->footer_background)}}">
      <div class="footer-top-linka">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="about-widget">
                <h4 class="title">{{ $lang->lang76 }}</h4>
                <p>{{ $gs->about }}</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="link-widget">
                  <h4 class="title">{{ $lang->lang77 }}</h4>
                  <ul class="links">
                    <li>
                      <a href="{{ route('front.index') }}">
                          <i class="fas fa-angle-double-right"></i>
                          {{ $lang->lang1 }}
  
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('front.faq') }}">
                          <i class="fas fa-angle-double-right"></i>
                          {{ $lang->lang4 }}

                      </a>
                    </li>
                    <li>
                      <a href="{{ route('front.contact') }}">
                          <i class="fas fa-angle-double-right"></i>  
                          {{ $lang->lang6 }}
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                  <div class="link-widget f-blog">
                    <h4 class="title">{{ $lang->lang78 }}</h4>
                    <ul class="links">
                      @foreach ($lblogs as $lblog)
                      <li>
                        <a href="{{ route('front.blogshow',$lblog->id) }} ">
                            <img src="{{ asset('assets/images/blogs/'.$lblog->photo) }}" alt="">
                            {{ strlen($lblog->title) > 20 ? substr($lblog->title,0,20)."...":$lblog->title }}
    
                        </a>
                      </li>
                      @endforeach
                    </ul>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6">
                  <div class="link-widget address">
                    <h4 class="title">{{ $lang->lang79 }}</h4>
                    <ul class="links">

                        @if($gs->street != null)
                        <li><a href="javascript:;"><i class="fa fa-map-marker t12" aria-hidden="true"></i>
                          <span>{{ $gs->street }}</span>
                        </a></li>
                        @endif
                        @if($gs->phone != null) 
                        <li><a href="javascript:;"><i class="fa fa-phone" aria-hidden="true"></i>
                          <span>{{ $gs->phone }}</span>
                        </a></li>
                        @endif
                        @if($gs->email != null)
                        <li><a href="javascript:;"><i class="fa fa-envelope" aria-hidden="true"></i>
                          <span>{{ $gs->email }}</span>
                        </a></li>
                        @endif
                        @if($gs->site != null)
                        <li><a href="javascript:;"><i class="fa fa-globe" aria-hidden="true"></i>
                          <span>{{ $gs->site }}</span>
                        </a></li>
                        @endif

                    </ul>
                  </div>
              </div>
          </div>
        </div>
      </div>
      <div class="copyright-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="left-area">
                <p>
                     {!! $gs->footer !!}
                </p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-atea">
                <ul class="fotter-social-links">
                                      @if($sl->f_status == 1)
                                      <li>
                                        <a href="{{ $sl->facebook }}" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                      </li>
                                      @endif
                                      @if($sl->g_status == 1)
                                      <li>
                                        <a href="{{ $sl->gplus }}" target="_blank">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                      </li>
                                      @endif
                                      @if($sl->t_status == 1)
                                      <li>
                                        <a href="{{ $sl->twitter }}" target="_blank">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                      </li>
                                      @endif
                                      @if($sl->l_status == 1)
                                      <li>
                                        <a href="{{ $sl->linkedin }}" target="_blank">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                      </li>
                                      @endif
                                      @if($sl->p_status == 1)
                                      <li>
                                        <a href="{{ $sl->pinterest }}" target="_blank">
                                            <i class="fab fa-pinterest-p"></i>
                                        </a>
                                      </li>
                                      @endif
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Area End -->

  <!-- Back to Top Start -->
  <div class="bottomtotop">
    <i class="fa fa-chevron-right"></i>
  </div>
  <!-- Back to Top End -->

<script type="text/javascript">
  var mainurl = "{{url('/')}}";
  var mainlang = {!! json_encode($lang->toArray()) !!};
  var imgpath = '{{asset('assets/images/')}}';
  var gs      = {!! json_encode($gs->toArray()) !!};
</script>
  <!-- jquery -->
  <script src="{{ asset('assets/front/js/jquery.js') }}"></script>
  <!-- popper -->
  <script src="{{ asset('assets/front/js/popper.min.js') }}"></script>
  <!-- bootstrap -->
  <script src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>
  <!-- jQuery Ui js -->
  <script src="{{ asset('assets/front/jquery-ui/jquery-ui.min.js') }}"></script>
  <!-- way poin js-->
  <script src="{{ asset('assets/front/js/waypoints.min.js') }}"></script>
  <script src="{{ asset('assets/front/js/jquery.magnific-popup.js') }}"></script>
  <!-- Owl Carousel -->
  <script src="{{ asset('assets/front/js/owl.carousel.min.js') }}"></script>
  <!-- Counter js-->
  <script src="{{ asset('assets/front/js/counter.js') }}"></script>
  <!-- main -->
  <script src="{{ asset('assets/front/js/main.js') }}"></script>
  <!--Other JS-->
  <script type="text/javascript" src="{{asset('assets/front/js/script.js')}}"></script>

  {!! $seo->google_analytics !!}
  @if($gs->is_talkto == 1)
    <!--Start of Tawk.to Script-->
      {!! $gs->talkto !!}
    <!--End of Tawk.to Script-->
  @endif
  @yield('scripts')  

</body>

</html>