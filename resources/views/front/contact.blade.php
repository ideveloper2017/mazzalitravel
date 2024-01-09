@extends('layouts.front')


@section('content')

    <!-- Breadcrumb Area Start -->
    <div class="my-breadcrumb" style="background-image: url({{asset('assets/images/'.$gs->bgimg)}});">
            <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="heading">
                            {{ $lang->lang6 }}
                    </h1>
                    <div class="links">
                            <i class="icofont-home home"></i>
                        <ul>
                                
                            <li>
                                <a href="{{ route('front.index') }}">
                                    {{ $lang->lang1 }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('front.contact') }}">
                                        {{ $lang->lang6 }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->
    


    <!-- Contact Us Area Start -->
    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-section-title">
                            {!! $ps->contact_title !!}
                            {!! $ps->contact_text !!}

                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="left-area">
                        <div class="contact-form">
                            <form action="{{route('front.contact.submit')}}" method="POST">
                                {{csrf_field()}}
                                @include('includes.form-error')
                                @include('includes.form-success')
                                    <ul>
                                        <li>
                                            <input type="text" name="name" class="input-field" placeholder="{{ $lang->lang67 }} *" required="">
                                        </li>
                                        <li>
                                            <input type="text" class="input-field" placeholder="{{ $lang->lang68 }} *">
                                        </li>
                                        <li>
                                            <input type="email" name="email" class="input-field" placeholder="{{ $lang->lang69 }} *" required="">
                                        </li>
                                        <li>
                                            <textarea name="text" class="input-field textarea" placeholder="{{ $lang->lang70 }} *" required=""></textarea>
                                        </li>
                                    </ul>
                                    <input type="hidden" name="to" value="{{ $ps->contact_email }}">
                                    <ul class="captcha-area">
                                        <li>
                                            <p><img src="{{asset("assets/images/capcha_code.png")}}" id="codeimg" alt=""> <i class="fas fa-sync-alt refresh_code"></i></p>
                                        
                                        </li>
                                        <li>
                                                <input name="codes" type="text" class="input-field" placeholder="{{ $lang->lang71 }}" required="">
                                                
                                            </li>
                                    </ul>
                                        <button class="submit-btn" type="submit">{{ $lang->lang72 }}</button>
                                                                         
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6">
                    <div class="right-area">
                        <div class="top-content">
                                <h4 class="title">{{ $lang->lang73}}</h4>
                                <p class="text">{{ $lang->lang74 }}</p>
                        </div>
                        @if($gs->site != null || $gs->email != null )
                        <div class="contact-info ">
                            <div class="left ">
                                    <div class="icon">
                                            <i class="icofont-email"></i>
                                    </div>
                            </div>
                            <div class="content d-flex align-self-center">
                                <div class="content">
                                        @if($gs->site != null && $gs->email != null) 
                                        <a href="{{$gs->site}}" target="_blank">{{$gs->site}}</a>
                                        <a href="mailto:{{$gs->email}}">{{$gs->email}}</a>
                                        @elseif($gs->site != null)
                                        <a href="{{$gs->site}}" target="_blank">{{$gs->site}}</a>
                                        @else
                                        <a href="mailto:{{$gs->email}}">{{$gs->email}}</a>
                                        @endif
                                </div>
                            </div>
                        </div>
                        @endif
                        @if($gs->street != null) 
                        <div class="contact-info">
                                <div class="left">
                                        <div class="icon">
                                                <i class="icofont-google-map"></i>
                                        </div>
                                </div>
                                <div class="content d-flex align-self-center">
                                    <div class="content">
                                            <p>
                                                @if($gs->street != null) 
                                                    {!! $gs->street !!}
                                                @endif
                                            </p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if($gs->phone != null || $gs->fax != null ) 
                            <div class="contact-info">
                                    <div class="left">
                                            <div class="icon">
                                                    <i class="icofont-smart-phone"></i>
                                            </div>
                                    </div>
                                    <div class="content d-flex align-self-center">
                                        <div class="content">
                                            @if($gs->phone != null && $gs->fax != null)
                                            <a href="tel:{{$gs->phone}}">{{$gs->phone}}</a>
                                            <a href="tel:{{$gs->fax}}">{{$gs->fax}}</a>
                                            @elseif($gs->phone != null)
                                            <a href="tel:{{$gs->phone}}">{{$gs->phone}}</a>
                                            @else
                                            <a href="tel:{{$gs->fax}}">{{$gs->fax}}</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                        @endif
                                <div class="social-links">
                                    <h4 class="title">{{ $lang->lang75 }}</h4>
                                    <ul>
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
    </section>
    <!-- Contact Us Area End-->


@endsection

@section('scripts')
    <script>
        $('.refresh_code').on( "click", function() {
            $.get('{{url('contact/refresh_code')}}', function(data, status){
                $('#codeimg').attr("src","{{url('assets/images')}}/capcha_code.png?time="+ Math.random());
            });
        })
    </script>
@stop