@extends('layouts.admin')

@section('content')
<div class="wrap__right">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-12">
              <div class="panel panel-default common">
                <!-- Admin haeder start -->
                <div class="panel-heading">
                  <div class="admin__header">
                    <div class="row reorder-xs align-items-center">
                      <div class="col-xl-7 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="header__title">
                          <h3>Social Links</h3>
                          <p>Dashboard <i class="fa fa-angle-right"></i> Social Settings <i class="fa fa-angle-right"></i> Social Links</p>
                        </div>
                      </div>

                      @include('includes.notification')

                    </div>   
                  </div>
                </div>
                <!-- Admin haeder end -->

                <!-- Admin content start -->
                <div class="panel-body common pt-30 pb-30 pl-10 pr-10">
                  <div class="row justify-content-center">
                    <div class="col-xl-10">
                      <div class="common-form">
                        <form action="{{route('admin-social-update')}}" method="POST">
                          @include('includes.form-error')
                          @include('includes.form-success')    
                          {{csrf_field()}}
                          <div class="form-group row">
                            <label for="facebook" class="col-sm-2 col-form-label">Facebook *</label>
                            <div class="col-sm-7">
                              <input class="form-control" name="facebook" id="facebook" placeholder="http://facebook.com/" required="" type="text" value="{{$socialdata->facebook}}">
                            </div>
                            <div class="col-sm-2">
                              <label class="switch">
                                <input type="checkbox" name="f_status" value="1" {{$socialdata->f_status==1?"checked":""}}>
                                <span class="slider round"></span>
                              </label>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="gplus" class="col-sm-2 col-form-label">Google Plus *</label>
                            <div class="col-sm-7">
                                <input class="form-control" name="gplus" id="google-Plus" placeholder="http://google.com/" required="" type="text" value="{{$socialdata->gplus}}">
                            </div>
                            <div class="col-sm-2">
                              <label class="switch">
                                <input type="checkbox" name="g_status" value="1" {{$socialdata->g_status==1?"checked":""}}>
                                <span class="slider round"></span>
                              </label>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="twitter" class="col-sm-2 col-form-label">Twitter *</label>
                            <div class="col-sm-7">
                                <input class="form-control" name="twitter" id="twiter" placeholder="http://twitter.com/" required="" type="text" value="{{$socialdata->twitter}}">
                            </div>
                            <div class="col-sm-2">
                              <label class="switch">
                                <input type="checkbox" name="t_status" value="1" {{$socialdata->t_status==1?"checked":""}}>
                                <span class="slider round"></span>
                              </label>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="linkedin" class="col-sm-2 col-form-label">Linkedin *</label>
                            <div class="col-sm-7">
                              <input class="form-control" name="linkedin" id="linkedin" placeholder="http://linkedin.com/" required="" type="text" value="{{$socialdata->linkedin}}">
                            </div>
                            <div class="col-sm-2">
                              <label class="switch">
                                <input type="checkbox" name="l_status" value="1" {{$socialdata->l_status==1?"checked":""}}>
                                <span class="slider round"></span>
                              </label>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="pinterest" class="col-sm-2 col-form-label">Pinterest *</label>
                            <div class="col-sm-7">
                              <input class="form-control" name="pinterest" id="pinterest" placeholder="http://pinterest.com/" required="" type="text" value="{{$socialdata->pinterest}}">
                            </div>
                            <div class="col-sm-2">
                              <label class="switch">
                                <input type="checkbox" name="p_status" value="1" {{$socialdata->p_status==1?"checked":""}}>
                                <span class="slider round"></span>
                              </label>
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
                <!-- Admin content end -->
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection