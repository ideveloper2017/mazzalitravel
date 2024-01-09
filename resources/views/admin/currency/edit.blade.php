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
                            <h3>Update Currency </h3>
                            <a href="{{ route('admin-currency-index') }}" class="add-btn back"><i class="fas fa-arrow-left"></i> Back</a>
                          </div>
                          <p>Dashboard <i class="fa fa-angle-right"></i> Payment Settings <i class="fa fa-angle-right"></i> Update</p>
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
                          <form action="{{route('admin-currency-update',$faq->id)}}" method="POST">
                                          @include('includes.form-error')
                                          @include('includes.form-success')
                                          {{csrf_field()}}
                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="i1">Currency Name* <span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input class="form-control" name="name" id="i1" placeholder="Enter Currency Name" required="" type="text" value="{{$faq->name}}" {{$faq->id == 1 ? 'disabled':''}}>
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="i2">Currency Sign* <span>(In Any Language)</span></label>
                                            <div class="col-sm-7">
                                              <input class="form-control" name="sign" id="i2" placeholder="Enter Currency Sign" required="" type="text" value="{{$faq->sign}}" {{$faq->id == 1 ? 'disabled':''}}>
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="i3">Currency Value* <span>Please Enter The Value For 1 USD = ?)</span></label>
                                            <div class="col-sm-7">
                                              <input class="form-control" name="value" id="i3" placeholder="Enter Currency Value" required="" type="text" value="{{$faq->value}}" {{$faq->id == 1 ? 'disabled':''}}>
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
