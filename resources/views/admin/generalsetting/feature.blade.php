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
                          <form action="{{ route('admin-gs-fpup') }}" method="POST" enctype="multipart/form-data">
                              {{csrf_field()}}

                                          <div class="form-group row">
                                            <label class="control-label col-sm-4 col-form-label" for="fp_title">Title *</label>
                                            <div class="col-sm-7">
                                      <textarea class="form-control nic-edit" name="fp_title" id="fp_title" rows="5">{{$data->fp_title}}</textarea>
                                            </div>
                                          </div> 

                                          <div class="form-group row">
                                            <label class="control-label col-sm-4 col-form-label" for="fp_text">Text *</label>
                                            <div class="col-sm-7">
                                              <textarea class="form-control nic-edit" name="fp_text" id="fp_text" rows="5">{{$data->fp_text}}</textarea>
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

