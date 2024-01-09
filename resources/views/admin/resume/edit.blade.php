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
                            <h3>Update Resume</h3>
                            <a href="{{ route('admin-resume-index') }}" class="add-btn back"><i class="fas fa-arrow-left"></i> Back</a>
                          </div>
                          <p>Dashboard <i class="fa fa-angle-right"></i> Resumes <i class="fa fa-angle-right"></i> Update</p>
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
                          <form action="{{route('admin-resume-update',$data->id)}}" method="POST" enctype="multipart/form-data">
                              {{csrf_field()}}

                            <div class="form-group row">
                              <label for="doctor_id" class="col-sm-4 col-form-label">Doctor *</label>
                              <div class="col-sm-7">
                                    <select name="doctor_id" id="doctor_id" class="form-control" required="">
                                        <option value="">Select Doctor</option>
                                        @foreach($doctors as $doctor)
                                          <option value="{{ $doctor->id }}" {{ $doctor->id == $data->doctor_id ? 'selected' : '' }}>{{ $doctor->name }}</option>
                                        @endforeach
                                    </select>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="title" class="col-sm-4 col-form-label">Title * <span>(In Any Language)</span></label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{$data->title}}" required>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="subtitle" class="col-sm-4 col-form-label">Subtitle * <span>(In Any Language)</span></label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" name="subtitle" id="subtitle" placeholder="Subtitle" value="{{$data->subtitle}}" required>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="duration" class="col-sm-4 col-form-label">Duration * <span>(In Any Language)</span></label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" name="duration" id="duration" placeholder="Duration" value="{{$data->duration}}" required>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="details" class="col-sm-4 col-form-label">Details * <span>(In Any Language)</span></label>
                              <div class="col-sm-7">
                                <textarea name="details" id="details" cols="30" rows="5" placeholder="Details" class="form-control nic-edit">{!! $data->details !!}</textarea>
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