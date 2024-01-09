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
                            <h3>Update Image</h3>
                            <a href="{{ route('admin-img-index') }}" class="add-btn back"><i class="fas fa-arrow-left"></i> Back</a>
                          </div>
                          <p>Dashboard <i class="fa fa-angle-right"></i> Home Page Settings <i class="fa fa-angle-right"></i> Package Galleries <i class="fa fa-angle-right"></i> Update</p>
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
                          <form action="{{route('admin-img-edit',$ad->id)}}" method="POST" enctype="multipart/form-data">
                              {{csrf_field()}}
                            <div class="form-group row">
                              <label for="adminimg" class="col-sm-4 col-form-label">Current Image *</label>
                              <div class="col-sm-7">
                                <div class="logo"><img id="adminimg" src="{{ $ad->photo ? asset('assets/images/brands/'.$ad->photo):asset('assets/images/noimage.png')}}" alt="Image"></div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="uploadTrigger" class="col-sm-4 col-form-label">Featured Image *</label>
                              <div class="col-sm-7">
                                <div class="top-banner-btn text-center">
                                  <input type="file" id="uploadFile" class="hidden" name="photo" value="">
                                  <button type="button" class="form-control uploadTrigger"><i class="fas fa-download"></i> Upload Image</button>
                                  <span>Prefered Size: (600x600) or Square Sized Image</span>
                                </div>
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