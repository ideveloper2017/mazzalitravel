@extends('layouts.admin')
@section('styles')

<style type="text/css">
    .input-group-addon {
      border-right: 1px solid #ccc;
      border-left: none;
      border-radius: 0;
    }
</style>

@endsection
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
                            <h3>Website Contents</h3>
                          </div>
                          <p>Dashboard <i class="fa fa-angle-right"></i> Generel Settings <i class="fa fa-angle-right"></i> Website Contents</p>
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
                        <form class="form-horizontal" action="{{ route('admin-gs-contentsup') }}" method="POST" enctype="multipart/form-data">
                          {{csrf_field()}}   
                           <div class="form-group row">
                              <label for="website_title" class="col-sm-5 col-form-label">Website Title *</label>
                                 <div class="col-sm-7">
                                    <input type="text" name="title" id="website_title" class="form-control" placeholder="Website Title" value="{{ $data->title }}" required>
                                 </div>
                           </div>
                           <div class="form-group row">
                              <label for="map_key" class="col-sm-5 col-form-label">Google Map Api Key *</label>
                                 <div class="col-sm-7">
                                    <input type="text" name="map_key" id="map_key" class="form-control" placeholder="Google Map Api Key" value="{{ $data->map_key }}" required>
                                 </div>
                           </div>
                           <div class="form-group row">
                              <label for="cp" class="col-sm-5 col-form-label">Theme Color * <span>Leaving Empty Will Set The Default Color (Don't Use RGB)</span></label>
                                 <div class="col-sm-7">
                                            <div class="input-group colorpicker-component cp">
                                  <input type="text" name="colors" value="{{$data->colors}}"  class="form-control cp"  />
                                    <span class="input-group-addon"><i></i></span>
                                    </div>
                                 </div>
                           </div>
                           <div class="form-group row">
                              <label for="setup_logo" class="col-sm-5 col-form-label">Current Admin Background Image</label>
                                 <div class="col-sm-7 logo">
                                    <img src="{{ asset('assets/images/'.$data->bimg) }}" alt="Image">
                                 </div>
                           </div>
                           <div class="form-group row">
                              <label for="bimg" class="col-sm-5 col-form-label">Setup New Admin Background Image</label>
                                 <div class="col-sm-7">
                                    <input type="file" name="bimg" id="bimg">
                                 </div>
                           </div>
                           <div class="form-group row">
                              <label for="setup_logo" class="col-sm-5 col-form-label">Tawk.to: </label>
                                 <div class="col-sm-7">
                                    <div class="dropdown show">
                                      <a class="btn btn-{{$gs->is_talkto == 1 ? 'primary':'danger'}} dropdown-toggle table-btn" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{$gs->is_talkto == 1 ? 'Activated':'Deactivated'}}
                                      </a>

                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="{{route('admin-gs-talkto',1)}}">Active</a>
                                        <a class="dropdown-item" href="{{route('admin-gs-talkto',0)}}">Deactive</a>
                                      </div>
                                    </div>
                                 </div>
                            </div>
                           <div class="form-group row">
                              <label for="widget_code" class="col-sm-5 col-form-label">Tawk.to Widget Code *</label>
                                 <div class="col-sm-7">
                                    <textarea name="talkto" id="widget_code" cols="30" rows="5" class="form-control" placeholder="Tawk.to Widget Code" required>{{$data->talkto}}</textarea>
                                 </div>
                           </div>
                           <div class="form-group row">
                              <label for="setup_logo" class="col-sm-5 col-form-label">Disqus: </label>
                                 <div class="col-sm-7">
                                    <div class="dropdown show">
                                      <a class="btn btn-{{$gs->is_disqus == 1 ? 'primary':'danger'}} dropdown-toggle table-btn" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{$gs->is_disqus == 1 ? 'Activated':'Deactivated'}}
                                      </a>

                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="{{route('admin-gs-isdisqus',1)}}">Active</a>
                                        <a class="dropdown-item" href="{{route('admin-gs-isdisqus',0)}}">Deactive</a>
                                      </div>
                                    </div>
                                 </div>
                            </div>
                           <div class="form-group row">
                              <label for="disqus_code" class="col-sm-5 col-form-label">Disqus Universal Code *</label>
                                 <div class="col-sm-7">
                                    <textarea name="disqus" id="disqus_code" cols="30" rows="5" class="form-control" placeholder="Tawk.to Widget Code" required>{{$data->disqus}}</textarea>
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