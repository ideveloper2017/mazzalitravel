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
                          <h3>Patients</h3>
                          <p>Dashboard <i class="fa fa-angle-right"></i> Patients</p>
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
                        <th>Patient's Name</th>
                        <th>Patient's Email</th>
                        <th>Address</th>
                        <th>Actions</th>
                      </tr>
                    </thead>

                    <tbody>
                      @foreach($users as $user)
                        <tr>
                          <td>{{$user->name}}</td>
                          <td>{{$user->email}}</td>
                          <td>{{$user->address}}</td>
                          <td>
                            <input type="hidden" value="{{$user->email}}">
                            <a href="{{route('admin-user-show',$user->id)}}" class="btn btn-primary product-btn table-btn"><i class="fa fa-eye"></i> View Details</a>
                            <a href="{{route('admin-user-edit',$user->id)}}" class="btn btn-info product-btn table-btn"><i class="fa fa-edit"></i> Edit</a>
                            <a href="javascript:;" class="btn btn-success product-btn table-btn extra email" data-toggle="modal" data-target="#emailModal"><i class="fa fa-send"></i> Send Message</a>
                            <a href="javascript:;" data-href="{{route('admin-user-delete',$user->id)}}" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger product-btn table-btn"><i class="fa fa-trash"></i> Remove</a>
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
            <p class="text-center">You are about to delete this Patient. Everything will be deleted under this Patient.</p>
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

    <!-- Starting of send email Modal -->
    <div class="modal vendor extra" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Send Message</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ti-close"></i></span></button>
          </div>
          <div class="modal-body">
            <form id="emailreply1">
              {{ csrf_field() }}
              <div class="form-group">
                <input type="email" class="form-control" id="eml1" name="to" placeholder="Email" required="" readonly="">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="subj1" name="subject" placeholder="Subject" required="">
              </div>
              <div class="form-group">
                <textarea name="message" id="msg1" rows="5" class="form-control" placeholder="Message" required=""></textarea>     
              </div>
          </div>
          <div class="modal-footer">
            <button type="submit" id="emlsub1" class="btn btn-default email-btn">Send</button>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Ending of send email Modal -->

@endsection