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
                            <h3>Package Gallery Contents</h3>
                          </div>
                          <p>Dashboard <i class="fa fa-angle-right"></i> Home Page Settings  <i class="fa fa-angle-right"></i> Package Gallery Contents</p>
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
                          <form action="{{ route('admin-gs-tsup') }}" method="POST" enctype="multipart/form-data">
                              {{csrf_field()}}

                                          <div class="form-group row">
                                            <label class="control-label col-sm-4 col-form-label" for="ts_title">Title *</label>
                                            <div class="col-sm-7">
                                      <textarea class="form-control nic-edit" name="ts_title" id="ts_title" rows="5">{{$data->ts_title}}</textarea>
                                            </div>
                                          </div> 

                                          <div class="form-group row">
                                            <label class="control-label col-sm-4 col-form-label" for="ts_text">Text *</label>
                                            <div class="col-sm-7">
                                              <textarea class="form-control nic-edit" name="ts_text" id="ts_text" rows="5">{{$data->ts_text}}</textarea>
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

