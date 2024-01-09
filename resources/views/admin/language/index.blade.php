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
                          <h3>Language Settings</h3>
                          <p>Dashboard <i class="fa fa-angle-right"></i> Language Settings</p>
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
                        <th>Language</th>
                        <th>Actions</th>
                      </tr>
                    </thead>

                    <tbody>
                      @foreach($datas as $data)   
                        <tr>
                          <td>{{ $data->language }}</td>
                          <td>
                            <a href="{{route('admin-lang-edit',$data->id)}}" class="btn btn-primary product-btn table-btn"><i class="fa fa-edit"></i> Edit</a>
                            @if($data->id != 1)
                              <a href="javascript:;" data-href="{{route('admin-lang-delete',$data->id)}}" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger product-btn table-btn"><i class="fa fa-trash"></i> Remove</a>
                            @endif
                            @if($data->is_default == 1)
                              <a class="btn btn-success product-btn table-btn"><i class="fa fa-check"></i> Default</a>
                            @else
                              <a class="btn btn-info product-btn table-btn" href="{{route('admin-lang-st',['id1'=>$data->id,'id2'=>1])}}">Set Default</a>
                            @endif
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
            <p class="text-center">You are about to delete this Language.</p>
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
          '<a href="{{route('admin-lang-create')}}" class="add-btn">'+
          '<i class="fas fa-plus"></i> Add New Language</a>'+
          '</div>');
      });
    </script>
@endsection    