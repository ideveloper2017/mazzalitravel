@extends('layouts.front')

@section('content')

    <section class="home-slider-section">
        <div class="home-slider">
            @if($gs->slider == 1)
            <div class="home-banner-items">
                <div class="banner-inner-wrap" style="background-image: url({{asset('assets/images/'.$gs->bgimg)}});"></div>
                <div class="banner-content-wrap">
                    <div class="container">
                        <div class="banner-content text-center">
                            <h2 class="banner-title">{!! $gs->bg_title !!}</h2>
                            <p>{!! $gs->bg_text !!}</p>
                            <a href="{{ $gs->bg_link }}" class="button-primary">{{ $lang->lang7 }}</a>
                        </div>
                    </div>
                </div>
                <div class="overlay"></div>
            </div>
            <div class="home-banner-items">
                <div class="banner-inner-wrap" style="background-image: url({{asset('assets/images/'.$gs->bgimg)}});"></div>
                <div class="banner-content-wrap">
                    <div class="container">
                        <div class="banner-content text-center">
                            <h2 class="banner-title">EXPERIENCE THE NATURE'S BEAUTY</h2>
                            <p>Taciti quasi, sagittis excepteur hymenaeos, id temporibus hic proident ullam, eaque donec delectus tempor consectetur nunc, purus congue? Rem volutpat sodales! Mollit. Minus exercitationem wisi.</p>
                            <a href="#" class="button-primary">CONTINUE READING</a>
                        </div>
                    </div>
                </div>
                <div class="overlay"></div>
            </div>
            @endif
        </div>
    </section>
  <!-- Hero Area Start -->
  <div class="heroarea" style="background-image: url({{asset('assets/images/'.$gs->bgimg)}}); display: none">
    <div class="overlay"></div>
      @if($gs->slider == 1)
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-area">
              {!! $gs->bg_title !!}
            <p class="sub-title">{!! $gs->bg_text !!}</p>
            <a class="link" href="{{ $gs->bg_link }}">{{ $lang->lang7 }}</a>
          </div>
        </div>
        <div class="col-lg-6 d-flex align-self-center">
          <div class="right-area align-self-center">
            <div class="img">
              <img src="{{ asset('assets/images/'.$gs->video_image) }}" alt="">
              <a href="{{ $gs->bg_video }}" class="video-icon video-play mfp-iframe">
                <img src="{{ asset('assets/front/images/heroarea/video-icon.png') }}" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endif
  </div>
  <!-- Hero Area End -->


@if($gs->category == 0)
  <!-- Service area start -->
  <section class="service">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="service-slider">
            @foreach ($services as $service)
            <div class="item">
              <a href="javascript:;" class="single-service">
                <div class="icon">
                  <img src="{{ asset('assets/images/services/'.$service->photo) }}" alt="">
                </div>
                <h4 class="title">
                  {{ $service->title }}
                </h4>
              </a>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Service area end -->
@endif


@if($gs->sb == 0)
  <!-- About Area Start -->
  <section class="about">
  <div class="about-info-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
              <div class="left-content">
                  <div class="section-title">
                    {!! $gs->top_title !!}
                  </div>
                  <div class="content">
                    {!! $gs->top_text !!}
                  </div>
                  <a href="{{ $gs->top_link }}" class="mybtn1">{{ $lang->lang8 }}</a>
                </div>
          </div>
          <div class="col-lg-6 order-first order-lg-last">
            <div class="right-area">
              <img class="img-fluid" src="{{ asset('assets/images/'.$gs->top_image) }}" alt="">
            </div>
          </div>
        </div>
      </div>
  </div>
    <div class="about-slider">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-6">
            <div class="left-slider-area">
              <div class="about_slider">
                @foreach($sliders as $sl)
                <div class="item">
                    <img class="img-fluid" src="{{ asset('assets/images/sliders/'.$sl->photo) }}" alt="">
                </div>
                @endforeach
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="right-content-area">
                <div class="section-title">
                    {!! $gs->second_title !!}
                  </div>
                  <div class="content">
                    {!! $gs->second_text !!}
                  </div>
                  <a href="{{ $gs->second_link }}" class="mybtn1">{{ $lang->lang8 }}</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About Area End -->
