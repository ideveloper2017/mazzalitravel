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
                            <h3>Home Page Cusomization</h3>
                          </div>
                          <p>Dashboard <i class="fa fa-angle-right"></i> Home Page Settings <i class="fa fa-angle-right"></i> Home Page Cusomization</p>
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
                      <div class="common-form">
                        <form class="form-horizontal" action="{{route('admin-gs-bginfoup')}}" method="POST">
                          {{csrf_field()}}
                          <div class="row">
                            <div class="col-xl-6">
                              <div class="form-group row">
                                <label for="" class="col-sm-9 col-form-label">Home Background *</label>
                                <div class="col-sm-3">
                                  <label class="switch">
                                    <input type="checkbox" name="slider" value="1" {{$data->slider==1?"checked":""}}>
                                    <span class="slider round"></span>
                                  </label>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="" class="col-sm-9 col-form-label">Service *</label>
                                <div class="col-sm-3">
                                  <label class="switch">
                                    <input type="checkbox" name="category" value="1" {{$data->category==1?"checked":""}}>
                                    <span class="slider round"></span>
                                  </label>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="" class="col-sm-9 col-form-label">About Area *</label>
                                <div class="col-sm-3">
                                  <label class="switch">
                                    <input type="checkbox" name="sb" value="1" {{$data->sb==1?"checked":""}}>
                                    <span class="slider round"></span>
                                  </label>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="" class="col-sm-9 col-form-label">Package Galleries *</label>
                                <div class="col-sm-3">
                                  <label class="switch">
                                    <input type="checkbox" name="lb" value="1" {{$data->lb==1?"checked":""}}>
                                    <span class="slider round"></span>
                                  </label>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-6">
                              <div class="form-group row">
                                <label for="" class="col-sm-9 col-form-label">Featured Package *</label>
                                <div class="col-sm-3">
                                  <label class="switch">
                                    <input type="checkbox" name="lp" value="1" {{$data->lp==1?"checked":""}}>
                                    <span class="slider round"></span>
                                  </label>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="" class="col-sm-9 col-form-label">Reviews *</label>
                                <div class="col-sm-3">
                                  <label class="switch">
                                    <input type="checkbox" name="ftp" value="1" {{$data->ftp==1?"checked":""}}>
                                    <span class="slider round"></span>
                                  </label>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="" class="col-sm-9 col-form-label">Latest Blog *</label>
                                <div class="col-sm-3">
                                  <label class="switch">
                                    <input type="checkbox" name="pp" value="1" {{$data->pp==1?"checked":""}}>
                                    <span class="slider round"></span>
                                  </label>
                                </div>
                              </div>

                            </div>
                            <div class="col-xl-12">
                              <div class="form-group row mb-0">
                                <div class="col-sm-12 text-center">
                                  <button name="addProduct_btn" type="submit" class="btn btn-success form-btn">Submit</button>
                                </div>
                              </div>
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