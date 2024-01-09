@extends('layouts.front')
@section('content')   

  <!-- Breadcrumb Area Start -->
  <div class="my-breadcrumb" style="background-image: url({{asset('assets/images/'.$gs->bgimg)}});">
    <div class="overlay"></div>
  </div>
  <!-- Breadcrumb Area End -->

  <!-- Blog Details Area End-->
<section class="subscribe">
            <div class="container">
                    <div class="row">
                            <div class="col-lg-12">
                                    <div class="section-title">
                                    <h2 class="title">{{ $lang->lang80 }}<br>{{ $lang->lang81 }}</h2>
                                    <h5 class="sub-title">{{ $lang->lang82 }}</h5>
                                    
                                </div>
                            </div>
                        </div>
            </div>
</section>
@endsection