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
                            <h3>Update Patient</h3>
                            <a href="{{ route('admin-user-index') }}" class="add-btn back"><i class="fas fa-arrow-left"></i> Back</a>
                          </div>
                          <p>Dashboard <i class="fa fa-angle-right"></i> Patients <i class="fa fa-angle-right"></i> Update</p>
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
                          <form action="{{route('admin-user-edit',$user->id)}}" method="POST" enctype="multipart/form-data">
                              {{csrf_field()}}
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Current Photo *</label>
                            <div class="col-sm-3">
                             @if($user->is_provider == 1)
                              <img class="profile-img" src="{{ $user->photo ? $user->photo:asset('assets/images/noimage.png') }}" alt="profile image">
                             @else
                              <img class="profile-img" src="{{ $user->photo ? asset('assets/images/users/'.$user->photo):asset('assets/images/noimage.png') }}" alt="profile image">
                             @endif
                            </div>
                            <div class="col-sm-6">
                              <input type="file" id="uploadFile" class="hidden" name="photo" value="">
                              <button name="admin_image_btn" type="button" class="btn btn-block btn-success form-btn uploadProfile"><i class="fa fa-upload"></i> Change Photo</button>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Full Name*</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="name" id="name" placeholder="Full Name" value="{{ $user->name }}" required>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Email Address *</label>
                            <div class="col-sm-9">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" value="{{$user->email}}" required>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="address" class="col-sm-3 col-form-label">Address*</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="address" id="address" placeholder="Address" value="{{ $user->address }}" required>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="phone" class="col-sm-3 col-form-label">Phone Number *</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" value="{{$user->phone}}" required>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="city" class="col-sm-3 col-form-label">City *</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="city" id="city" placeholder="City" value="{{$user->city}}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="fax" class="col-sm-3 col-form-label">Fax *</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="fax" id="fax" placeholder="Fax" value="{{$user->fax}}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="zip" class="col-sm-3 col-form-label">Postal Code *</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="zip" id="zip" placeholder="Postal Code" value="{{$user->zip}}">
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

              </div>
              <!-- Admin haeder end -->
            </div>
          </div>

        </div>
      </div>

@endsection