@extends('layouts.front')
@section('content')



  <div class="my-breadcrumb" style="background: url({{ asset('assets/images/'.$gs->bgimg) }}); display:none">
      <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">

          @if(isset($bcat))

          <h1 class="heading">
            {{ $lang->lang3 }}
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
                <a href="{{ route('front.blog') }}">
                  {{ $lang->lang3 }}
                </a>
              </li>
              <li>
                <a href="{{ route('front.blogcategory',$bcat->slug) }}">
                  {{ $bcat->name }}
                </a>
              </li>
            </ul>
          </div>

          @elseif(isset($slug))
          <h1 class="heading">
            {{ $lang->lang3 }}
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
                <a href="{{ route('front.blog') }}">
                  {{ $lang->lang3 }}
                </a>
              </li>
              <li>
                <a href="{{ route('front.blogtags',$slug) }}">
                  {{ $lang->lang63 }}: {{ $slug }}
                </a>
              </li>
            </ul>
          </div>


          @elseif(isset($search))
          <h1 class="heading">
            {{ $lang->lang3 }}
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
                <a href="{{ route('front.blog') }}">
                  {{ $lang->lang3 }}
                </a>
              </li>
              <li>
                <a href="Javascript:;">
                  {{ $lang->lang66 }}
                </a>
              </li>
            </ul>
          </div>

          @elseif(isset($date))
          <h1 class="heading">
            {{ $lang->lang3 }}
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
                <a href="{{ route('front.blog') }}">
                  {{ $lang->lang3 }}
                </a>
              </li>
              <li>
                <a href="Javascript:;">
                  {{ $lang->lang61 }}: {{ date('F Y',strtotime($date)) }}
                </a>
              </li>
            </ul>
          </div>

          @else
          <h1 class="heading">
            {{ $lang->lang3 }}
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
                <a href="{{ route('front.blog') }}">
                  {{ $lang->lang3 }}
                </a>
              </li>
            </ul>
          </div>
          @endif

        </div>
      </div>
    </div>
  </div>
  <section class="blog blog-page" id="blog" style="display: none">
    <div class="container">
      <div class="row">
        @foreach($blogs as $blogg)
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

      </div>
        <div class="page-center">
          @if(isset($search))
          {!! $blogs->appends(['search' => $search])->links() !!}
          @else
          {!! $blogs->links() !!}
          @endif
        </div>

    </div>
  </section>

@endsection
