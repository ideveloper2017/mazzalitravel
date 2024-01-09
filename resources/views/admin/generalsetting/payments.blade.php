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
                            <h3>Feature Package Contents</h3>
                          </div>
                          <p>Dashboard <i class="fa fa-angle-right"></i> Home Page Settings  <i class="fa fa-angle-right"></i> Feature Package Contents</p>
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
                                        <form class="form-horizontal" action="{{route('admin-gs-paymentsup')}}" method="POST">
                                          {{csrf_field()}}

                                          <div class="form-group row">
                                            <label class="control-label col-sm-4 col-form-label" for="phone1">Paypal Business Email  *</label>
                                            <div class="col-sm-7">
                                              <input name="pb" id="phone1" class="form-control" placeholder="Enter Paypal Business Email" type="text" value="{{$data->pb}}">
                                            </div>
                                          </div>



                                          <div class="form-group row">
                                            <label class="control-label col-sm-4 col-form-label" for="phone2">Stripe Key  *</label>
                                            <div class="col-sm-7">
                                              <input name="sk" id="phone2" class="form-control" placeholder="Enter Stripe Key" type="text" value="{{$data->sk}}">
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="control-label col-sm-4 col-form-label" for="phone3">Stripe Secret Key  *</label>
                                            <div class="col-sm-7">
                                              <input name="ss" id="phone3" class="form-control" placeholder="Enter Stripe Secret Key" type="text" value="{{$data->ss}}">
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="control-label col-sm-4 col-form-label" for="website_title">Currency Format *</label>
                                            <div class="col-sm-7">
                                              <select id="website_title" class="form-control" name="sign">
                                                <option value="0" {{$data->sign == 0 ? 'selected':''}}>Before Price</option>
                                                <option value="1" {{$data->sign == 1 ? 'selected':''}}>After Price</option>
                                              </select>

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