@endif

@if($gs->sb == 0)
  <!-- Package Gallery Area Start -->
  <section class="gallery">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
            <div class="section-title">
              {!! $gs->ts_title !!}
            <p class="text">{!! $gs->ts_text!!}</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="gallery-slider">
            @foreach($brands as $img)
              <div class="item">
                <img src="{{ asset('assets/images/brands/'.$img->photo) }}" alt="">
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Package Gallery Area End -->
@endif

@if($gs->lp == 0)
  <!-- Featured Packages Area Start -->
  <section class="packages">
    <div class="container">
          <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                  {!! $gs->fp_title !!}
                <p class="text">{!! $gs->fp_text !!}</p>
              </div>
            </div>
          </div>
      <div class="row">
          @foreach($packages as $package)
          <div class="col-lg-4 col-md-6">
            <div class="single-packages">
              <div class="img-area">
                @if($package->highlight_discount != null)
                <span class="offer">{{ $package->highlight_discount }}</span>
                @endif
                <div class="overlay">
                    <h4 class="name">{{ $package->location }}</h4>
                </div>
                <img src="{{ asset('assets/images/packages/'.$package->photo) }}" alt="">
              </div>
              <div class="content-wrapper">
                <div class="left-content">
                  <p class="sell">{{ count($package->orders()->whereStatus('completed')->get()) }} {{ $lang->lang12 }}</p>
                  <a href="{{ route('front.package',['id' => $package->id , 'slug' => $package->location ]) }}" class="buy-btn">{{ $lang->lang13 }}</a>
                </div>
                <div class="right-content">
                  <p class="duration">{{$package->name}}</p>

                  <h5 class="price">
                    @if($gs->sign == 0)
                      @if($package->cost_previous != null)<small>{{$curr->sign}}{{round($package->cost_previous * $curr->value,2)}}</small>@endif
                       {{$curr->sign}}{{round($package->cost_adult * $curr->value,2)}}
                      @else
                      @if($package->cost_previous != null)<small>{{round($package->cost_previous * $curr->value,2)}}{{$curr->sign}}</small>@endif
                       {{round($package->cost_adult * $curr->value,2)}}{{$curr->sign}}
                    @endif
                  </h5>
                </div>
              </div>
            </div>
          </div>
          @endforeach


          <div class="col-lg-12 text-center">
              <a href="{{ route('front.packages') }}" class="page-link-btn">{{ $lang->lang9 }}</a>
          </div>
      </div>
    </div>
  </section>
  <!-- Featured Packages Area End -->
@endif
@if($gs->ftp == 0)
    <!-- Testimonial Area Start -->
    <section class="testimonials" style="background-image: url({{asset('assets/images/'.$gs->cimg)}});">
      <div class="overlay"></div>
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="section-title">
                    {!! $gs->review_title !!}
                  <p class="text">
                      {!! $gs->review_text !!}
                    </p>
                  </div>
                </div>
            </div>
        <div class="row justify-content-center">
          <div class="col-lg-8">
              <div class="testimonials-slider">

                @foreach ($ads as $ad)
                  {{-- expr --}}
                  <div class="item">
                    <div class="review">
                      <div class="left">
                        <img src="{{ asset('assets/images/testimonials/'.$ad->photo) }}" alt="">
                      </div>
                      <div class="right">
                        <h5 class="name">{{ $ad->client }}</h5>
                        <p class="address">{{ $ad->address }}</p>
                        <p class="text"> {!! $ad->review !!} </p>
                      </div>
                    </div>
                  </div>
                @endforeach

                </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonial Area End -->
@endif

