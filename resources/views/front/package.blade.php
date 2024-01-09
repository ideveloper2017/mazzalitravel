@extends('layouts.front')
@section('content')

<!-- Breadcrumb Area Start -->
	<div class="my-breadcrumb">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="heading">
						{{ $lang->lang15 }}
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
							<li>
								<a href="{{ route('front.package',['id' => $package->id , 'slug' => $package->location ]) }}">
									{{ $lang->lang15 }}
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
	<section class="packges-details">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="left-content-start">
							<h3 class="title">{{ $package->title }}</h3>
							<div class="feature-img-area">
								<div class="package-slider">
									<div class="item">
										<div class="img">
											<img src="{{ asset('assets/images/packages/'.$package->photo) }}" alt="">
										</div>
									</div>
									@foreach($package->galleries as $gallery)
									<div class="item">
										<div class="img">
											<img src="{{ asset('assets/images/galleries/'.$gallery->photo) }}" alt="">
										</div>
									</div>
									@endforeach
								</div>
							</div>
							<div class="overview-area">
								<h4 class="overview-title">
										{{ $lang->lang16 }}
								</h4>
								<p>
										{!! $package->description !!}
								</p>
							</div>
							@if($package->highlights != null)
							<div class="highlights-area">
									<h4 class="highlights-title">
											{{ $lang->lang17 }}
									</h4>
									<ul class="list">
										@foreach(explode(',' , $package->highlights) as $data)
										<li>
											<p><i class="fas fa-angle-double-right"></i>
													{{ $data }}
											</p>
										</li>
										@endforeach
									</ul>
							</div>
							@endif
							@if($package->offer_day != null)
							@php
							$i = 1;
							@endphp
							<div class="package-details-tab">
									<h4 class="tab-top-title">
											{{ $package->name }}
									</h4>
									<h5 class="tab-top-sub-title">
											{{ $lang->lang18 }}
									</h5>
									<div id="tabs" class="row">
										<div class="col-md-2 remove-col-padding">
												<div class="left-area">
														<div class="tab-menu">
																<ul>
																	@foreach($dayz as $day)
																		<li><a href="#tabs-{{ $i++ }}">{{ $day }}</a></li>
																	@endforeach
																</ul>
														</div>
													</div>
										</div>
							@php
							$i = 1;
							@endphp
										<div class="col-md-10">
												<div class="right-area">
													@foreach($dayz as $key => $day)
															<div id="tabs-{{ $i++ }}">
																<div class="day-one schedule">
																	<h3 class="title">
																			{{ $title[$key] }}
																	</h3>
																	<div class="todo">
																		<ul>
																			@foreach(explode(',', $tags[$key]) as $tag)
																			<li>
																				<p class="item">
																						{{ $tag }}
																				</p>
																			</li>
																			@endforeach
																		</ul>
																	</div>
																	<div class="benefits">
																		<h4 class="title">{{ $subtitle[$key] }}</h4>
																		{!! $details[$key] !!}
																	</div>
																</div>
															</div>
														@endforeach
													</div>
										</div>
									</div>
							</div>
							@endif

                        @if($package->includes != null || $package->excludes != null )
							<div class="in-ex-area">
								<div id="tabs2">
												<div class="menu-area">
														<div class="tab-menu">
																@if($package->includes != null && $package->excludes != null)
																<ul>
																		<li><a href="#inclusions">{{ $lang->lang19 }}</a></li>
																		<li><a href="#exclusions">{{ $lang->lang20 }}</a></li>
																</ul>
																@elseif($package->includes != null)
																<ul>
																		<li><a href="#inclusions">{{ $lang->lang19 }}</a></li>
																</ul>
																@else
																<ul>
																		<li><a href="#exclusions">{{ $lang->lang20 }}</a></li>
																</ul>
																@endif
														</div>
													</div>
												<div class="content-area">
															@if($package->includes != null && $package->excludes != null)
															<div id="inclusions">
																	<ul class="list">
																		@foreach(explode(',' , $package->includes) as $data)
																			<li>
																				<p>
																						<i class="fas fa-angle-double-right"></i> {{ $data }}
																				</p>
																			</li>
																		@endforeach
																	</ul>
															</div>
															<div id="exclusions">
																	<ul class="list">
																		@foreach(explode(',' , $package->excludes) as $data)
																			<li>
																				<p>
																						<i class="fas fa-angle-double-right"></i> {{ $data }}
																				</p>
																			</li>
																		@endforeach
																	</ul>
															</div>
															@elseif($package->includes != null)
															<div id="inclusions">
																	<ul class="list">
																		@foreach(explode(',' , $package->includes) as $data)
																			<li>
																				<p>
																						<i class="fas fa-angle-double-right"></i> {{ $data }}
																				</p>
																			</li>
																		@endforeach
																	</ul>
															</div>
															@else
															<div id="exclusions">
																	<ul class="list">
																		@foreach(explode(',' , $package->excludes) as $data)
																			<li>
																				<p>
																						<i class="fas fa-angle-double-right"></i> {{ $data }}
																				</p>
																			</li>
																		@endforeach
																	</ul>
															</div>
															@endif
													</div>
												</div>
							</div>
							@endif
							<div class="accordion-area">
									<h4 class="highlights-title">
											{{ $lang->lang21 }}
									</h4>
									@foreach($hfaqs as $faq)
									<div id="accordion2">

											<!-- Question 1 -->
											<h3 class="heading">{{ $faq->title }}</h3>
											<div class="content">
													{!! $faq->text !!}
											</div>

										</div>
									@endforeach
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="right-content-start">
							<div class="book-now-area">
								<form action="{{action('App\Http\Controllers\Front\FrontendController@order' , ['id'=>$package->id])}}" method="post">
									{{ csrf_field() }}
								<h4 class="title">{{ $lang->lang22 }}</h4>
								<div class="booking-number">
									<div class="blocks">
										<table>
											<tr class="adults">
												<td>
														<span>{{ $lang->lang23 }}</span>
												</td>
												<td>
														<input type="number" oninput="cacl()" name="adults" id="adult" value="0" min="0">
												</td>
												<td>
														<small>X</small>
														@if($gs->sign == 0)
														{{$curr->sign}}<span> {{round($package->cost_adult * $curr->value,2)}}</span>
														@else
														<span> {{round($package->cost_adult * $curr->value,2)}}</span>{{$curr->sign}}
														@endif
												</td>
											</tr>
											<tr class="children">
												<td>
														<span>{{ $lang->lang24 }}</span>
												</td>
												<td>
														<input type="number" oninput="cacl()" name="childs" id="child" value="0" min="0">
												</td>
												<td>
														<small>X</small>
														@if($gs->sign == 0)
														{{$curr->sign}}<span> {{round($package->cost_child * $curr->value,2)}}</span>
														@else
														<span> {{round($package->cost_child * $curr->value,2)}}</span>{{$curr->sign}}
														@endif
												</td>
											</tr>
										</table>
									</div>
								</div>
								<div class="total-area">
									<div class="left">
										<p class="title">{{ $lang->lang25 }}</p>
										@if($gs->sign == 0)
										<p class="price" id="ttl">{{$curr->sign}}0</p>
										@else
										<p class="price" id="ttl">0{{$curr->sign}}</p>
										@endif
										<input type="hidden" name="total" id="total" value="0">
									</div>
									<div class="right d-flex">
										<div class="book-button align-self-center">
											<button type="submit">{{ $lang->lang26 }}</button>
										</div>
									</div>
								</div>
								</form>
							</div>
							<div class="highlights-area">
									<h4 class="highlights-title">
											{{ $lang->lang27 }}
									</h4>
									<ul class="list">
										@foreach($whyus as $data)
											<li>
												<p><i class="fas fa-angle-double-right"></i>
														{{ $data->title }}
												</p>
											</li>
										@endforeach
									</ul>
							</div>

						</div>
					</div>
				</div>
				<div class="row packages simelar-packages">
					<div class="col-lg-12">
						<h4 class="title">
								{{ $lang->lang28 }}
						</h4>
					</div>
					<div class="col-lg-12">
							<div class="row">
						          @foreach($rpackages as $pckg)
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
					</div>
				</div>
			</div>
	</section>
	<!-- Blog Details Area End-->
@endsection

@section('scripts')
<script>
    function cacl() {
        var adult = parseFloat({{$package->cost_adult}});
        var child = parseFloat({{$package->cost_child}});
        var ttl = $("#adult").val() * adult;
        var ttls = ttl + $("#child").val() * child;
        $('#ttl').html('{{ $curr->sign }}'+(ttls*{{ $curr->value }}).toFixed(2));
        $('#total').val((ttls*{{ $curr->value }}).toFixed(2));
    }
</script>
@stop
