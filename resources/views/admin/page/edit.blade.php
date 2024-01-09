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
                            <h3>Update Page</h3>
                            <a href="{{ route('admin-page-index') }}" class="add-btn back"><i class="fas fa-arrow-left"></i> Back</a>
                          </div>
                        <p>Dashboard <i class="fa fa-angle-right"></i> Menu Page Settings <i class="fa fa-angle-right"></i>  Other Pages <i class="fa fa-angle-right"></i> Update</p>
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
                          <form action="{{ route('admin-page-update',$page->id) }}" method="POST">
                              {{csrf_field()}}
                            <div class="form-group row">
                              <label for="title" class="col-sm-4 col-form-label">Title * <span>(In Any Language)</span></label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{ $page->title }}" required>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="slug" class="col-sm-4 col-form-label">Slug * <span>(In English)</span></label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug" value="{{ $page->slug }}" required>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="details" class="col-sm-4 col-form-label">Details * <span>(In Any Language)</span></label>
                              <div class="col-sm-7">
                                <textarea name="text" id="details" cols="30" rows="5" placeholder="Details" class="form-control nic-edit">{{ $page->text }}</textarea>
                              </div>
                            </div>

                            <div class="form-group row">
                              <div class="col-sm-7 offset-sm-4">
                            <input type="checkbox" class="checkclick" name="secheck" id="seo" {{ ($page->meta_tag != null || $page->meta_description != null) ? 'checked':'' }}>
                                <label class="col-form-label" for="seo">Allow Page SEO</label>
                              </div>
                            </div>
                            <div class="{{ ($page->meta_tag == null || $page->meta_description == null) ? "showbox":"" }}">
                              <div class="form-group row">
                                <label for="meta_tags" class="col-sm-4 col-form-label">Page Meta Tags * <span>(Write meta tags Separated by Comma[,])</span></label>
                                <div class="col-sm-7">
                                  <input id="meta_tags" name="meta_tag[]" type="text" value="{{ $page->meta_tag }}" class="form-control mytags">
                                </div>
                              </div>
                                <div class="form-group row">
                                <label for="meta_description" class="col-sm-4 col-form-label">Meta Description *</label>
                                <div class="col-sm-7">
                                  <textarea name="meta_description" id="meta_description" cols="30" rows="5" class="form-control" placeholder="Meta Description">{{ $page->meta_description }}</textarea>
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