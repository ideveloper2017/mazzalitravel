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
                            <h3>Patient Details</h3>
                            <a href="{{ route('admin-user-index') }}" class="add-btn back"><i class="fas fa-arrow-left"></i> Back</a>
                          </div>
                          <p>Dashboard <i class="fa fa-angle-right"></i> Patients <i class="fa fa-angle-right"></i> Details</p>
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
                                                                <td width="49%" style="text-align: right;"><strong>ID#</strong></td>
                                                                <td>{{$user->id}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td width="49%" style="text-align: right;"><strong>Name:</strong></td>
                                                                <td>{{$user->name}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td width="49%" style="text-align: right;"><strong>Email:</strong></td>
                                                                <td>{{$user->email}}</td>
                                                            </tr>
                                                            @if($user->phone != "")
                                                            <tr>
                                                                <td width="49%" style="text-align: right;"><strong>Phone:</strong></td>
                                                                <td>{{$user->phone}}</td>
                                                            </tr>
                                                            @endif
                                                            @if($user->fax != "")
                                                            <tr>
                                                                <td width="49%" style="text-align: right;"><strong>Fax:</strong></td>
                                                                <td>{{$user->fax}}</td>
                                                            </tr>
                                                            @endif
                                                            @if($user->address != "")
                                                            <tr>
                                                                <td width="49%" style="text-align: right;"><strong>Address:</strong></td>
                                                                <td>{{$user->address}}</td>
                                                            </tr>
                                                            @endif
                                                            @if($user->city != "")
                                                            <tr>
                                                                <td width="49%" style="text-align: right;"><strong>City:</strong></td>
                                                                <td>{{$user->city}}</td>
                                                            </tr>
                                                            @endif
                                                            @if($user->zip != "")
                                                            <tr>
                                                                <td width="49%" style="text-align: right;"><strong>Zip:</strong></td>
                                                                <td>{{$user->zip}}</td>
                                                            </tr>
                                                            @endif
                                                            <tr>
                                                                <td width="49%" style="text-align: right;"><strong>Joined:</strong></td>
                                                                <td>{{$user->created_at->diffForHumans()}}</td>
                                                            </tr>
                                                    </tbody></table>
                                                </div>
                                                <!-- Send email start -->
                                                <div class="email-area text-center pt-15 pb-15">
                                                    <input type="hidden" value="{{$user->email}}">
                                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#emailModal" class="btn btn-success table-btn boxed extra email"><i class="fas fa-paper-plane"></i> Contact Patient</a>
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