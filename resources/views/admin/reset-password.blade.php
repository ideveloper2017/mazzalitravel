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
                            <h3>Change Password</h3>
                          </div>
                          <p>Dashboard <i class="fa fa-angle-right"></i> Change Password</p>
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
                        <form class="form-horizontal" action="{{ route('admin-password-change') }}" method="POST" enctype="multipart/form-data">
                          {{csrf_field()}}   
                        <div class="form-group row">
                            <label for="cpass" class="col-sm-4 col-form-label">Current Password *</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="cpass" id="cpass" placeholder="Enter Current Password" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="newpass" class="col-sm-4 col-form-label">New Password *</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="newpass" id="newpass" placeholder="Enter New Password" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="renewpass" class="col-sm-4 col-form-label">Re-Type New Password *</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="renewpass" id="renewpass" placeholder="Enter Re-Type New Password" required>
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