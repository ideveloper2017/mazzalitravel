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
                            <h3>Email Configuration</h3>
                          </div>
                          <p>Dashboard <i class="fa fa-angle-right"></i> Email Settings <i class="fa fa-angle-right"></i> Email Configuration</p>
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
                          <form action="{{route('admin-mail-configupdate')}}" method="POST">
                              {{csrf_field()}}
                           <div class="form-group row">
                              <label for="setup_logo" class="col-sm-4 col-form-label">SMTP: </label>
                                 <div class="col-sm-7">
                                    <div class="dropdown show">
                                      <a class="btn btn-{{$gs->is_smtp == 1 ? 'primary':'danger'}} dropdown-toggle table-btn" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{$gs->is_smtp == 1 ? 'Activated':'Deactivated'}}
                                      </a>

                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="{{route('admin-gs-issmtp',1)}}">Active</a>
                                        <a class="dropdown-item" href="{{route('admin-gs-issmtp',0)}}">Deactive</a>
                                      </div>
                                    </div>
                                 </div>
                            </div>
                            <div class="form-group row">
                              <label for="smtp_host" class="col-sm-4 col-form-label">SMTP Host * <span>(In Any Language)</span></label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" name="smtp_host" id="smtp_host" placeholder="SMTP Host" value="{{$config->smtp_host}}" required>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="smtp_port" class="col-sm-4 col-form-label">SMTP Port * <span>(In Any Language)</span></label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" name="smtp_port" id="smtp_port" placeholder="SMTP Port" value="{{$config->smtp_port}}" required>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="smtp_user" class="col-sm-4 col-form-label">SMTP Username * <span>(In Any Language)</span></label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" name="smtp_user" id="smtp_user" placeholder="SMTP Usernamet" value="{{$config->smtp_user}}" required>
                              </div>
                            </div>

                              <div class="form-group row">
                              <label for="smtp_pass" class="col-sm-4 col-form-label">SMTP Password * <span>(In Any Language)</span></label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" name="smtp_pass" id="smtp_pass" placeholder="SMTP Password" value="{{$config->smtp_pass}}" required>
                              </div>
                            </div>

                              <div class="form-group row">
                              <label for="from_email" class="col-sm-4 col-form-label">From Email * <span>(In Any Language)</span></label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" name="from_email" id="from_email" placeholder="From Email" value="{{$config->from_email}}" required>
                              </div>
                            </div>

                              <div class="form-group row">
                              <label for="from_name" class="col-sm-4 col-form-label">From Name * <span>(In Any Language)</span></label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" name="from_name" id="from_name" placeholder="From Name" value="{{$config->from_name}}" required>
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