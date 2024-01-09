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
                          <h3>All Subscribers</h3>
                          <p>Dashboard <i class="fa fa-angle-right"></i> All Subscribers</p>
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
          @php 
          $i=1;
          @endphp
          <!-- Admin table start -->
          <div class="row">
            <div class="col-xl-12">
              <div class="table-wrap mb-30">
                <div class="table-responsive">
                  <table id="common-table" class="table table-striped table-hover common dt-responsive" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>#SL</th>
                        <th>Email</th>
                      </tr>
                    </thead>

                    <tbody>
                      @foreach($subscribers as $subscriber)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$subscriber->email}}</td>
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

@endsection


@section('scripts')
    <script type="text/javascript">
      $( document ).ready(function() {
        $(".btn-area").append('<div class="col-sm-4 text-right">'+
          '<a href="{{route('admin-subs-download')}}" class="add-btn">'+
          '<i class="fa fa-download"></i> Export</a>'+
          '</div>');
      });
    </script>
@endsection