@if($gs->pp == 1)
    <section class="blog-section">
        <div class="container">
            <div class="section-heading text-center">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
{{--                        <h5 class="dash-style">{!!  $gs->blog_title  !!}</h5>--}}
                        <h2>{!!  $gs->blog_title  !!}</h2>
{{--                        <p>Mollit voluptatem perspiciatis convallis elementum corporis quo veritatis aliquid blandit, blandit torquent, odit placeat. Adipiscing repudiandae eius cursus? Nostrum magnis maxime curae placeat.</p>--}}
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($hblogs as $blogg)
                <div class="col-md-6 col-lg-4">
                    <article class="post">
                        <figure class="feature-image">
                            <a href="{{route('front.blogshow',$blogg->id)}}">
                                <img src="{{ $blogg->photo ? asset('assets/images/blogs/'.$blogg->photo):asset('assets/images/noimage.png') }}" alt="">
                            </a>
                        </figure>
                        <div class="entry-content">
                            <h3>
                                <a href="{{route('front.blogshow',$blogg->id)}}">  {{strlen($blogg->title) > 50 ? substr($blogg->title,0,50)."...":$blogg->title}}</a>
                            </h3>
                            <div class="entry-meta">
{{--                                 <span class="byline">--}}
{{--                                    <a href="#">Demoteam</a>--}}
{{--                                 </span>--}}
                                <span class="posted-on">
                                    <a href="#">{{date('d.m.Y', strtotime($blogg->created_at))}}</a>
                                 </span>
                                </div>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
        </div>
    </section>
  <!-- Blog  Area Start -->
  <section class="blog" style="display: none">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="section-title extra-padding">
                  <div class="sub-title">
                  {!!  $gs->blog_title  !!}
                  <p class="text">
                    {!! $gs->blog_text !!}
                  </p>
                </div>
          </div>
        </div>
        <div class="row">

        @foreach($hblogs as $blogg)
        <div class="col-md-6 col-lg-4">
              <div class="blog-box">
                <div class="blog-images">
                    <div class="img">
                    <img src="{{ $blogg->photo ? asset('assets/images/blogs/'.$blogg->photo):asset('assets/images/noimage.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="date d-flex justify-content-center">
                      <div class="box align-self-center">
                        <p>{{date('d', strtotime($blogg->created_at))}}</p>
                        <p>{{date('M', strtotime($blogg->created_at))}}</p>
                      </div>
                    </div>
                </div>
                <div class="details">
                    <a href='{{route('front.blogshow',$blogg->id)}}'>
                      <h4 class="blog-title">
                        {{strlen($blogg->title) > 50 ? substr($blogg->title,0,50)."...":$blogg->title}}
                      </h4>
                    </a>
                  <p class="blog-text">
                    {{substr(strip_tags($blogg->details),0,120)}}
                  </p>
                  <a class="read-more-btn" href="{{route('front.blogshow',$blogg->id)}}">{{ $lang->lang8 }}</a>
                </div>
            </div>
        </div>
        @endforeach

          <div class="col-lg-12 text-center">
            <a href="{{ route('front.blog') }}" class="page-link-btn">{{ $lang->lang9 }}</a>
          </div>
          </div>
      </div>
      </div>
  </section>
  <!-- Blog Area End -->
@endif

    <!-- Subscribe area start -->
    <section class="subscribe" style="display: none">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="section-title">
                  {!! $gs->subscribe_title !!}

                  <p class="text">
                      {!! $gs->subscribe_text !!}
                    </p>
                </div>
              </div>
            </div>
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-10">
              <div class="subscribe-form">
                @include('includes.form-error')
                @include('includes.form-success')
                  <form action="{{route('front.subscribe.submit')}}" method="POST">
                    {{csrf_field()}}
                    <input type="email" name="email" placeholder="{{ $lang->lang10 }}">
                    <button type="submit">{{ $lang->lang11 }}</button>
                  </form>
                </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Subscribe area end -->

@endsection
