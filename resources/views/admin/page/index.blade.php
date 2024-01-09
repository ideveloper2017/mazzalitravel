@extends('layouts.admin') 

@section('styles')
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
                          <h3>Others Pages</h3>
                          <p>Dashboard <i class="fa fa-angle-right"></i> Home Page Settings <i class="fa fa-angle-right"></i> Others Pages</p>
                        </div>
                      </div>
                      @include('includes.notification')
                    </div>   
                  </div>
                </div>
              </div>
              <!-- Admin haeder end -->
            </div>
          </div>
        
          @include('includes.form-error')
          @include('includes.form-success')
          <!-- Admin table start -->
          <div class="row">
            <div class="col-xl-12">
              <div class="table-wrap mb-30">
                <div class="table-responsive">
                  <table id="common-table" class="table table-striped table-hover common dt-responsive" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th width="300px;">Title</th>
                        <th width="500px;">Details</th>
                        <th>Actions</th>
                      </tr>
                    </thead>

                    <tbody>
                      @foreach($pages as $data)   
                        <tr>
                          <td>{{$data->title}}</td>
                          <td>{{(substr(strip_tags($data->text), 0, 700))}}</td>
                          <td>
                            <a href="{{route('admin-page-edit',$data->id)}}" class="btn btn-primary product-btn table-btn"><i class="fa fa-edit"></i> Edit</a>
                            <a href="javascript:;" data-href="{{route('admin-page-delete',$data->id)}}" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger product-btn table-btn"><i class="fa fa-trash"></i> Remove</a>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Admin table end -->

        </div>
      </div>

<!-- The Modal -->
<div class="modal fade" id="confirm-delete">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header text-center">
        <h4 class="modal-title w-100">Confirm Delete</h4>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
            <p class="text-center">You are about to delete this Page.</p>
            <p class="text-center">Do you want to proceed?</p>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <a class="btn btn-danger btn-ok">Delete</a>
      </div>

    </div>
  </div>
</div>
@endsection


@section('scripts')
    <script type="text/javascript">
      $( document ).ready(function() {
        $(".btn-area").append('<div class="col-sm-4 text-right">'+
          '<a href="{{route('admin-page-create')}}" class="add-btn">'+
          '<i class="fas fa-plus"></i> Add New Page</a>'+
          '</div>');
      });
    </script>
@endsection    