@extends('layouts.front')
@section('content')
	<!-- Breadcrumb Area Start -->
	<div class="my-breadcrumb">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="heading">
						{{ $lang->lang29 }}
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
								<a href="{{ route('front.orders',$package->id) }}">
									{{ $lang->lang29 }}
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcrumb Area End -->
	


	<!-- Check Out Area Start -->
		<section class="checkout">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="left-area">
							<form action="{{route('payment.submit')}}" id="payment_form" class="checkoutform" method="POST">
								@include('includes.form-success')
								@include('includes.form-error')
								{{ csrf_field() }}
								<div class="user-details-area">
									<h2 class="title">
										{{ $lang->lang30 }}
									</h2>
									<div class="row">
										<div class="col-lg-6">
											<label>{{ $lang->lang31 }} *</label>
											<input type="text" placeholder="{{ $lang->lang31 }}" name="customer_fname" required="">
										</div>
										<div class="col-lg-6">
											<label>{{ $lang->lang32 }} *</label>
											<input type="text" placeholder="{{ $lang->lang32 }}" name="customer_lname" >
										</div>
										<div class="col-lg-6">
											<label>{{ $lang->lang33 }} *</label>
											<input type="text" placeholder="{{ $lang->lang33 }}" required="" name="customer_phone">
										</div>
										<div class="col-lg-6">
											<label>{{ $lang->lang34 }} *</label>
											<input type="email" placeholder="{{ $lang->lang34 }}" required="" name="customer_email">
										</div>
									</div>
								</div>
								<div class="billing-info-area">
										<h2 class="title">
												{{ $lang->lang35 }}
											</h2>
									<div class="row">
										<div class="col-lg-6">
											<label>{{ $lang->lang36 }} *</label>
											<input type="text" placeholder="{{ $lang->lang36 }}" required="" name="address">
										</div>
										<div class="col-lg-6">
											<label>{{ $lang->lang37 }} *</label>
											<input type="text" placeholder="{{ $lang->lang37 }}" required="" name="city">
										</div>
										<div class="col-lg-6">
											<label>{{ $lang->lang38 }} *</label>
											<input type="text" placeholder="{{ $lang->lang38 }}" required="" name="customer_state">
										</div>
										<div class="col-lg-6">
											<label>{{ $lang->lang39 }} *</label>
											<input type="text" placeholder="{{ $lang->lang39 }}" required="" name="zip">
										</div>
									</div>
								</div>
								<div class="payment-information">
										<h2 class="title">
												{{ $lang->lang40 }}
											</h2>
									<ul class="pm-list">
										<li>
											<a href="javascript:;">
													<img src="{{ asset('assets/front/images/payment-info/pm1.jpg') }}" alt="">
											</a>
										</li>
										<li>
											<a href="javascript:;">
													<img src="{{ asset('assets/front/images/payment-info/pm2.jpg') }}" alt="">
											</a>
										</li>
										<li>
											<a href="javascript:;">
													<img src="{{ asset('assets/front/images/payment-info/pm3.jpg') }}" alt="">
											</a>
										</li>
										<li>
											<a href="javascript:;">
													<img src="{{ asset('assets/front/images/payment-info/pm4.jpg') }}" alt="">
											</a>
										</li>
										<li>
											<a href="javascript:;">
													<img src="{{ asset('assets/front/images/payment-info/pm5.jpg') }}" alt="">
											</a>
										</li>
									</ul>
									<div class="row">
		                                <div class="col-lg-12">
		                                	<label>{{ $lang->lang41 }} *</label>
		                                    <select class="form-control" onChange="meThods(this)" id="formac" name="method" required>
		                                        <option value="Paypal" selected>Paypal</option>
		                                        <option value="Stripe">Credit Card</option>
		                                    </select>
		                                </div>
		                                	<div class="row" id="stripes">
											<div class="col-lg-6">
												<label>{{ $lang->lang42 }} *</label>
												<input type="text" name="card" placeholder="{{ $lang->lang42 }}">
											</div>
											<div class="col-lg-6">
												<label>{{ $lang->lang43 }} *</label>
												<input type="text" name="cvv" placeholder="{{ $lang->lang43 }}">
											</div>
											<div class="col-lg-6">
												<label>{{ $lang->lang44 }} *</label>
												<input type="text" name="month" placeholder="{{ $lang->lang44 }} ">
											</div>
											<div class="col-lg-6">
												<label>{{ $lang->lang45 }}  *</label>
												<input type="text" name="year" placeholder="{{ $lang->lang45 }}">
											</div>
										</div>
                                <div id="paypals">
                                    <input type="hidden" name="cmd" value="_xclick" />
                                    <input type="hidden" name="no_note" value="1" />
                                    <input type="hidden" name="lc" value="UK" />
                                    <input type="hidden" name="currency_code" value="{{ $curr->name }}" />
                                    <input type="hidden" name="total" value="{{ Session::get('total') }}" />
                                    <input type="hidden" name="adults" value="{{ Session::get('adults') }}" />
                                    <input type="hidden" name="childs" value="{{ Session::get('childs') }}" />
                                    <input type="hidden" name="package" value="{{$package->id}}" />
                                    <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
                                </div>
									</div>
								</div>
								<button type="submit" class="mybtn1 checkout-btn">{{ $lang->lang46 }}</button>
							</form>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="right-area">
							<div class="header-area">
								<h4 class="header-title">
										{{ $lang->lang47 }}
								</h4>
							</div>
							<div class="body-area">
								<div class="box">
									<div class="left">
											<img class="icon" src="assets/images/mapnarker.png" alt="">
							
										</div>
										<div class="right">
											<h5 class="title"> {{ $lang->lang48 }} </h5>
											<p class="info">{{ $package->location }}</p>
										</div>
								</div>
								<div class="box">
									<div class="left">
											<img class="icon" src="assets/images/dates.png" alt="">
							
										</div>
										<div class="right">
											<h5 class="title"> {{ $lang->lang49 }} </h5>
											<p class="info"> {{ $lang->lang50 }} {{ date('d, F, Y',strtotime($package->start_date)) }} </p>
											<p class="info"> {{ $lang->lang51 }} {{ date('d, F, Y',strtotime($package->return_date)) }} </p>
										</div>
								</div>
								<div class="box">
									<div class="left">
											<img class="icon" src="assets/images/guest.png" alt="">
							
										</div>
										<div class="right">
											<h5 class="title"> {{ $lang->lang52 }} </h5>
											<p class="info"> <b>{{ Session::get('adults') }}</b> {{ $lang->lang54 }}</p>
											<p class="info"> <b>{{ Session::get('childs') }}</b> {{ $lang->lang55 }}</p>
										</div>
								</div>
							</div>
							<div class="footer">
									<div class="left">
										<p class="text">{{ $lang->lang53 }}</p>
									</div>
									<div class="right">
										@if($gs->sign == 0)
										<p class="price">{{ $curr->sign }}{{ Session::get('total') }}</p>
										@else
										<p class="price">{{ Session::get('total') }}{{ $curr->sign }}</p>
										@endif
									</div>
								</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- Check Out Area End-->
@endsection

@section('scripts')
<script type="text/javascript">
   function meThods(val) { 
          var action1 = "{{route('payment.submit')}}";
          var action2 = "{{route('stripe.submit')}}";
          if (val.value == "Paypal") {
            $("#payment_form").attr("action", action1);
            $("#stripes").hide();
          }
          if (val.value == "Stripe") {
            $("#payment_form").attr("action", action2);
            $("#stripes").show();
          }
    }
</script>
@stop