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
                            <h3>Edit Email Template</h3>
                            <a href="{{ route('admin-mail-index') }}" class="add-btn back"><i class="fas fa-arrow-left"></i> Back</a>
                          </div>
                          <p>Dashboard <i class="fa fa-angle-right"></i> Email Settings <i class="fa fa-angle-right"></i> Email Templates <i class="fa fa-angle-right"></i> Update</p>
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
                                        <div class="row" style="padding: 15px">
                                        <div class="col-sm-7 offset-sm-4">
                                        <p>Use the BB codes, it show the data dynamically in your emails.</p>
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Meaning</th>
                                                <th>BB Code</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Customer Name</td>
                                                <td>{customer_name}</td>
                                            </tr>
                                            <tr>
                                                <td>Booking Date</td>
                                                <td>{booking_date}</td>
                                            </tr>
                                            <tr>
                                                <td>Website Title</td>
                                                <td>{website_title}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        </div>
                                        </div>
                          <form action="{{route('admin-mail-update',['id'=>$temp->id])}}"" method="POST">
                              {{csrf_field()}}

                            <div class="form-group row">
                              <label for="email_type" class="col-sm-4 col-form-label">Email Type * <span>(In Any Language)</span></label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" name="email_type" id="email_type" placeholder="Email Type" value="{{$temp->email_type}}" disabled=""  required>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="email_subject" class="col-sm-4 col-form-label">Email Subject * <span>(In Any Language)</span></label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" name="email_subject" id="email_subject" placeholder="Email Subject" value="{{$temp->email_subject}}"  required>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="email_body" class="col-sm-4 col-form-label">Email Body * <span>(In Any Language)</span></label>
                              <div class="col-sm-7">
                                <textarea name="email_body" id="email_body"  rows="10" placeholder="Email Body" class="form-control">{{ $temp->email_body }}</textarea>
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

@section('scripts')

<link href="{{asset('assets/summernote.css')}}" rel="stylesheet">

<script src="{{asset('assets/summernote.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#email_body').summernote({
            height: 250
        });
    });
</script>
@endsection