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
                            <h3>Update Post</h3>
                            <a href="{{ route('admin-blog-index') }}" class="add-btn back"><i class="fas fa-arrow-left"></i> Back</a>
                          </div>
                          <p>Dashboard <i class="fa fa-angle-right"></i> Manage Blog <i class="fa fa-angle-right"></i> Posts <i class="fa fa-angle-right"></i> Update</p>
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
                          <form action="{{route('admin-blog-update',$data->id)}}"" method="POST" enctype="multipart/form-data">
                              {{csrf_field()}}
                            <div class="form-group row">
                              <label for="title" class="col-sm-4 col-form-label">Category * <span>(In Any Language)</span></label>
                              <div class="col-sm-7">
                                <select name="category_id" id="category_id" class="form-control" required="">
                                  <option value="">Select Category</option>
                                    @foreach($cats as $cat)
                                      <option value="{{ $cat->id }}" {{ $data->category_id == $cat->id ? 'selected' :'' }}>{{ $cat->name }}</option>
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
                              <label for="adminimg" class="col-sm-4 col-form-label">Current Image *</label>
                              <div class="col-sm-7">
                              <div class="logo">
                                <img id="adminimg" src="{{ $data->photo ? asset('assets/images/blogs/'.$data->photo):asset('assets/images/noimage.png') }}" alt="Image"></div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="uploadTrigger" class="col-sm-4 col-form-label">Featured Image *</label>
                              <div class="col-sm-7">
                                <div class="top-banner-btn text-center">
                                  <input type="file" id="uploadFile" class="hidden" name="photo" value="">
                                  <button type="button" class="form-control uploadTrigger"><i class="fas fa-download"></i> Update Blog Image</button>
                                  <span>Prefered Size: (600x600) or Square Sized Image</span>
                                </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="details" class="col-sm-4 col-form-label">Details * <span>(In Any Language)</span><</label>
                              <div class="col-sm-7">
                                <textarea name="details" id="details" cols="30" rows="5" placeholder="Details" class="form-control nic-edit">{{ $data->details }}</textarea>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="source" class="col-sm-4 col-form-label">Source *</label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" name="source" id="source" placeholder="Source" value="{{$data->source}}" required>
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="col-sm-7 offset-sm-4">
                                <input type="checkbox" class="checkclick" name="secheck" id="seo" {{ ($data->meta_tag != null || $data->meta_description != null) ? 'checked':'' }}>
                                <label class="col-form-label" for="seo">Allow SEO</label>
                              </div>
                            </div>
                            <div class="{{ ($data->meta_tag == null || $data->meta_description == null) ? "showbox":"" }}">
                            <div class="form-group row">
                              <label for="meta_tags" class="col-sm-4 col-form-label">Meta Tags * <span>(Write meta tags Separated by Comma[,])</span></label>
                              <div class="col-sm-7">
                                <input id="meta_tags" name="meta_tag[]" type="text" value="{{ $data->meta_tag }}" class="form-control mytags">
                              </div>
                            </div>
                              <div class="form-group row">
                              <label for="meta_description" class="col-sm-4 col-form-label">Meta Description *</label>
                              <div class="col-sm-7">
                                <textarea name="meta_description" id="meta_description" cols="30" rows="5" class="form-control" placeholder="Meta Description">{{ $data->meta_description }}</textarea>
                              </div>
                            </div>
                            </div>
                            <div class="form-group row">
                              <label for="tags" class="col-sm-4 col-form-label">Tags * <span>(Write meta tags Separated by Comma[,])</span></label>
                              <div class="col-sm-7">
                                <input id="tags" name="tags[]" type="text" value="{{ $data->tags }}" class="form-control mytags">
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