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
                            <h3>Conversation with {{$conv->user->name}}</h3>
                            <a href="{{ route('admin-message-index') }}" class="add-btn back"><i class="fas fa-arrow-left"></i> Back</a>
                          </div>
                          <p>Dashboard <i class="fa fa-angle-right"></i> Messages <i class="fa fa-angle-right"></i> Conversations Details</p>
                        </div>
                      </div>

                      @include('includes.notification')

                    </div>   
                  </div>
                </div>

                <div class="panel-body common pt-30 pb-30 pl-10 pr-10">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-10">
                                            <div class="top-banner-wrap">
                                                <div class="reply-wrap">
                                                    @foreach($conv->messages as $message)
                                                    @if($message->user_id != null)
                                                    <div class="reply mb-30">
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <div class="reply__title">
                                                                    <div class="reply__img">
                                                                        <img src="{{$message->conversation->user->photo != null ? asset('assets/images/users/'.$message->conversation->user->photo) : asset('assets/images/noimage.png')}}" alt="User image">
                                                                    </div>
                                                                    <p>{{$message->conversation->user->name}}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <div class="reply__text">
                                                                    {{$message->message}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @else
                                                    <div class="reply user mb-30">
                                                        <div class="row">
                                                            <div class="col-sm-9">
                                                                <div class="reply__text">
                                                                    {{$message->message}}
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="reply__title">
                                                                    <div class="reply__img">
                                                                        <img src="{{ asset('assets/images/admin.jpg')}}" alt="User image">
                                                                    </div>
                                                                    <p>Admin</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    @endforeach
                                                </div>
                                                <div class="common-form">
                                                    <form action="{{route('admin-message-store')}}" method="POST">
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="conversation_id" value="{{$conv->id}}">
                                                        <div class="form-group row">
                                                            <div class="col-sm-12">
                                                                <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mb-0">
                                                            <div class="col-sm-12">
                                                                <button name="addProduct_btn" type="submit" class="btn btn-primary table-btn boxed">Add Reply</button>
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