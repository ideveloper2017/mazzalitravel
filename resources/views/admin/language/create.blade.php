@extends('layouts.admin')

@section('content')

      <div class="wrap__right">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-12">
              <!-- Admin haeder start -->
              <div class="panel panel-default common">
                <div class="panel-heading">
                  <div class="admin__header">
                    <div class="row reorder-xs align-items-center">
                      <div class="col-xl-7 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="header__title">
                          <div class="header__btn d-flex">
                            <h3>Add Language </h3>
                            <a href="{{ route('admin-lang-index') }}" class="add-btn back"><i class="fas fa-arrow-left"></i> Back</a>
                          </div>
                          <p>Dashboard <i class="fa fa-angle-right"></i> Language Settings <i class="fa fa-angle-right"></i> Create</p>
                        </div>
                      </div>

                      @include('includes.notification')

                    </div>   
                  </div>
                </div>

                <div class="panel-body common pt-30 pb-30 pl-10 pr-10">
                  @include('includes.form-error')
                  @include('includes.form-success')
                  <div class="row justify-content-center">
                    <div class="col-xl-10">
                      <div class="top-banner-wrap">
                        <div class="common-form">
                          <form action="{{route('admin-lang-store')}}" method="POST">
                              {{csrf_field()}}

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang">Language Name *</label>
                                            <div class="col-sm-7">
                                              <input id="lang" class="form-control" type="text" name="language" placeholder="Enter Your Input" value="Language Name" required="">
                                            </div>
                                          </div>

                                          <hr style="margin-top: 20px; margin-bottom: 20px;">
                                          <h6 class="text-center">Header</h6>
                                          <hr>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang1">Home *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang1" class="form-control" type="text" name="lang1" placeholder="Enter Your Input" value="Home" required="">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang2">Tour Packages *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang2" class="form-control" type="text" name="lang2" placeholder="Enter Your Input" value="Tour Packages" required="">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang3">Blog *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang3" class="form-control" type="text" name="lang3" placeholder="Enter Your Input" value="Blog" required="">
                                            </div>
                                          </div> 

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang4">Faq *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang4" class="form-control" type="text" name="lang4" placeholder="Enter Your Input" value="Faq" required="">
                                            </div>
                                          </div>    

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang5">Other *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang5" class="form-control" type="text" name="lang5" placeholder="Enter Your Input" value="Other" required="">
                                            </div>
                                          </div>    

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang6">Contact Us *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang6" class="form-control" type="text" name="lang6" placeholder="Enter Your Input" value="Contact Us" required="">
                                            </div>
                                          </div>   


                                          <hr style="margin-top: 20px; margin-bottom: 20px;">
                                          <h6 class="text-center">Home</h6>
                                          <hr>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang7">Get Started *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang7" class="form-control" type="text" name="lang7" placeholder="Enter Your Input" value="Get Started" required="">
                                            </div>
                                          </div> 

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang8">Read More *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang8" class="form-control" type="text" name="lang8" placeholder="Enter Your Input" value="Read More" required="">
                                            </div>
                                          </div>     

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang9">See More *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang9" class="form-control" type="text" name="lang9" placeholder="Enter Your Input" value="See More" required="">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang10">Enter Your Email Address *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang10" class="form-control" type="text" name="lang10" placeholder="Enter Your Input" value="Enter Your Email Address" required="" >
                                            </div>
                                          </div>

                                         <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang11">Send *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang11" class="form-control" type="text" name="lang11" placeholder="Enter Your Input" value="Send" required="">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang12">bought(s) *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang12" class="form-control" type="text" name="lang12" placeholder="Enter Your Input" value="bought(s)" required="">
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang13">VIEW DEAL *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang13" class="form-control" type="text" name="lang13" placeholder="Enter Your Input" value="VIEW DEAL" required="">
                                            </div>
                                          </div>



                                          <hr style="margin-top: 20px; margin-bottom: 20px;">
                                          <h6 class="text-center">Tour Packages</h6>
                                          <hr>


                                         <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang14">Our Packages *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang14" class="form-control" type="text" name="lang14" placeholder="Enter Your Input" value="Our Packages" required="">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang15">Package Details *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang15" class="form-control" type="text" name="lang15" placeholder="Enter Your Input" value="Package Details" required="">
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang16">Overview *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang16" class="form-control" type="text" name="lang16" placeholder="Enter Your Input" value="Overview" required="">
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang17">Highlights *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang17" class="form-control" type="text" name="lang17" placeholder="Enter Your Input" value="Highlights" required="">
                                            </div>
                                          </div>        

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang18">Including: *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang18" class="form-control" type="text" name="lang18" placeholder="Enter Your Input" value="Including:" required="">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang19">INCLUSIONS *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang19" class="form-control" type="text" name="lang19" placeholder="Enter Your Input" value="INCLUSIONS" required="">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang20">EXCLUSIONS *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang20" class="form-control" type="text" name="lang20" placeholder="Enter Your Input" value="EXCLUSIONS" required="">
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang21">Frequently asked questions *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang21" class="form-control" type="text" name="lang21" placeholder="Enter Your Input" value="Frequently asked questions" required="">
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang22">Book The Tour: *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang22" class="form-control" type="text" name="lang22" placeholder="Enter Your Input" value="Book The Tour:" required="">
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang23">Adults *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang23" class="form-control" type="text" name="lang23" placeholder="Enter Your Input" value="Adults" required="">
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang24">Children *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang24" class="form-control" type="text" name="lang24" placeholder="Enter Your Input" value="Children" required="">
                                            </div>
                                          </div> 

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang25">Total Amount *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang25" class="form-control" type="text" name="lang25" placeholder="Enter Your Input" value="Total Amount" required="">
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang26">BOOK NOW *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang26" class="form-control" type="text" name="lang26" placeholder="Enter Your Input" value="BOOK NOW" required="">
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang27">Why Book with US? *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang27" class="form-control" type="text" name="lang27" placeholder="Enter Your Input" value="Why Book with US?" required="">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang28">Similar Packages *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang28" class="form-control" type="text" name="lang28" placeholder="Enter Your Input" value="Similar Packages" required="">
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang29">Check Out *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang29" class="form-control" type="text" name="lang29" placeholder="Enter Your Input" value="Check Out" required="">
                                            </div>
                                          </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang30">Your Details *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang30" class="form-control" type="text" name="lang30" placeholder="Enter Your Input" value="Your Details" required="">
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang31">First Name *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang31" class="form-control" type="text" name="lang31" placeholder="Enter Your Input" value="First Name" required="">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang32">Last Name *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang32" class="form-control" type="text" name="lang32" placeholder="Enter Your Input" value="Last Name" required="">
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang33">Phone Number *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang33" class="form-control" type="text" name="lang33" placeholder="Enter Your Input" value="Phone Number" required="">
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang34">Email *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang34" class="form-control" type="text" name="lang34" placeholder="Enter Your Input" value="Email" required="">
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang35">Billing Information *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang35" class="form-control" type="text" name="lang35" placeholder="Enter Your Input" value="Billing Information" required="">
                                            </div>
                                          </div> 
                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang36">Address *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang36" class="form-control" type="text" name="lang36" placeholder="Enter Your Input" value="Address" required="">
                                            </div>
                                          </div> 
                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang37">City *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang37" class="form-control" type="text" name="lang37" placeholder="Enter Your Input" value="City" required="">
                                            </div>
                                          </div> 

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang38">State *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang38" class="form-control" type="text" name="lang38" placeholder="Enter Your Input" value="State" required="">
                                            </div>
                                          </div>    

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang39">Postal Code *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang39" class="form-control" type="text" name="lang39" placeholder="Enter Your Input" value="Postal Code" required="">
                                            </div>
                                          </div> 

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang40">Payment Information *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang40" class="form-control" type="text" name="lang40" placeholder="Enter Your Input" value="Payment Information" required="">
                                            </div>
                                          </div>   

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang41">Payment Method*<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang41" class="form-control" type="text" name="lang41" placeholder="Enter Your Input" value="Payment Method" required="">
                                            </div>
                                          </div>


                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang42">Card Number *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang42" class="form-control" type="text" name="lang42" placeholder="Enter Your Input" value="Card Number" required="">
                                            </div>
                                          </div>
 
                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang43">Cvv *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang43" class="form-control" type="text" name="lang43" placeholder="Enter Your Input" value="Cvv" required="">
                                            </div>
                                          </div>
  
                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang44">Month *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang44" class="form-control" type="text" name="lang44" placeholder="Enter Your Input" value="Month" required="">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang45">Year *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang45" class="form-control" type="text" name="lang45" placeholder="Enter Your Input" value="Year" required="">
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang46">BOOK NOW *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang46" class="form-control" type="text" name="lang46" placeholder="Enter Your Input" value="BOOK NOW" required="">
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang47">PACKAGE INFORMATION *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang47" class="form-control" type="text" name="lang47" placeholder="Enter Your Input" value="PACKAGE INFORMATION" required="">
                                            </div>
                                          </div>                                         
                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang48">LOCATION *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang48" class="form-control" type="text" name="lang48" placeholder="Enter Your Input" value="LOCATION" required="">
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang49">TOUR DATES *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang49" class="form-control" type="text" name="lang49" placeholder="Enter Your Input" value="TOUR DATES" required="">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang50">Check in : *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang50" class="form-control" type="text" name="lang50" placeholder="Enter Your Input" value="Check in :" required="">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang51">Check out : *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang51" class="form-control" type="text" name="lang51" placeholder="Enter Your Input" value="Check out :" required="">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang52">GUESTS *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang52" class="form-control" type="text" name="lang52" placeholder="Enter Your Input" value="GUESTS" required="">
                                            </div>
                                          </div>
 
                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang53">Total Amount: *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang53" class="form-control" type="text" name="lang53" placeholder="Enter Your Input" value="Total Amount:" required="">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang54">Adult(s) *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang54" class="form-control" type="text" name="lang54" placeholder="Enter Your Input" value="Adult(s)" required="">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang55">Childern *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang55" class="form-control" type="text" name="lang55" placeholder="Enter Your Input" value="Childern" required="">
                                            </div>
                                          </div>

                                          <hr style="margin-top: 20px; margin-bottom: 20px;">
                                          <h6 class="text-center">Blog</h6>
                                          <hr>
                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang56">Blog Details *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang56" class="form-control" type="text" name="lang56" placeholder="Enter Your Input" value="Blog Details" required="">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang57">Search Here *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang57" class="form-control" type="text" name="lang57" placeholder="Enter Your Input" value="Search Here " required="">
                                            </div>
                                          </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang58">Categories *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang58" class="form-control" type="text" name="lang58" placeholder="Enter Your Input" value="Categories" required="">
                                            </div>
                                          </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang59">Recent Posts *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang59" class="form-control" type="text" name="lang59" placeholder="Enter Your Input" value="Recent Posts" required="">
                                            </div>
                                          </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang60">Archives *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang60" class="form-control" type="text" name="lang60" placeholder="Enter Your Input" value="Archives" required="">
                                            </div>
                                          </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang61">Archive *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang61" class="form-control" type="text" name="lang61" placeholder="Enter Your Input" value="Archive" required="">
                                            </div>
                                          </div>


                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang62">Tags *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang62" class="form-control" type="text" name="lang62" placeholder="Enter Your Input" value="Tags" required="">
                                            </div>
                                          </div>


                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang63">Tag *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang63" class="form-control" type="text" name="lang63" placeholder="Enter Your Input" value="Tag" required="">
                                            </div>
                                          </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang64">View(s) *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang64" class="form-control" type="text" name="lang64" placeholder="Enter Your Input" value="View(s)" required="">
                                            </div>
                                          </div>


                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang65">Source *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang65" class="form-control" type="text" name="lang65" placeholder="Enter Your Input" value="Source" required="">
                                            </div>
                                          </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang66">Search*<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang66" class="form-control" type="text" name="lang66" placeholder="Enter Your Input" value="Search" required="">
                                            </div>
                                          </div>



                                          <hr style="margin-top: 20px; margin-bottom: 20px;">
                                          <h6 class="text-center">Contact Us</h6>
                                          <hr>
                                          
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang67">Name *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang67" class="form-control" type="text" name="lang67" placeholder="Enter Your Input" value="Name" required="">
                                            </div>
                                          </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang68">Phone Number *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang68" class="form-control" type="text" name="lang68" placeholder="Enter Your Input" value="Phone Number" required="">
                                            </div>
                                          </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang69">Email Address *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang69" class="form-control" type="text" name="lang69" placeholder="Enter Your Input" value="Email Address" required="">
                                            </div>
                                          </div>


                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang70">Your Message *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang70" class="form-control" type="text" name="lang70" placeholder="Enter Your Input" value="Your Message" required="">
                                            </div>
                                          </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang71">Enter Code *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang71" class="form-control" type="text" name="lang71" placeholder="Enter Your Input" value="Enter Code" required="">
                                            </div>
                                          </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang72">SEND MESSAGE *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang72" class="form-control" type="text" name="lang72" placeholder="Enter Your Input" value="SEND MESSAGE" required="">
                                            </div>
                                          </div>


                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang73">Let's Connect *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang73" class="form-control" type="text" name="lang73" placeholder="Enter Your Input" value="Let's Connect" required="">
                                            </div>
                                          </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang74">Get in touch with us *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang74" class="form-control" type="text" name="lang74" placeholder="Enter Your Input" value="Get in touch with us" required="">
                                            </div>
                                          </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang75">Find us here : *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang75" class="form-control" type="text" name="lang75" placeholder="Enter Your Input" value="Find us here :" required="">
                                            </div>
                                          </div>


                                          <hr style="margin-top: 20px; margin-bottom: 20px;">
                                          <h6 class="text-center">Payment Success</h6>
                                          <hr>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang80">Payment Success. *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang80" class="form-control" type="text" name="lang80" placeholder="Enter Your Input" value="Payment Success." required="">
                                            </div>
                                          </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang81">Congratulation !! *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang81" class="form-control" type="text" name="lang81" placeholder="Enter Your Input" value="Congratulation !!" required="">
                                            </div>
                                          </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang82">YOUR BOOKING HAS BEEN CONFIRMED. *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang82" class="form-control" type="text" name="lang82" placeholder="Enter Your Input" value="YOUR BOOKING HAS BEEN CONFIRMED." required="">
                                            </div>
                                          </div>

                                           <hr style="margin-top: 20px; margin-bottom: 20px;">
                                          <h6 class="text-center">Footer</h6>
                                          <hr>


                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang76">ABOUT US *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang76" class="form-control" type="text" name="lang76" placeholder="Enter Your Input" value="ABOUT US" required="">
                                            </div>
                                          </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang77">FOOTER LINKS *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang77" class="form-control" type="text" name="lang77" placeholder="Enter Your Input" value="FOOTER LINKS" required="">
                                            </div>
                                          </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang78">LATEST BLOG *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang78" class="form-control" type="text" name="lang78" placeholder="Enter Your Input" value="LATEST BLOG" required="">
                                            </div>
                                          </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="lang79">CONTACT US *<span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input id="lang79" class="form-control" type="text" name="lang79" placeholder="Enter Your Input" value="CONTACT US" required="">
                                            </div>
                                          </div>


                                    
                            <div class="form-group row row mb-0">
                              <div class="col-sm-12 text-center">
                                <button name="addProduct_btn" type="submit" class="btn btn-success form-btn">Submit</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <!-- Admin haeder end -->
            </div>
          </div>

        </div>
      </div>

@endsection

@section('scripts')

<script type="text/javascript">
  $("#rtl").on( "change", function() {
    var x = $(this).val();
    if(x == 1)
    $("input[type=text]").css("direction", "rtl");
    else
    $("input[type=text]").css("direction", "ltr");
});
</script>

@endsection