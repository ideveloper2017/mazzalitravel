@extends('layouts.front')
@section('content')

	<!-- Breadcrumb Area Start -->
	<div class="my-breadcrumb">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="heading">
						{{ $lang->lang14 }}
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
								<a href="{{ route('front.packages') }}">
									{{ $lang->lang14 }}
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcrumb Area End -->


	<!-- Featured Packages Area Start -->
	<section class="packages packages-page">
		<div class="container">
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

			</div>
        <div class="page-center">
          {!! $packages->links() !!}              
        </div>
		</div>
	</section>
	<!-- Featured Packages Area End -->

@endsection