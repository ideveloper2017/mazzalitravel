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
                            <h3>Group Email</h3>
                          </div>
                          <p>Dashboard <i class="fa fa-angle-right"></i> Email Settings <i class="fa fa-angle-right"></i> Group Email</p>
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
                          <form action="{{route('admin-group-submit')}}"" method="POST" enctype="multipart/form-data">
                              {{csrf_field()}}

                            <div class="form-group row">
                              <label for="type" class="col-sm-4 col-form-label">Select User Type * </label>
                              <div class="col-sm-7">
                                <select name="type" class="form-control" id="type" required="">
                                    <option value=""> Choose User Type </option>
                                    <option value="2">Subscribers</option>
                                </select>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="email_subject" class="col-sm-4 col-form-label">Email Subject * <span>(In Any Language)</span></label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" name="email_subject" id="email_subject" placeholder="Email Subject" value="" required>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="body" class="col-sm-4 col-form-label">Email Body  * <span>(In Any Language)</span></label>
                              <div class="col-sm-7">
                                            <textarea class="form-control" name="body" id="body" rows="10" placeholder="Write Mail Description"></textarea>
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
        $('#body').summernote({
            height: 250
        });
    });
</script>
@endsection