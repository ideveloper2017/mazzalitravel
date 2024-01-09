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
                            <h3>About Area</h3>
                          </div>
                          <p>Dashboard <i class="fa fa-angle-right"></i> Home Page Settings  <i class="fa fa-angle-right"></i> About Area</p>
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
                          <form action="{{ route('admin-gs-slup') }}" method="POST" enctype="multipart/form-data">
                              {{csrf_field()}}

                                         <div class="form-group row">
                                            <label for="setup_logo" class="col-sm-4 col-form-label">Top Background Image *</label>
                                               <div class="col-sm-7 logo">
                                                  <img src="{{ $data->top_image ? asset('assets/images/'.$data->top_image):asset('assets/images/noimage.png')}}" alt="Image">
                                               </div>
                                         </div>

                                         <div class="form-group row">
                                            <label for="top_image" class="col-sm-4 col-form-label">Setup New Background Image *</label>
                                               <div class="col-sm-7">
                                                  <input name="top_image" id="top_image"  type="file">
                                               </div>
                                         </div>

                                          <div class="form-group row">
                                            <label class="control-label col-sm-4 col-form-label" for="top_title">Top Title *</label>
                                            <div class="col-sm-7">
                                      <textarea class="form-control nic-edit" name="top_title" id="top_title" rows="5">{{$data->top_title}}</textarea>
                                            </div>
                                          </div> 

                                          <div class="form-group row">
                                            <label class="control-label col-sm-4 col-form-label" for="top_text">Top Text *</label>
                                            <div class="col-sm-7">
                                      <textarea class="form-control nic-edit" name="top_text" id="top_text" rows="5">{{$data->top_text}}</textarea>
                                            </div>
                                          </div> 

                                          <div class="form-group row">
                                            <label class="control-label col-sm-4 col-form-label" for="top_link">Top Link *</label>
                                            <div class="col-sm-7">
                                              <input type="text" class="form-control" id="top_link" name="top_link" value="{{$data->top_link}}" required="">
                                            </div>
                                          </div> 

                                          <div class="form-group row">
                                            <label class="control-label col-sm-4 col-form-label" for="second_title">Bottom Title *</label>
                                            <div class="col-sm-7">
                                      <textarea class="form-control nic-edit" name="second_title" id="second_title" rows="5">{{$data->second_title}}</textarea>
                                            </div>
                                          </div> 

                                          <div class="form-group row">
                                            <label class="control-label col-sm-4 col-form-label" for="second_text">Bottom Text *</label>
                                            <div class="col-sm-7">
                                      <textarea class="form-control nic-edit" name="second_text" id="second_text" rows="5">{{$data->second_text}}</textarea>
                                            </div>
                                          </div> 

                                          <div class="form-group row">
                                            <label class="control-label col-sm-4 col-form-label" for="second_link">Bottom Link *</label>
                                            <div class="col-sm-7">
                                              <input type="text" class="form-control" id="second_link" name="second_link" value="{{$data->second_link}}" required="">
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