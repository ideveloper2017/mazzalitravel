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
                          <h3>Declined Orders</h3>
                          <p>Dashboard <i class="fa fa-angle-right"></i> Orders <i class="fa fa-angle-right"></i> Declined Orders</p>
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
                                                <th>Customer Email</th>
                                                <th>Customer Name</th>
                                                <th>Package Name</th>
                                                <th>Total Cost</th>
                                                <th>Payment Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($orders as $order)
                                            <tr>
                                                <td>{{$order->customer_email}}</td>
                                                <td>{{$order->customer_fname}} {{$order->customer_lname}}</td>
                                                <td>{{$order->package->title}}</td>
                                                <td>{{$order->pay_amount}}</td>
                                                <td>{{$order->payment_status}}</td>
                                                <td>
                                                  <input type="hidden" value="{{$order->customer_email}}">
                                                    <a href="{{route('admin-order-show',$order->id)}}" class="btn btn-primary table-btn"><i class="fas fa-eye"></i> View details</a>
                                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#emailModal" class="btn btn-success table-btn extra email"><i class="fas fa-paper-plane"></i> Send email</a>
                                                    <div class="btn-group orders dropdown">
                                                        <button type="button" class="btn dropdown-toggle table-btn green" data-toggle="dropdown"style="
                                                        @if($order->status == "completed")
                                                        {{ "background-color: #01c004;" }}
                                                        @elseif($order->status == "declined")
                                                        {{ "background-color: #d9534f;" }}
                                                        @else
                                                        {{"background-color: #ff9600;"}}
                                                        @endif">
                                                            {{ucfirst($order->status)}}</button>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="javascript:;" class="dropdown-item" data-href="{{route('admin-order-status',['id1' => $order->id, 'status' => 'completed'])}}" data-toggle="modal" data-target="#confirm-delete">Completed</a></li>
                                                                <li><a href="javascript:;" class="dropdown-item" data-href="{{route('admin-order-status',['id1' => $order->id, 'status' => 'declined'])}}" data-toggle="modal" data-target="#confirm-delete">Declined</a></li>
                                                            </ul>
                                                        </div>


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
        <h4 class="modal-title w-100">Update Order Status</h4>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
            <p class="text-center">Do you want to proceed?.</p>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <a class="btn btn-success btn-ok">Proceed</a>
      </div>

    </div>
  </div>
</div>

    <!-- Starting of send email Modal -->
    <div class="modal vendor extra" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Send Email</h4>
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


