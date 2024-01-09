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
                            <h3>Staff Information</h3>
                            <a href="{{ route('admin-staff-index') }}" class="add-btn back"><i class="fas fa-arrow-left"></i> Back</a>
                          </div>
                          <p>Dashboard <i class="fa fa-angle-right"></i> Manage Staffs  <i class="fa fa-angle-right"></i> Show</p>
                        </div>
                      </div>

                      @include('includes.notification')

                    </div>   
                  </div>
                </div>

                                <div class="panel-body common pt-30 pb-30 pl-10 pr-10">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-11">
                                            <div class="customer-details-table">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td width="49%" style="text-align: right;"><strong>ID#</strong></td>
                                                                <td>{{$staff->id}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td width="49%" style="text-align: right;"><strong>Photo:</strong></td>
                                                                <td><img  src="{{ $staff->photo ? asset('assets/images/admins/'.$staff->photo):asset('assets/images/admins/noimage')}}" alt="No Image" id="adminimg"></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="49%" style="text-align: right;"><strong>Name:</strong></td>
                                                                <td>{{$staff->name}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td width="49%" style="text-align: right;"><strong>Role:</strong></td>
                                                                <td>{{$staff->role}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td width="49%" style="text-align: right;"><strong>Email:</strong></td>
                                                                <td>{{$staff->email}}</td>
                                                            </tr>

                                                            <tr>
                                                                <td width="49%" style="text-align: right;"><strong>Phone:</strong></td>
                                                                <td>{{$staff->phone}}</td>
                                                            </tr>

                                                            <tr>
                                                                <td width="49%" style="text-align: right;"><strong>Joined:</strong></td>
                                                                <td>{{$staff->created_at->diffForHumans()}}</td>
                                                            </tr>
                                                    </tbody></table>
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