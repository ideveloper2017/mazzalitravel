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
                            <h3>Home Background Contents</h3>
                          </div>
                          <p>Dashboard <i class="fa fa-angle-right"></i> Home Page Settings  <i class="fa fa-angle-right"></i> Home Background Contents</p>
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
                          <form action="{{ route('admin-gs-bgup') }}" method="POST" enctype="multipart/form-data">
                              {{csrf_field()}}

                                          <div class="form-group row">
                                            <label class="control-label col-sm-4 col-form-label" for="bg_title">Title *</label>
                                            <div class="col-sm-7">
                                      <textarea class="form-control" name="bg_title" id="bg_title" rows="5">{{$data->bg_title}}</textarea>
                                            </div>
                                          </div> 
                                          <div class="form-group row">
                                            <label class="control-label col-sm-4 col-form-label" for="bg_text">Text *</label>
                                            <div class="col-sm-7">
                                      <textarea class="form-control" name="bg_text" id="bg_text" rows="5">{{$data->bg_text}}</textarea>
                                            </div>
                                          </div> 
                                          <div class="form-group row">
                                            <label class="control-label col-sm-4 col-form-label" for="bg_link">Link *</label>
                                            <div class="col-sm-7">
                                              <input type="text" class="form-control" id="bg_link" name="bg_link" value="{{$data->bg_link}}" required="">
                                            </div>
                                          </div> 
                                         <div class="form-group row">
                                            <label for="setup_logo" class="col-sm-4 col-form-label">Current Video Image *</label>
                                               <div class="col-sm-7 logo">
                                                  <img src="{{ $data->video_image ? asset('assets/images/'.$data->video_image):asset('assets/images/noimage.png')}}" alt="Image">
                                               </div>
                                         </div>

                                         <div class="form-group row">
                                            <label for="video_image" class="col-sm-4 col-form-label">Setup New Video Image *</label>
                                               <div class="col-sm-7">
                                                  <input name="video_image" id="video_image"  type="file">
                                               </div>
                                         </div>
                                          <div class="form-group row">
                                            <label class="control-label col-sm-4 col-form-label" for="bg_video">Video Link *</label>
                                            <div class="col-sm-7">
                                              <input type="text" class="form-control" id="bg_video" name="bg_video" value="{{$data->bg_video}}" required="">
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
        $('#bg_text').summernote({
            height: 250
        });
    });
    $(document).ready(function() {
        $('#bg_title').summernote({
            height: 250
        });
    });
</script>
@endsection