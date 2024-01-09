@extends('layouts.front')
@section('content')


  <!-- Breadcrumb Area Start -->
  <div class="my-breadcrumb" style="background-image: url({{asset('assets/images/'.$gs->bgimg)}});">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="heading">
            {{ $lang->lang4 }}
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
                <a href="{{ route('front.faq') }}">
                  {{ $lang->lang4 }}
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumb Area End -->
  


  <!-- faq Area Start -->
  <section class="faq-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
          <div id="accordion">

            @foreach($faqs as $fq)
            <h3 class="heading">{{ $fq->title }}</h3>
            <div class="content">
                <p>{!! $fq->text !!}</p>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- faq Area End-->


@endsection