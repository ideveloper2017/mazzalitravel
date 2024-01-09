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
                            <h3>Contact Us Page</h3>
                          </div>
                          <p>Dashboard <i class="fa fa-angle-right"></i> Menu Page Settings <i class="fa fa-angle-right"></i> FAQ Page <i class="fa fa-angle-right"></i> Contact Us Pagee</p>
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
                          <form action="{{ route('admin-ps-contact-submit') }}" method="POST">
                              {{csrf_field()}}
                           <div class="form-group row">
                              <label for="setup_logo" class="col-sm-4 col-form-label">Contact Page: </label>
                                 <div class="col-sm-7">
                                    <div class="dropdown show">
                                      <a class="btn btn-{{$ps->c_status == 1 ? 'primary':'danger'}} dropdown-toggle table-btn" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{$ps->c_status == 1 ? 'Activated':'Deactivated'}}
                                      </a>

                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="{{route('admin-ps-contactup',1)}}">Active</a>
                                        <a class="dropdown-item" href="{{route('admin-ps-contactup',0)}}">Deactive</a>
                                      </div>
                                    </div>
                                 </div>
                            </div>
                            <div class="form-group row">
                              <label for="contact_title" class="col-sm-4 col-form-label">Contact Title * <span>(In Any Language)</span></label>
                              <div class="col-sm-7">
                                <textarea name="contact_title" id="contact_text" cols="30" rows="5" placeholder="Description" class="form-control nic-edit">{{ $ps->contact_title }}</textarea>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="contact_text" class="col-sm-4 col-form-label">Contact Description * <span>(In Any Language)</span></label>
                              <div class="col-sm-7">
                                <textarea name="contact_text" id="contact_text" cols="30" rows="5" placeholder="Description" class="form-control nic-edit">{{ $ps->contact_text }}</textarea>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="contact_email" class="col-sm-4 col-form-label">Contact Us Email Address *</label>
                              <div class="col-sm-7">
                                <textarea name="contact_email" id="contact_email" cols="30" rows="5" placeholder="Contact Us Email Address" class="form-control">{{ $ps->contact_email }}</textarea>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="contact_success" class="col-sm-4 col-form-label">Contact Form Success Text * <span>(In Any Language)</span></label>
                              <div class="col-sm-7">
                                <textarea name="contact_success" id="contact_success" cols="30" rows="5" placeholder="Contact Form Success Text" class="form-control">{{ $ps->contact_success }}</textarea>
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