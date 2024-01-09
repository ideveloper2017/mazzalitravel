@extends('layouts.front')
@section('content')

  <!-- Breadcrumb Area Start -->
  <div class="my-breadcrumb" style="background-image: url({{asset('assets/images/'.$gs->bgimg)}});">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="heading">
            {{$page->title}}
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
                <a href="{{ route('front.page',$page->slug) }}">
                  {{$page->title}}
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumb Area End -->

  <!-- Blog Details Area Start -->
  <section class="blog-details" id="blog-details">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="blog-content">
            <div class="content">
              {!! $page->text !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Blog Details Area End-->

@endsection