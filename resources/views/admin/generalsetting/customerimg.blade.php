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
                            <h3>Review Background Image</h3>
                          </div>
                          <p>Dashboard <i class="fa fa-angle-right"></i> Home Page Settings <i class="fa fa-angle-right"></i> Review Background Image</p>
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
                    <div class="col-xl-7">
                      <div class="common-form">
                        <form class="form-horizontal" action="{{ route('admin-gs-cimgup') }}" method="POST" enctype="multipart/form-data">
                          {{csrf_field()}}   

                           <div class="form-group row">
                              <label for="setup_logo" class="col-sm-5 col-form-label">Current Background Image *</label>
                                 <div class="col-sm-7 logo">
                                    <img src="{{ $data->cimg ? asset('assets/images/'.$data->cimg):asset('assets/images/noimage.png')}}" alt="Image">
                                 </div>
                           </div>
                           <div class="form-group row">
                              <label for="cimg" class="col-sm-5 col-form-label">Setup New Background Image *</label>
                                 <div class="col-sm-7">
                                    <input name="cimg" id="cimg"  type="file">
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
              <!-- Admin haeder end -->
            </div>
          </div>
        </div>
      </div>
@endsection