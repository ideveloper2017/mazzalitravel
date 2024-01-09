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
                            <h3>Website Footer</h3>
                          </div>
                          <p>Dashboard <i class="fa fa-angle-right"></i> Generel Settings <i class="fa fa-angle-right"></i> Footer</p>
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
                          <form action="{{ route('admin-gs-aboutup') }}" method="POST" enctype="multipart/form-data">
                              {{csrf_field()}}
                          <div class="form-group row">
                            <label class="control-label col-form-label col-sm-4" for="subscribe_title">Subscribe Title * <span>(In Any Language)</span></label>
                            <div class="col-sm-7">
                              <textarea name="subscribe_title" id="subscribe_title" class="form-control nic-edit" rows="5" style="resize: vertical;" placeholder="Enter Subscribe Title">{{$gs->subscribe_title}}</textarea>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="control-label col-form-label col-sm-4" for="subscribe_text">Subscribe Text * <span>(In Any Language)</span></label>
                            <div class="col-sm-7">
                              <textarea name="subscribe_text" id="subscribe_text" class="form-control nic-edit" rows="5" style="resize: vertical;" placeholder="Enter Subscribe Text">{{$gs->subscribe_text}}</textarea>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="control-label col-form-label col-sm-4" for="about_us_text">About Us Text * <span>(In Any Language)</span></label>
                            <div class="col-sm-7">
                              <textarea name="about" id="about_us_text" class="form-control" rows="5" style="resize: vertical;" placeholder="Enter About Us Text" required="">{{$gs->about}}</textarea>
                            </div>
                          </div>
                          <div class="form-group row">
                              <label class="control-label col-form-label col-sm-4" for="street_address">Street Address * <span>(In Any Language)</span></label>
                              <div class="col-sm-7">
                                <textarea name="street" id="street_address" class="form-control" rows="5" placeholder="Enter Street Address">{{$gs->street}}</textarea>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="control-label col-form-label col-sm-4" for="phone">Phone *</label>
                              <div class="col-sm-7">
                                <input name="phone" id="phone" class="form-control" placeholder="Enter Phone" type="text" value="{{$gs->phone}}">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="control-label col-form-label col-sm-4" for="fax">Fax *</label>
                              <div class="col-sm-7">
                                <input name="fax" id="fax" class="form-control" placeholder="Enter Fax" type="text" value="{{$gs->fax}}">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="control-label col-form-label col-sm-4" for="email">Email *</label>
                              <div class="col-sm-7">
                                <input name="email" id="email" class="form-control" placeholder="Enter Email"  type="email" value="{{$gs->email}}">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="control-label col-form-label col-sm-4" for="site">Website *</label>
                              <div class="col-sm-7">
                                <input name="site" id="site" class="form-control" placeholder="Enter Website" type="text" value="{{$gs->site}}">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="control-label col-form-label col-sm-4" for="footer_text">Copyright Text *</label>
                              <div class="col-sm-7">
                              <textarea name="footer" id="footer_text" class="form-control nic-edit" rows="5" placeholder="Enter Footer Text" required="">{{$gs->footer}}</textarea>
                              </div>
                          </div>
                                          <div class="form-group row">
                                            <label class="control-label col-form-label col-sm-4" for="current_background_image ">Current Background Image </label>
                                            <div class="col-sm-7">
                                        <img style="width: auto; max-height: 450px;"  id="adminimg" src="{{ $data->footer_background ? asset('assets/images/'.$data->footer_background):asset('assets/images/noimage.png')}}" alt="" id="adminimg">      
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="control-label col-form-label col-sm-4" for="setup_new_background">Setup New Background *</label>
                                            <div class="col-sm-7">
                                              <input name="footer_background"  type="file">
                                            </div>
                                          </div>
                            <div class="form-group row mb-0">
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