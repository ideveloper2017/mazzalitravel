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
                            <h3>Google Login</h3>
                          </div>
                          <p>Dashboard <i class="fa fa-angle-right"></i> Social Settings <i class="fa fa-angle-right"></i> Google Login</p>
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
                          <form action="{{route('admin-social-ugoogle')}}" method="POST">   
                            {{csrf_field()}}

                           <div class="form-group row">
                              <label for="setup_logo" class="col-sm-4 col-form-label">Google Login: </label>
                                 <div class="col-sm-7">
                                    <div class="dropdown show">
                                      <a class="btn btn-{{$socialdata->gcheck == 1 ? 'primary':'danger'}} dropdown-toggle table-btn" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{$socialdata->gcheck == 1 ? 'Activated':'Deactivated'}}
                                      </a>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="{{route('admin-social-googleup',1)}}">Active</a>
                                        <a class="dropdown-item" href="{{route('admin-social-googleup',0)}}">Deactive</a>
                                      </div>
                                    </div>
                                 </div>
                            </div>

                            <div class="form-group row">
                              <label for="gclient_id" class="col-sm-4 col-form-label">Client ID * <span>Get Your Client ID from console.cloud.google.com</span></label>
                              <div class="col-sm-7">
                                <input name="gclient_id" id="gclient_id" class="form-control" placeholder="Enter Client ID" type="text" value="{{$socialdata->gclient_id}}">
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="gclient_secret" class="col-sm-4 col-form-label">Client Secret * <span>Get Your Client Secret from console.cloud.google.com</span></label>
                              <div class="col-sm-7">
                                <input name="gclient_secret" id="gclient_secret" class="form-control" placeholder="Enter Client Secret" type="text" value="{{$socialdata->gclient_secret}}">
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="sid" class="col-sm-4 col-form-label">Website URL * </label>
                              <div class="col-sm-7">
                                <input id="sid" class="form-control" placeholder="Website URL" type="text" value="{{url('/')}}" readonly>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="gclient_secret" class="col-sm-4 col-form-label">Redirect URL * <span>Copy this url and paste it to your Redirect URL in console.cloud.google.com.</span></label>
                              <div class="col-sm-7">
                                <input name="gredirect" id="url" class="form-control" placeholder="Enter Redirect URL" type="text" value="{{url('/auth/google/callback')}}" readonly>
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
