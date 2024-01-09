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
                            <h3>Admin Profile</h3>
                          </div>
                          <p>Dashboard <i class="fa fa-angle-right"></i> Admin Profile</p>
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
                        <form class="form-horizontal" action="{{ route('admin-profile-update') }}" method="POST" enctype="multipart/form-data">
                          {{csrf_field()}}   
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Current Photo *</label>
                            <div class="col-sm-3">
                              <img class="profile-img" src="{{ Auth::guard('admin')->user()->photo ? asset('assets/images/admins/'.Auth::guard('admin')->user()->photo):asset('assets/images/noimage.png')}}" alt="profile image">
                            </div>
                            <div class="col-sm-6">
                              <input type="file" id="uploadFile" class="hidden" name="photo" value="">
                              <button name="admin_image_btn" type="button" class="btn btn-block btn-success form-btn uploadProfile"><i class="fa fa-upload"></i> Change Photo</button>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Admin Name *</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="name" id="name" placeholder="Enter Admin Name" value="{{ Auth::guard('admin')->user()->name}}" required>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Email Address *</label>
                            <div class="col-sm-9">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email Address" value="{{ Auth::guard('admin')->user()->email }}" required>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="phone" class="col-sm-3 col-form-label">Phone Number *</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone Number" value="{{ Auth::guard('admin')->user()->phone}}" required>
                            </div>
                          </div>
                          <div class="form-group row mb-0">
                            <div class="col-sm-12 text-center">
                              <button name="addProduct_btn" type="submit" class="btn btn-success form-btn">Update Profile</button>
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