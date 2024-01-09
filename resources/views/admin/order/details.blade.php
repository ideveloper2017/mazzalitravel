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
                            <h3>Order Details</h3>
                            <a href="{{ route('admin-order-index') }}" class="add-btn back"><i class="fas fa-arrow-left"></i> Back</a>
                          </div>
                          <p>Dashboard <i class="fa fa-angle-right"></i> Orders <i class="fa fa-angle-right"></i> Order Details</p>
                        </div>
                      </div>

                      @include('includes.notification')

                    </div>   
                  </div>
                </div>

                                <div class="panel-body common pt-30 pb-30 pl-10 pr-10">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-11">
                                            <div class="customer-details-table">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td width="49%" class="rigttext"><strong>Order ID#</strong></td>
                                                                <td>{{$order->order_number}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td width="49%" class="rigttext"><strong>Package Ordered:</strong></td>
                                                                <td>{{$order->package->title}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td width="49%" class="rigttext"><strong>Package Duration:</strong></td>
                                                                <td>{{date('d M',strtotime($order->package->start_date))}} - {{date('d M',strtotime($order->package->return_date))}}</td>
                                                            </tr>
                                                            @if($order->customer_fname != "")
                                                            <tr>
                                                                <td width="49%" class="rigttext"><strong>First Name:</strong></td>
                                                                <td>{{$order->customer_fname}}</td>
                                                            </tr>
                                                            @endif
                                                            @if($order->customer_lname != "")
                                                            <tr>
                                                                <td width="49%" class="rigttext"><strong>Last Name:</strong></td>
                                                                <td>{{$order->customer_lname}}</td>
                                                            </tr>
                                                            @endif
                                                            @if($order->customer_email != "")
                                                            <tr>
                                                                <td width="49%" class="rigttext"><strong>Email:</strong></td>
                                                                <td>{{$order->customer_email}}</td>
                                                            </tr>
                                                            @endif
                                                            @if($order->customer_phone != "")
                                                            <tr>
                                                                <td width="49%" class="rigttext"><strong>Phone:</strong></td>
                                                                <td>{{$order->customer_phone}}</td>
                                                            </tr>
                                                            @endif

                                                            @if($order->address != "")
                                                            <tr>
                                                                <td width="49%" class="rigttext"><strong>Address:</strong></td>
                                                                <td>{{$order->address}}</td>
                                                            </tr>
                                                            @endif

                                                            @if($order->city != "")
                                                            <tr>
                                                                <td width="49%" class="rigttext"><strong>City:</strong></td>
                                                                <td>{{$order->city}}</td>
                                                            </tr>
                                                            @endif
                                                            @if($order->zip != "")
                                                            <tr>
                                                                <td width="49%" class="rigttext"><strong>Zip:</strong></td>
                                                                <td>{{$order->zip}}</td>
                                                            </tr>
                                                            @endif
                                                            @if($order->customer_state != "")
                                                            <tr>
                                                                <td width="49%" class="rigttext"><strong>State:</strong></td>
                                                                <td>{{$order->customer_state}}</td>
                                                            </tr>
                                                            @endif
                                <tr>
                                    <td width="49%" class="rigttext"><strong>Total Adults:</strong></td>
                                    <td>{{$order->total_adults}}</td>
                                </tr>
                                <tr>
                                    <td width="49%" class="rigttext"><strong>Total Child:</strong></td>
                                    <td>{{$order->total_childs}}</td>
                                </tr>
                                <tr>
                                    <td width="49%" class="rigttext"><strong>Total Cost:</strong></td>
                                    <td>${{$order->pay_amount}}</td>
                                </tr>
                                <tr>
                                    <td width="49%" class="rigttext"><strong>Booking Date:</strong></td>
                                    <td>{{$order->booking_date}}</td>
                                </tr>
                                <tr>
                                    <td width="49%" class="rigttext"><strong>Payment Method:</strong></td>
                                    <td>{{$order->method}}</td>
                                </tr>
                                @if($order->method=="Stripe")
                                <tr>
                                    <td width="49%" class="rigttext"><strong>{{$order->method}} Charge ID:</strong></td>
                                    <td>{{$order->charge_id}}</td>
                                </tr>
                                @endif
                                <tr>
                                    <td width="49%" class="rigttext"><strong>{{$order->method}} Transection ID:</strong></td>
                                    <td>{{$order->txnid}}</td>
                                </tr>
                                                    </tbody></table>
                                                </div>
                                                <!-- Send email start -->
                                                <div class="email-area text-center pt-15 pb-15">
                                                    <input type="hidden" value="{{$order->customer_email}}">
                                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#emailModal" class="btn btn-success table-btn boxed extra email"><i class="fas fa-paper-plane"></i> Contact Customer</a>
                                                </div>
                                                <!-- Send email end -->
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